<?php

    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ash";
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $carCount = 0;
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry, we failed to connect: " . mysqli_connect_error());
    }

    // Sql query to check if user exists
    $sql = "SELECT * FROM `customer_list`";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        // User found
        $carCount = mysqli_num_rows($result);
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
    // PHP Code to process something
    $greetingMessage = "Hello, Welcome to the Car Dashboard!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Main Content Area -->
    <div class="flex flex-col items-center justify-center min-h-screen">

        <!-- Greeting Section -->
        <div class="bg-white p-8 rounded-lg shadow-lg mb-6 text-center w-1/2">
            <h2 class="text-3xl font-semibold text-gray-800"><?php echo $greetingMessage; ?></h2>
            <p class="text-lg text-gray-600 mt-4">You have <?php echo $carCount; ?> cars in your dashboard.</p>
        </div>

        <!-- Additional Information Section -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg w-1/2">
            <h3 class="text-2xl font-bold">Important Updates</h3>
            <ul class="list-disc list-inside mt-4">
                <li>Your car details are up to date.</li>
                <li>Check the status of each car from the dashboard.</li>
                <li>Don't forget to update the car image regularly!</li>
            </ul>
        </div>

    </div>

</body>
</html>
