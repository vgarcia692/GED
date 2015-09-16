<?php
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DATABASE", "ged");

try {
    // Create DB Connection
    $dbConn = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
