<?php

$conn = mysqli_connect("localhost", "root", "", "teretana");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
