<?php
    include("../connexion/connexion.php");

    $prep = $pdo->prepare("SELECT * FROM users WHERE id = 30 LIMIT 1");
    $prep->execute();
    $tab = $prep->fetchAll(PDO::FETCH_ASSOC);
    echo $tab[0]['file'];
