<?php
require_once("config.php");
$rows = $mysqli->query('SELECT * FROM `products`')->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
</head>
<body>
<?php require_once("menu-bar.php") ?>
<br>
<div class="text-center">
    <a href="add.php">
        <button type="button" class="btn btn-success">Add Product</button>
    </a>
</div>
<br>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($rows as $row): ?>
        <tr>
            <th><img src="<?= $row['image_url']; ?>" style="height: 3rem"></th>
            <th><?= $row['name']; ?></th>
            <th><?= $row['price']; ?></th>
            <th>
                <a href="edit.php?id=<?= $row['id']; ?>">
                    <button class="btn btn-warning">Edit</button>
                </a>
            </th>
            <th>
                <a href="delete.php?id=<?= $row['id']; ?>">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
