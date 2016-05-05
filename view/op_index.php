<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Storage</th>
    <th>Price</th>
    <th>Number_goods</th>
    <th>Operations</th>
  </tr>
  <?php foreach ($products_s as $products) : ?>
  <tr>
    <td><?php print htmlspecialchars($products['id']); ?></td>
    <td><?php print htmlspecialchars($products['name']); ?></td>
    <td><?php print htmlspecialchars($products['storage']); ?></td>
    <td><?php print htmlspecialchars($products['price']); ?></td>
    <td><?php print htmlspecialchars($products['number_goods']); ?></td>
    <td>
      <a href="index.php?op=update&id=<?php print htmlspecialchars($products['id']); ?>">Edit</a>
      <a href="index.php?op=delete&id=<?php print htmlspecialchars($products['id']); ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<div>
  <a href="index.php?op=create">Create</a>
</div>
