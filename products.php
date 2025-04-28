
  <!-- Products Page -->
  <main class="px-6 py-12 max-w-7xl mx-auto">
    <section id="products" class="mb-16">
      <h2 class="font-bold text-lg mb-6 select-none">All Products</h2>
      <div class="flex flex-col md:flex-row md:space-x-8">
        <aside class="w-full md:w-64 mb-8 md:mb-0 px-2 sm:px-0">
          <form class="space-y-6">
            <div>
              <label class="block font-semibold text-sm mb-1 select-none" for="search">Search</label>
              <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="search" placeholder="Search products..." type="text"/>
            </div>
            <!-- Categories filter (static for now) -->
            <div>
              <p class="font-semibold text-sm mb-2 select-none">Categories</p>
              <div class="space-y-1 text-xs font-semibold text-gray-700 select-none">
                <label class="flex items-center space-x-2">
                  <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
                  <span>Electronics</span>
                </label>
                <label class="flex items-center space-x-2">
                  <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
                  <span>Clothing</span>
                </label>
                <label class="flex items-center space-x-2">
                  <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox"/>
                  <span>Furniture</span>
                </label>
              </div>
            </div>
          </form>
        </aside>

        <section class="flex-1 px-2 sm:px-0">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            // Display products from the database
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '
                <article class="border border-gray-200 rounded-md overflow-hidden select-none">
                  <div class="relative">
                    <img alt="'.$row["name"].'" class="w-full h-48 object-cover" src="'.$row["image_url"].'"/>
                    <span class="absolute top-2 left-2 bg-purple-400 text-white text-xs font-semibold rounded-full px-2 py-0.5">Featured</span>
                  </div>
                  <div class="p-3">
                    <h3 class="font-semibold text-sm mb-1">'.$row["name"].'</h3>
                    <p class="text-gray-600 text-xs leading-tight">'.$row["description"].'</p>
                    <div class="flex items-center text-yellow-400 text-xs mb-1">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 text-xs leading-tight">Price: $'.$row["price"].'</p>
                  </div>
                </article>';