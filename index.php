<?php require "./assets/php/mail/script.php";?>

<?php
  @$name = $_POST['last-name'];
  @$firstname = $_POST['first-name'];
  @$email = $_POST['email'];
  @$description = $_POST['message'];

  if (isset($_POST['submit'])) {
    if (empty($name) && empty($firstname) && empty($email) && empty($description)) {
      $response = "Tout les champs doivent être rempli";
    } else {
      $firstname = $_POST['first-name'];
      $name = $_POST['last-name'];
      
      $msg = "Hello"." ".$firstname. " ".$name." "."your request as been sent, </br>" .$description;
      $sub = "Confirmation Email |" . " ". $firstname. " ". $name;

      $response = sendMail($_POST['email'], $sub, $msg);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='module' src='main.js'></script>
    <link rel="stylesheet" href="assets/css/output.css">
    <title>Hackers Poulette ™</title>
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
        <li><a href="dashboard.php" class="text-white hover:text-gray-300">Panel Admin</a></li>
          <li><a href="index.php" class="text-white hover:text-gray-300">Accueil</a></li>
          <li><a href="index.php" class="text-white hover:text-gray-300">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- === === FORMULAIRE === === -->

  <div class="mx-auto max-w-2xl p-4 my-12">
  <h2 class="text-3xl font-bold text-center mb-4">Contactez-nous</h2>

  <form method="POST" class="space-y-4" enctype="multipart/form-data">

    <!-- FIRST NAME -->
    <div>
      <label for="first-name" id="first-nameLabel" class="block text-sm font-medium text-gray-700">First name</label>
      <input type="text" id="first-name" name="first-name" autocomplete="name" required
             class="mt-1 block w-full ring-1 ring-inset ring-gray-300 bg-gray-100 py-2 px-3.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
    </div>

    <!-- LAST NAME -->
    <div>
      <label for="last-name" id="last-nameLabel" class="block text-sm font-medium text-gray-700">Last name</label>
      <input type="text" id="last-name" name="last-name" autocomplete="name" required
             class="mt-1 block w-full ring-1 ring-inset ring-gray-300 bg-gray-100 py-2 px-3.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
    </div>

    <!-- EMAIL -->
    <div style="margin-top: 10px;">
      <label for="email" id="emaiLabel" class="block text-sm font-medium text-gray-700">Email</label>
      <input type="email" id="email" name="email" autocomplete="email" required
             class="mt-1 block w-full ring-1 ring-inset ring-gray-300 bg-gray-100 py-2 px-3.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
    </div>

    <!-- MESSAGE -->
    <div>
      <label for="message" id="messageLabel" class="block text-sm font-medium text-gray-700">Message</label>
      <textarea id="message" name="message" rows="4" required
                class="mt-1 block w-full ring-1 ring-inset ring-gray-300 bg-gray-100 py-2 px-3.5 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"></textarea>
    </div>

    <label for="file" class="block text-sm font-semibold leading-6 text-gray-900">Files</label>
    <div class="mt-2.5">
      <input type="file" name="file" id="file" autocomplete="" class="bg-gray-100  block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <!-- CHECKBOX -->
    <div class="flex items-center">
      <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
      <label for="terms" class="ml-2 block text-sm text-gray-900 ">Je consens à la politique de confidentialité</label>
    </div>

    
    <!-- SUBMIT -->
    <div>
      <button type="submit" id="submit" name="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Envoyer</button>
    </div>

  </form>
</div>




  <?php
    include("./assets/php/connexion/connexion.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['last-name'];
        $firstname = $_POST['first-name'];
        $email = $_POST['email'];
        $description = $_POST['message'];
    
        // Check if a file was uploaded
        if(isset($_FILES['file'])) {
            @$file = file_get_contents($_FILES['file']['tmp_name']);
        }
    
        if (!empty($name) && !empty($firstname) && !empty($email) && !empty($description) && !empty($file)) {
            $prep = $pdo->prepare('INSERT INTO users (name, firstname, email, file, description) VALUES (?,?,?,?,?)');
            $prep->execute(array(
                $name,
                $firstname,
                $email,
                $file,
                $description,
            ));
        }
    }
    ?>
</body>
</html>