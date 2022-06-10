<?php
require_once('config.php');

$rows = $mysqli->query('SELECT * FROM `products`')->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<?php require_once('menu-bar.php'); ?>
<br>
<div>
    <?php foreach ($rows as $row): ?>
        <div class="card" style="width: 18rem; float: left; margin-left: 1rem">
            <img src="<?= $row['image_url']; ?>" class="card-img-top" style="max-height: 15rem;"
                 alt="<?= $row['name']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $row['name']; ?></h5>
                <p class="card-text">price <?= $row['price']; ?>$</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>