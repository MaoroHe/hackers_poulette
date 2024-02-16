<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="bg-gray-800 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center shadow-2xl">
            <div>
                <a href="#" class="text-white text-3xl font-semibold">Hackers Poulette ™</a>
            </div>
            <div>
                <ul class="flex space-x-4">
                    <li><a href="assets/php/admin/connect.php" class="text-white hover:text-gray-300">Panel Admin</a></li>
                    <li><a href="index.php" class="text-white hover:text-gray-300">Accueil</a></li>
                    <li><a href="index.php" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 class="text-3xl font-bold text-center mb-4 mt-6">Dashboard</h2>
    <main class=''>
    <table class='border-collapse border border-slate-600 mx-auto'>
        <thead>
            <tr>
                <th scope="col" class='border border-slate-600'>Name</th>
                <th scope="col" class='border border-slate-600'>First Name</th>
                <th scope="col" class='border border-slate-600'>EMail</th>
                <th scope="col" class='border border-slate-600'>Description</th>
                <th scope="col" class='border border-slate-600'>IMG</th>
                <th scope="col" class='border border-slate-600'>Delete</th>
            </tr>
        </thead>
    <?php
        if ($_SESSION['user'] == 'admin') {

        include("assets/php/connexion/connexion.php");

        $users = $pdo->query("SELECT * FROM users")->fetchAll();

        foreach($users as $user){
            echo "
            <tr>
            <td class='border border-slate-600'> <p class='p-4'>". $user['name'] ."</p> </td>
            <td class='border border-slate-600'> <p class='p-4'>". $user['firstname'] ."</p> </td>
            <td class='border border-slate-600'> <p class='p-4'>". $user['email'] ."</p> </td>
            <td class='border border-slate-600'> <p class='p-4'>". $user['description'] ."</p> </td>
            <td class='border border-slate-600 flex justify-center'><img src='data:image/jpeg;base64,".base64_encode( $user['file'] )."' style='height:100px; margin-left:auto; margin-right:auto;'/></td>
            <td class='border border-slate-600'> <button><a  href='assets/php/delete/delete.php?id=".$user['id']."'>Delete</a></button> </td>
            </tr>";
        }} else {
            header("Location: index.php");
        }
    ?>
    </table>

    <button><a  href='assets/php/admin/end.php'>Disconnect</a></button>
    </main>
</body>
</html>