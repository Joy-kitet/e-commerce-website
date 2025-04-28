<main class="px-6 py-12 max-w-7xl mx-auto">
    <?php
    echo "<h2 class='text-2xl font-bold text-green-500'>PHP is Working!</h2>";
    ?>
    <!-- rest of your dashboard HTML -->
    <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   ShopHub - Responsive Pages
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
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
 <body class="bg-white text-gray-900 font-sans">
  <!-- Header -->
  <header class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-b border-gray-200">
   <div class="text-purple-700 font-extrabold text-lg select-none mb-3 sm:mb-0">
    ShopHub
   </div>
   <nav class="flex flex-wrap justify-center sm:justify-start space-x-0 sm:space-x-6 space-y-2 sm:space-y-0 text-gray-600 text-sm font-normal w-full sm:w-auto">
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm" href="index.html">
     Home
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm" href="products.html">
     Products
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm" href="about.html">
     About
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm" href="contact.html">
     Contact
    </a>
   </nav>
   <div class="mt-3 sm:mt-0">
    <button aria-label="Cart" class="text-gray-700 hover:text-gray-900 text-lg">
     <i class="fas fa-shopping-cart">
     </i>
    </button>
   </div>
  </header>

  <!-- Home Page -->
  <main class="px-6 py-12 max-w-7xl mx-auto">
   <section id="home" class="text-center max-w-4xl mx-auto mb-16">
    <h1 class="text-4xl font-extrabold text-purple-700 mb-6 select-none">
     Welcome to ShopHub
    </h1>
    <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8 select-none px-2 sm:px-0">
     Your one-stop shop for premium electronics, clothing, furniture, and more. Discover the best products tailored just for you.
    </p>
    <a href="products.html" class="inline-block bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none">
     Browse Products
    </a>
    <section class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-2 sm:px-0">
     <article class="border border-gray-200 rounded-md p-6 select-none">
      <h2 class="font-bold text-xl mb-3 text-purple-700">
       Electronics
      </h2>
      <p class="text-gray-600 text-sm">
       Explore the latest gadgets and devices with cutting-edge technology and sleek designs.
      </p>
     </article>
     <article class="border border-gray-200 rounded-md p-6 select-none">
      <h2 class="font-bold text-xl mb-3 text-purple-700">
       Clothing
      </h2>
      <p class="text-gray-600 text-sm">
       Find comfortable and stylish apparel made from organic and sustainable materials.
      </p>
     </article>
     <article class="border border-gray-200 rounded-md p-6 select-none">
      <h2 class="font-bold text-xl mb-3 text-purple-700">
       Furniture
      </h2>
      <p class="text-gray-600 text-sm">
       Discover modern and classic furniture pieces to enhance your living space.
      </p>
     </article>
    </section>
   </section>

   <!-- Products Page -->
   <section id="products" class="mb-16">
    <h2 class="font-bold text-lg mb-6 select-none">
     All Products
    </h2>
    <div class="flex flex-col md:flex-row md:space-x-8">
     <aside class="w-full md:w-64 mb-8 md:mb-0 px-2 sm:px-0">
      <form class="space-y-6">
       <div>
        <label class="block font-semibold text-sm mb-1 select-none" for="search">
         Search
        </label>
        <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="search" placeholder="Search products..." type="text"/>
       </div>
       <div>
        <p class="font-semibold text-sm mb-2 select-none">
         Categories
        </p>
        <div class="space-y-1 text-xs font-semibold text-gray-700 select-none max-h-48 overflow-y-auto">
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Electronics
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Clothing
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Furniture
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Accessories
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Home
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Fitness
          </span>
         </label>
         <label class="flex items-center space-x-2">
          <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
          <span>
           Kitchen
          </span>
         </label>
        </div>
       </div>
       <div>
        <p class="font-semibold text-sm mb-1 select-none">
         Price Range
        </p>
        <input aria-label="Price Range" class="w-full accent-purple-600" max="1000" min="0" type="range"/>
        <div class="flex justify-between text-xs text-gray-500 select-none mt-1">
         <span>
          $0
         </span>
         <span>
          $1000
         </span>
        </div>
       </div>
      </form>
     </aside>
     <section class="flex-1 px-2 sm:px-0">
      <p class="text-xs text-gray-600 mb-3 select-none">
       Showing 12 products
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
       <!-- Product 1 -->
       <article class="border border-gray-200 rounded-md overflow-hidden select-none">
        <div class="relative">
         <img alt="Black premium wireless headphones on a yellow background" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/78bd07c9-8e65-4e42-9bc2-27bd5cf52e57.jpg" width="400"/>
         <span class="absolute top-2 left-2 bg-purple-400 text-white text-xs font-semibold rounded-full px-2 py-0.5">
          Featured
         </span>
        </div>
        <div class="p-3">
         <h3 class="font-semibold text-sm mb-1">
          Premium Wireless Headphones
         </h3>
         <div class="flex items-center text-yellow-400 text-xs mb-1">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
          <span class="text-gray-500 ml-1">
           (156)
          </span>
         </div>
         <p class="text-gray-600 text-xs leading-tight">
          Experience crystal-clear sound with our premium wireless headphones.
                Featuring...
         </p>
        </div>
       </article>
       <!-- Product 2 -->
       <article class="border border-gray-200 rounded-md overflow-hidden select-none">
        <div class="relative">
         <img alt="Man wearing a plain white organic cotton t-shirt in a blurred indoor background" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/e5e2fb44-8c74-457d-2008-0695bf96f672.jpg" width="400"/>
         <span class="absolute top-2 left-2 bg-purple-400 text-white text-xs font-semibold rounded-full px-2 py-0.5">
          Featured
         </span>
        </div>
        <div class="p-3">
         <h3 class="font-semibold text-sm mb-1">
          Organic Cotton T-Shirt
         </h3>
         <div class="flex items-center text-yellow-400 text-xs mb-1">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
          <span class="text-gray-500 ml-1">
           (89)
          </span>
         </div>
         <p class="text-gray-600 text-xs leading-tight">
          Ultra-soft organic cotton t-shirt, perfect for everyday wear.
                Breathable, comfor...
         </p>
        </div>
       </article>
       <!-- Product 3 -->
       <article class="border border-gray-200 rounded-md overflow-hidden select-none">
        <div class="relative">
         <img alt="Smart watch series 5 with black strap and a fiery clock face on white background" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/f8ee1d2c-2b49-415b-dd52-b289d0c127ef.jpg" width="400"/>
         <span class="absolute top-2 left-2 bg-purple-400 text-white text-xs font-semibold rounded-full px-2 py-0.5">
          Featured
         </span>
        </div>
        <div class="p-3">
         <h3 class="font-semibold text-sm mb-1">
          Smart Watch Series 5
         </h3>
         <div class="flex items-center text-yellow-400 text-xs mb-1">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
          <i class="far fa-star">
          </i>
          <span class="text-gray-500 ml-1">
           (203)
          </span>
         </div>
         <p class="text-gray-600 text-xs leading-tight">
          Track your fitness goals, receive notifications, and more with our latest...
         </p>
        </div>
       </article>
      </div>
     </section>
    </div>
   </section>

   <!-- About Page -->
   <section id="about" class="max-w-4xl mx-auto mb-16 px-2 sm:px-0">
    <h1 class="text-3xl font-extrabold text-purple-700 mb-6 select-none">
     About ShopHub
    </h1>
    <section class="space-y-6 text-gray-700 text-base leading-relaxed select-none">
     <p>
      ShopHub was founded with the mission to provide customers with a seamless and enjoyable shopping experience. We carefully curate a wide range of products, from electronics to clothing and furniture, ensuring quality and value.
     </p>
     <p>
      Our team is passionate about helping you find the perfect items that fit your lifestyle and needs. We believe in transparency, excellent customer service, and continuous innovation to keep up with the latest trends and technologies.
     </p>
     <p>
      Thank you for choosing ShopHub. We look forward to serving you and making your shopping journey delightful.
     </p>
    </section>
   </section>

   <!-- Contact Page -->
   <section id="contact" class="max-w-3xl mx-auto px-2 sm:px-0">
    <h1 class="text-3xl font-extrabold text-purple-700 mb-6 select-none">
     Contact Us
    </h1>
    <form class="space-y-6" action="#" method="POST" novalidate>
     <div>
      <label class="block text-sm font-semibold mb-1 select-none" for="name">
       Name
      </label>
      <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="name" name="name" placeholder="Your full name" required="" type="text"/>
     </div>
     <div>
      <label class="block text-sm font-semibold mb-1 select-none" for="email">
       Email
      </label>
      <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="email" name="email" placeholder="you@example.com" required="" type="email"/>
     </div>
     <div>
      <label class="block text-sm font-semibold mb-1 select-none" for="message">
       Message
      </label>
      <textarea class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="message" name="message" placeholder="Write your message here..." required="" rows="5"></textarea>
     </div>
     <div>
      <button class="bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none" type="submit">
       Send Message
      </button>
     </div>
    </form>
   </section>
  </main>
 </body>
</html>>
</main>
