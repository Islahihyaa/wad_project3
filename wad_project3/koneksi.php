<?php
$conn = mysqli_connect("localhost", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT * from students");
var_dump($result);
var_dump(mysqli_fetch_object($result));
?>