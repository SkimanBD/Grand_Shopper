<?php
$con=mysqli_connect("localhost","root","","grandshopper");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
