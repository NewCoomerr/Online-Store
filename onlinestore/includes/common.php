<?php
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
session_status() === PHP_SESSION_ACTIVE ?: session_start();
?>