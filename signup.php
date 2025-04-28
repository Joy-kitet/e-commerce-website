<?php
// signup.php

// Database connection (update with your own db username/password if needed)
$mysqli = new mysqli('localhost', 'root', '7739', 'shophub');
$host = "localhost";



// Check connection
if ($mysqli->connect_error) {
    die('Connection Error: ' . $mysqli->connect_error);
}

$success = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Basic validation
    if (empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if user already exists
        $stmt = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "An account with this email already exists.";
        } else {
            // Insert new user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = $mysqli->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $insert->bind_param('ss', $email, $hashed_password);

            if ($insert->execute()) {
                $success = "Account created successfully! You can now <a href='login.php' class='text-purple-700 hover:underline'>log in</a>.";
            } else {
                $error = "Something went wrong. Please try again.";
            }
            $insert->close();
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>ShopHub - Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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
        Sign Up for ShopHub
      </h1>

      <?php if (!empty($error)) : ?>
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
          <?php echo $error; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($success)) : ?>
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
          <?php echo $success; ?>
        </div>
      <?php endif; ?>

      <form class="space-y-6" action="signup.php" method="POST" novalidate>
        <div>
          <label class="block text-sm font-semibold mb-1 select-none" for="email">Email</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="email" name="email" placeholder="you@example.com" required type="email" />
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1 select-none" for="password">Password</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="password" name="password" placeholder="Enter your password" required type="password" />
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1 select-none" for="confirm_password">Confirm Password</label>
          <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required type="password" />
        </div>
        <div>
          <button class="w-full bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none" type="submit">
            Sign Up
          </button>
        </div>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600 select-none">
        Already have an account?
        <a class="text-purple-700 hover:underline" href="login.php">Log In</a>
      </p>
    </section>
  </main>
</body>
</html>
