<?php

$sth = $pdo->prepare('SELECT
 products.id,
 products.name,
 products.storage,
 products.price,
 products.number_goods,
 storages.name AS storage
FROM products
INNER JOIN storages ON products.storage = storages.id
ORDER BY id ASC');
$sth->execute();

$products_s = array();
while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
  $products_s[] = $row;
}

ob_start();

require __DIR__ . '/../view/op_index.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';
