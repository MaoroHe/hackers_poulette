<?php
    session_start();

    include("../connexion/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/output.css">
</head>
<body>
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center shadow-2xl">
            <div>
                <a href="#" class="text-white text-3xl font-semibold">Hackers Poulette ™</a>
            </div>
            <div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-white hover:text-gray-300">Panel Admin</a></li>
                    <li><a href="../../../index.php" class="text-white hover:text-gray-300">Accueil</a></li>
                    <li><a href="../../../index.php" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" class='border'>
        <label for="password">Password</label>
        <input type="password" name="password" class='border'>
        <button type="submit" class='border'>Submit</button>
    </form>

    <?php

    if (@$_SESSION['user'] == 'admin') {
        header('Location: ../../../dashboard.php');
    } else {
        @$username = $_POST['username'];
        @$password = $_POST['password'];
        $select = $pdo->query("SELECT * FROM admin")->fetchAll();

        foreach($select as $admin){
            if ($username == $admin['username'] && $password == $admin['password']) {
                $_SESSION['user'] = 'admin';
                header('Location: ../../../dashboard.php');
            } else {
                echo 'Username or Password not valid!';
            }
        }}
    ?>
</body>
</html>