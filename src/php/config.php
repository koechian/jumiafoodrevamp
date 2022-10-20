<?php
$servername = "127.0.0.1";
$username = "root";
$password = "database";
$dbname = "jumia_food";
$conn = new mysqli($servername, $username, $password, $dbname) or die("Unable to connect to '$dbname'");
