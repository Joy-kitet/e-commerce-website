<?php
session_start(); // Start the session to store user data

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sample credentials (Replace this with your database query to check credentials)
    $stored_email = "user@example.com"; // This would come from the database
    $stored_password = "password123";  // This would come from the database (hashed)

    // Simple validation (You can enhance this with more robust methods)
    if ($email == $stored_email && $password == $stored_password) {
        $_SESSION['user'] = $email; // Store the user email in the session
        header("Location: dashboard.php"); // Redirect to the dashboard (or home page)
        exit();
    } else {
        $error_message = "Invalid email or password!";
    }
}
?>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>ShopHub - Log In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Custom scrollbar for vertical scroll on the right */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #a1a1aa;
            border-radius: 4px;
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-sans min-h-screen flex flex-col">
    <header class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-b border-gray-200">
        <div class="text-purple-700 font-extrabold text-lg select-none mb-3 sm:mb-0">
            ShopHub
        </div>
        <div class="mt-3 sm:mt-0">
            <button aria-label="Cart" class="text-gray-700 hover:text-gray-900 text-lg">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </header>
    <main class="flex-grow flex items-center justify-center px-6 py-12">
        <section class="w-full max-w-md bg-white border border-gray-200 rounded-md p-8 shadow-sm">
            <h1 class="text-3xl font-extrabold text-purple-700 mb-6 text-center select-none">
                Log In to ShopHub
            </h1>
            <?php if (isset($error_message)): ?>
                <p class="text-red-500 text-center mb-4"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form class="space-y-6" action="login.php" method="POST" novalidate>
                <div>
                    <label class="block text-sm font-semibold mb-1 select-none" for="email">
                        Email
                    </label>
                    <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="email" name="email" placeholder="you@example.com" required type="email"/>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1 select-none" for="password">
                        Password
                    </label>
                    <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="password" name="password" placeholder="Enter your password" required type="password"/>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center space-x-2 select-none">
                        <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox" name="remember"/>
                        <span>
                            Remember me
                        </span>
                    </label>
                    <a class="text-purple-700 hover:underline" href="#">
                        Forgot password?
                    </a>
                </div>
                <div>
                    <button class="w-full bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none" type="submit">
                        Log In
                    </button>
                </div>
            </form>
            <p class="mt-6 text-center text-sm text-gray-600 select-none">
                Don't have an account?
                <a class="text-purple-700 hover:underline" href="#">
                    Sign up
                </a>
            </p>
        </section>
    </main>
</body>
</html>
