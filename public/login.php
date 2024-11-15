<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

  <!-- Login Form Container -->
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6">Login</h2>

    <!-- Form -->
    <form action="../api/users/login.php" method="POST" class="space-y-4">

      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
        <input type="email" id="email" name="email" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your email address">
      </div>

      <!-- Password Input -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
        <input type="password" id="password" name="password" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter your password">
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Login
        </button>
      </div>
      
      <!-- Don't have an account? -->
      <p class="text-sm text-center text-gray-600 mt-4">
        Don't have an account? 
        <a href="./signup.php" class="text-blue-500 hover:text-blue-600">Sign up here</a>
      </p>

    </form>
  </div>

</body>
</html>
