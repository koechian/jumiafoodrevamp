<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "jumia_food";
$conn = new mysqli($hostname, $username, $password, $database) or die("Unable to connect to '$database'");
