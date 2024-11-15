<?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $passcode = $_POST['password'];
    }

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ash";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }

    // Sql query to check if user exists
    $sql = "SELECT * FROM `customer_list` WHERE `email` = '$email' AND `password` = '$passcode'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        // User found
        $message = "Login Successful!";
        $redirect_link = "./dashboard.php"; // Redirect to the dashboard
        $action_button = "Go to Dashboard";
    } else {
        // User not found
        $message = "Invalid email or password. Please try again.";
        $redirect_link = "../../../public/login.php"; // Redirect back to login page
        $action_button = "Go back to Login";
    }

    // Close the database connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Status</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">

    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Login Status</h2>

        <div class="text-center mb-6">
            <p class="text-lg text-gray-700"><?php echo $message; ?></p>
        </div>

        <div class="flex justify-center">
            <a href="<?php echo $redirect_link; ?>" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
                <?php echo $action_button; ?>
            </a>
        </div>
    </div>

</body>
</html>
