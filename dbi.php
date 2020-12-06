<?php
    $servername = "localhost";
    $username = "root";
    $password = "KupsaSQL";
    $database = "PosGamp";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        $sql = "CREATE DATABASE PosGamp";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
        $conn = null;
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE login (
        id INt (6) UNSIGNED AUTO_INCREMENT PRIMARy KEY,
        username VARCHAR (30) NOT NULL,
        vorname VARCHAR(30) NOT NULL,
        nachname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        passwort VARCHAR(30) NOT NULL,
        regdatum TIMESTAMP
        )";
        $conn->exec($sql);
        echo "Table created successfully<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        echo $sql . "<br>" . $e->getMessage();
    }

        echo $sql . "<br>" . $e->getMessage();

    $conn = null;
?>