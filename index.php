<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup and Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

  <!-- Container for the buttons -->
  <div class="flex space-x-4 bg-white p-6 rounded-lg shadow-lg">
    <!-- Signup Button -->
    <a href="/public/signup.php">
        <button class="w-32 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">
            Signup
        </button>
    </a>

    <!-- Login Button -->
    <a href="/public/login.php">
        <button class="w-32 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition duration-300">
            Login
        </button>
    </a>
  </div>

</body>
</html>
