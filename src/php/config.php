<?php
// $hostname = "sq11.freemysqlhosting.net";
// $username = "sql11528063";
// $password = "Itsfyi2dfG";
// $database = "sql11528063";

define("DB_SERVER", "sq11.freemysqlhosting.ne");
define("DB_USER", "sql11528063");
define("DB_PASSWORD", "Itsfyi2dfG");
define("DB_DATABASE", "sql1152806");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
// $conn = new mysqli($hostname, $username, $password, $database) or die("Unable to connect to '$database'");
