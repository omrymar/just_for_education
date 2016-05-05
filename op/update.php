<?php

$sth = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$sth->execute(array(':id' => $_GET['id']));

if ($products = $sth->fetch(PDO::FETCH_ASSOC)) {

  if (!empty($_POST['save'])) {
    $sth = $pdo->prepare('UPDATE products SET name = :name, storage = :storage, price = :price, number_goods = :number_goods WHERE id = :id');
    $sth->execute(array(
        ':name' => $_POST['name'],
        ':storage' => $_POST['storage'],
        ':price' => $_POST['price'],
        ':number_goods' => $_POST['number_goods'],
        ':id' => $_GET['id'],
    ));

    header('Location: index.php');
    exit;
  }

  $storages = get_available_storages();

  ob_start();

  require __DIR__ . '/../view/form.php';

  $content = ob_get_clean();

  require __DIR__ . '/../view/main.php';
}
