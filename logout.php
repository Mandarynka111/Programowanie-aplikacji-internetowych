<?php
require_once("config.php");
$auth->logout();
header("Location:index.php");
