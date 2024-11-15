<?php
    // Variables to be inserted into the table
    $name = "";
    $email = "";
    $passcode = ""; 

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
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

    // Check if the user already exists
    $sql_check = "SELECT * FROM `customer_list` WHERE `email` = '$email'";
    $result_check = mysqli_query($conn, $sql_check);

    // If a record is found, show user already exists
    if (mysqli_num_rows($result_check) > 0) {
        $message = "User already exists. Please login.";
        $redirect_link = "../../../public/login.php";
        $action_button = "Go to Login";
    } else {
        // If no record found, insert the new user
        $sql_insert = "INSERT INTO `customer_list` (`name`, `email`, `password`) VALUES ('$name', '$email', '$passcode')";
        $result_insert = mysqli_query($conn, $sql_insert);

        if ($result_insert) {
            $message = "The record has been inserted successfully!";
            $redirect_link = "../../../public/login.php";
            $action_button = "Go to Login";
        } else {
            $message = "The record was not inserted successfully because of this error: " . mysqli_error($conn);
            $redirect_link = "../../../public/signup.php";
            $action_button = "Try Again";
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">

    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Registration Status</h2>

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
