<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management Dashboard</title>
    <!-- Tailwind CSS CDN link -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Main Dashboard Container -->
    <div class="flex">

        <!-- Sidebar (Aside) -->
        <aside class="w-1/4 bg-white p-6 shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Add a New Car</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="car_title" class="block text-sm font-medium text-gray-700">Car Title</label>
                    <input type="text" id="car_title" name="car_title" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="car_image" class="block text-sm font-medium text-gray-700">Car Image</label>
                    <input type="file" id="car_image" accept="image/*">
                    <!-- Display the selected image -->
                    <img id="imagePreview" src="../../../assets/images/car_logo.png" alt="Image Preview" style="max-width: 100%; display: none;">
                    <script>
                        // Get the input field and image preview element
                        const imageInput = document.getElementById('car_image');
                        const imagePreview = document.getElementById('imagePreview');

                        // Add event listener to handle the file input change
                        imageInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];

                            // If a file is selected
                            if (file) {
                                // Create a URL for the image
                                const imageURL = URL.createObjectURL(file);

                                // Set the image preview source and make it visible
                                imagePreview.src = imageURL;
                                imagePreview.style.display = 'block';
                            }
                        });
                    </script>
                </div>

                <div>
                    <label for="car_description" class="block text-sm font-medium text-gray-700">Car description</label>
                    <input type="text" id="car_description" name="car_description" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-300">Add Car</button>
            </form>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-semibold text-gray-800">Welcome to Your Car Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-lg font-medium text-gray-700">John Doe</span>
                    <span class="text-sm text-gray-500">johndoe@example.com</span>
                    <a href="./temp.php" class="text-red-500 font-medium hover:text-red-600 border border-red-500 py-2 px-4 rounded-md hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Logout
                    </a>            
                </div>
            </header>

            <!-- User's Cars List -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Your Cars</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Example Car Card -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800">2019 Toyota Corolla</h3>
                        <p class="text-gray-600">Model: SE</p>
                        <p class="text-gray-600">Year: 2019</p>
                        <p class="text-gray-800 font-bold">$15,000</p>
                        <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
                    </div>

                    <!-- Repeat car cards as necessary -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800">2020 Honda Civic</h3>
                        <p class="text-gray-600">Model: LX</p>
                        <p class="text-gray-600">Year: 2020</p>
                        <p class="text-gray-800 font-bold">$18,000</p>
                        <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
                    </div>

                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800">2018 Ford Mustang</h3>
                        <p class="text-gray-600">Model: GT</p>
                        <p class="text-gray-600">Year: 2018</p>
                        <p class="text-gray-800 font-bold">$22,000</p>
                        <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">View Details</button>
                    </div>
                </div>
            </section>
        </main>

    </div>

</body>
</html>
