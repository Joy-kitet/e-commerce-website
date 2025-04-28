<?php
session_start();

// Check if cart exists
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShopHub - Cart</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen text-gray-900">

<header class="flex justify-between items-center px-6 py-4 bg-white shadow-sm">
  <div class="text-purple-700 font-bold text-lg">
    ShopHub
  </div>
  <nav>
    <a href="product.html" class="text-gray-600 hover:text-purple-700 mx-2">Products</a>
    <a href="cart.php" class="text-purple-700 font-bold mx-2">Cart (<?php echo count($cart); ?>)</a>
  </nav>
</header>

<main class="max-w-4xl mx-auto p-6">
  <h1 class="text-2xl font-bold mb-6">Your Shopping Cart</h1>

  <?php if (count($cart) > 0): ?>
    <div class="space-y-4">
      <?php foreach ($cart as $item): ?>
        <div class="flex items-center justify-between bg-white p-4 rounded-md shadow-sm">
          <div class="flex items-center space-x-4">
            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="Product" class="w-16 h-16 object-cover rounded">
            <div>
              <h2 class="font-semibold"><?php echo htmlspecialchars($item['name']); ?></h2>
              <p class="text-sm text-gray-600">$<?php echo number_format($item['price'], 2); ?></p>
            </div>
          </div>
          <form action="remove_from_cart.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
            <button class="text-red-500 hover:text-red-700">Remove</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-6 text-right">
      <a href="checkout.php" class="bg-purple-700 hover:bg-purple-800 text-white px-6 py-3 rounded-md font-semibold">Proceed to Checkout</a>
    </div>

  <?php else: ?>
    <p class="text-gray-600">Your cart is currently empty.</p>
  <?php endif; ?>
</main>

</body>
</html>
