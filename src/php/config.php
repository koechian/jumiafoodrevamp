<?php
$hostname = "127.0.0.1";
$username = "guest";
$password = "database";
$database = "jumia_food";
$port = 3306;
$conn = new mysqli($hostname, $username, $password, $database,$port) or die("Unable to connect to '$database'");
