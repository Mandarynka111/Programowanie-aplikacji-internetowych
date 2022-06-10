<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $url = $_POST['url'];
    $price = $_POST['price'];

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $mysqli->query("UPDATE `products` SET name = '" . $name . "', image_url ='" . $url . "', price = " . $price . " WHERE id = " . $id);
        header("Location:products.php");
        return;
    }

    $mysqli->query("INSERT INTO `products` VALUES (NULL, '" . $name . "', " . $price . ", '" . $url . "')");
    header("Location:products.php");
}