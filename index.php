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
  <?php
    include("assets/php/connexion/connexion.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['last-name'];
        $firstname = $_POST['first-name'];
        $email = $_POST['email'];
        $description = $_POST['message'];
        function sanitEmail() {
          $email = $_POST['email'];
          $sanitized_a = filter_var($email, FILTER_SANITIZE_EMAIL);

          if (filter_var($sanitized_a, FILTER_VALIDATE_EMAIL)) {
            return true;
        }}
    
        // Check if a file was uploaded
        if(isset($_FILES['file'])) {
            @$file = file_get_contents($_FILES['file']['tmp_name']);
        }
    
        if (!empty($name) && !empty($firstname) && !empty($email) && !empty($description) && !empty($file) && sanitEmail()) {
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