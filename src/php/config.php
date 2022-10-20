<?php
$hostname = "127.0.0.1";
$username = "guest";
$password = "database";
$database = "jumia_food";
$conn = new mysqli($hostname, $username, $password, $database) or die("Unable to connect to '$database'");
