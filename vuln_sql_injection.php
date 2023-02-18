<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "username", "password", "database");
$sql = "SELECT * FROM users WHERE id = " . $id;
$result = mysqli_query($conn, $sql);
?>
