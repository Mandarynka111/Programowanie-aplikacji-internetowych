<?php
require_once("config.php");

$productId = $mysqli->real_escape_string($_GET['id']);

$mysqli->query("DELETE FROM products WHERE id =" . $productId);

header("Location:products.php");

