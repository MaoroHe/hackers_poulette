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
        <!-- === === FORMULAIRE === === -->


    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact support</h2>
      <p class="mt-2 text-lg leading-8 text-gray-600">Tell us your problem, we will deal with it as soon as possible.</p>
    </div>
    <form action="" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="first-name" id="first-nameLabel" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
          <div class="mt-2.5">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="last-name" id="last-nameLabel" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
          <div class="mt-2.5">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        
        <div class="sm:col-span-2">
          <label for="email" id='emaiLabel' class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
          <div class="mt-2.5">
            <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        
        <div class="sm:col-span-2">
          <label for="message" id="messageLabel" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
          <div class="mt-2.5">
            <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <!-- files div -->
        <div class="sm:col-span-2">
            <label for="file" class="block text-sm font-semibold leading-6 text-gray-900">Files</label>
            <div class="mt-2.5">
              <input type="file" name="file" id="file" autocomplete="file" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="flex gap-x-4 sm:col-span-2">
          <div class="flex h-6 items-center">
            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
            <button type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
              <span class="sr-only">Agree to policies</span>
              <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
              <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
            </button>
          </div>
          <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
            By selecting this, you agree to our
            <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
          </label>
        </div>
      </div>
      <div class="mt-10">
        <button type="submit" id='submit' class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
      </div>
    </form>
  </div>

  <?php
    include("assets/php/connexion/connexion.php");
    
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