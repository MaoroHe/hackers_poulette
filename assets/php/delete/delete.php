<?php
    include("../connexion/connexion.php");

    $id = $_GET['id'];

    $prep = $pdo->prepare('DELETE FROM users WHERE id = ?');
    $prep->execute(array($id));

    header('Location: ../../../dashboard.php');