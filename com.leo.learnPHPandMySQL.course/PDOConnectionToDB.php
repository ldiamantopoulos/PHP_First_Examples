<?php
//PDO is more flexible because you can use it with multiple types of databases
// and more secure as it uses prepared statements
$id = 1;
try {
    $conn = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root','12345');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);

   $stmt = $conn->prepare('SELECT * FROM employees WHERE id = :id');
   $stmt->execute(array('id' => $id));

    while ($row = $stmt->fetch()) {
        print_r($row);
    }
} catch (PDOException $e) {
    echo 'smt wrong';
}

