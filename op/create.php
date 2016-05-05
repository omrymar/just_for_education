<?php

$products = array(
  'name' => '',
  'price' => '',
  'number_goods' =>'',
);

if (!empty($_POST['save'])) {
  $sth = $pdo->prepare('INSERT INTO products (name, storage, price, number_goods ) VALUES (:name, :storage, :price, :number_goods)');
  $sth->execute(array(
    ':name' => $_POST['name'],
    ':storage' => $_POST['storage'],
    ':price' => $_POST['price'],
    ':number_goods' => $_POST['number_goods'],
  ));

  header('Location: index.php');
  exit;
}

$storages = get_available_storages();

ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
