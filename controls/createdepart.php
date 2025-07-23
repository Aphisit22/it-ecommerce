<?php

    include 'db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $depart = $_POST['depart'];
    
        $sql = "INSERT INTO department (depart) VALUES (?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $depart
        ]);
    }
?>