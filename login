<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   ShopHub - Functional Site with Login Redirect
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
 <body class="bg-white text-gray-900 font-sans min-h-screen flex flex-col">
  <header class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-b border-gray-200">
   <div class="text-purple-700 font-extrabold text-lg select-none mb-3 sm:mb-0 cursor-pointer" id="logo">
    ShopHub
   </div>
   <nav class="flex flex-wrap justify-center sm:justify-start space-x-0 sm:space-x-6 space-y-2 sm:space-y-0 text-gray-600 text-sm font-normal w-full sm:w-auto" id="nav-links">
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm cursor-pointer" data-page="home">
     Home
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm cursor-pointer" data-page="products">
     Products
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm cursor-pointer" data-page="about">
     About
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm cursor-pointer" data-page="contact">
     Contact
    </a>
    <a class="hover:text-gray-900 px-3 py-1 rounded-sm font-semibold cursor-pointer" data-page="login">
     Log In
    </a>
   </nav>
   <div class="mt-3 sm:mt-0 cursor-pointer" id="cart-button" aria-label="Cart" title="Cart">
    <i class="fas fa-shopping-cart text-gray-700 hover:text-gray-900 text-lg">
    </i>
   </div>
  </header>
  <main class="flex-grow px-6 py-12 max-w-7xl mx-auto" id="main-content">
   <!-- Content will be injected here -->
  </main>
  <script>
   // Page content templates
   const pages = {
    home: `
     <section class="text-center max-w-4xl mx-auto mb-16">
      <h1 class="text-4xl font-extrabold text-purple-700 mb-6 select-none">
       Welcome to ShopHub
      </h1>
      <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8 select-none px-2 sm:px-0">
       Your one-stop shop for premium electronics, clothing, furniture, and more. Discover the best products tailored just for you.
      </p>
      <button id="browse-products-btn" class="inline-block bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none cursor-pointer">
       Browse Products
      </button>
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
    `,
    products: `
     <h2 class="font-bold text-lg mb-6 select-none">
      All Products
     </h2>
     <div class="flex flex-col md:flex-row md:space-x-8">
      <aside class="w-full md:w-64 mb-8 md:mb-0 px-2 sm:px-0">
       <form class="space-y-6" id="product-filter-form">
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
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Electronics"/>
           <span>
            Electronics
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Clothing"/>
           <span>
            Clothing
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Furniture"/>
           <span>
            Furniture
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Accessories"/>
           <span>
            Accessories
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Home"/>
           <span>
            Home
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Fitness"/>
           <span>
            Fitness
           </span>
          </label>
          <label class="flex items-center space-x-2">
           <input class="form-checkbox h-4 w-4 text-purple-600 category-checkbox" type="checkbox" value="Kitchen"/>
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
         <input aria-label="Price Range" class="w-full accent-purple-600" id="price-range" max="1000" min="0" type="range" value="1000"/>
         <div class="flex justify-between text-xs text-gray-500 select-none mt-1">
          <span>
           $0
          </span>
          <span id="price-range-value">
           $1000
          </span>
         </div>
        </div>
       </form>
      </aside>
      <section class="flex-1 px-2 sm:px-0">
       <p class="text-xs text-gray-600 mb-3 select-none" id="products-count">
        Showing 3 products
       </p>
       <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="products-grid">
        <!-- Products will be rendered here -->
       </div>
      </section>
     </div>
    `,
    about: `
     <h1 class="text-3xl font-extrabold text-purple-700 mb-6 select-none">
      About ShopHub
     </h1>
     <section class="space-y-6 text-gray-700 text-base leading-relaxed select-none max-w-4xl mx-auto">
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
    `,
    contact: `
     <h1 class="text-3xl font-extrabold text-purple-700 mb-6 select-none">
      Contact Us
     </h1>
     <form class="space-y-6 max-w-3xl mx-auto" id="contact-form" novalidate>
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
       <button class="bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none cursor-pointer" type="submit">
        Send Message
       </button>
      </div>
     </form>
    `,
    login: `
     <section class="w-full max-w-md bg-white border border-gray-200 rounded-md p-8 shadow-sm mx-auto">
      <h1 class="text-3xl font-extrabold text-purple-700 mb-6 text-center select-none">
       Log In to ShopHub
      </h1>
      <form class="space-y-6" id="login-form" novalidate>
       <div>
        <label class="block text-sm font-semibold mb-1 select-none" for="email">
         Email
        </label>
        <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="email" name="email" placeholder="you@example.com" required="" type="email"/>
       </div>
       <div>
        <label class="block text-sm font-semibold mb-1 select-none" for="password">
         Password
        </label>
        <input class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent" id="password" name="password" placeholder="Enter your password" required="" type="password"/>
       </div>
       <div class="flex items-center justify-between text-sm">
        <label class="flex items-center space-x-2 select-none">
         <input class="form-checkbox h-4 w-4 text-purple-600" type="checkbox" name="remember"/>
         <span>
          Remember me
         </span>
        </label>
        <a class="text-purple-700 hover:underline cursor-pointer" id="forgot-password-link">
         Forgot password?
        </a>
       </div>
       <div>
        <button class="w-full bg-purple-700 text-white font-semibold px-6 py-3 rounded-md hover:bg-purple-800 transition select-none cursor-pointer" type="submit">
         Log In
        </button>
       </div>
      </form>
      <p class="mt-6 text-center text-sm text-gray-600 select-none">
       Don't have an account?
       <a class="text-purple-700 hover:underline cursor-pointer" id="sign-up-link">
        Sign up
       </a>
      </p>
     </section>
    `
   };

   // Sample products data
   const productsData = [
    {
     id: 1,
     title: "Premium Wireless Headphones",
     category: "Electronics",
     price: 299,
     rating: 4.5,
     reviews: 156,
     description: "Experience crystal-clear sound with our premium wireless headphones. Featuring...",
     image: "https://storage.googleapis.com/a1aa/image/78bd07c9-8e65-4e42-9bc2-27bd5cf52e57.jpg",
     alt: "Black premium wireless headphones on a yellow background",
     featured: true
    },
    {
     id: 2,
     title: "Organic Cotton T-Shirt",
     category: "Clothing",
     price: 25,
     rating: 4.5,
     reviews: 89,
     description: "Ultra-soft organic cotton t-shirt, perfect for everyday wear. Breathable, comfor...",
     image: "https://storage.googleapis.com/a1aa/image/e5e2fb44-8c74-457d-2008-0695bf96f672.jpg",
     alt: "Man wearing a plain white organic cotton t-shirt in a blurred indoor background",
     featured: true
    },
    {
     id: 3,
     title: "Smart Watch Series 5",
     category: "Accessories",
     price: 399,
     rating: 3.5,
     reviews: 203,
     description: "Track your fitness goals, receive notifications, and more with our latest...",
     image: "https://storage.googleapis.com/a1aa/image/f8ee1d2c-2b49-415b-dd52-b289d0c127ef.jpg",
     alt: "Smart watch series 5 with black strap and a fiery clock face on white background",
     featured: true
    }
   ];

   // Utility to create star rating HTML
   function createStarRating(rating) {
    const fullStars = Math.floor(rating);
    const halfStar = rating % 1 >= 0.5;
    const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
    let starsHtml = "";
    for (let i = 0; i < fullStars; i++) {
     starsHtml += '<i class="fas fa-star"></i>';
    }
    if (halfStar) {
     starsHtml += '<i class="fas fa-star-half-alt"></i>';
    }
    for (let i = 0; i < emptyStars; i++) {
     starsHtml += '<i class="far fa-star"></i>';
    }
    return starsHtml;
   }

   // Render products based on filters
   function renderProducts(filter = {}) {
    const container = document.getElementById("products-grid");
    const countEl = document.getElementById("products-count");
    if (!container || !countEl) return;

    let filtered = productsData;

    // Filter by search text
    if (filter.searchText) {
     const searchLower = filter.searchText.toLowerCase();
     filtered = filtered.filter(p => p.title.toLowerCase().includes(searchLower) || p.description.toLowerCase().includes(searchLower));
    }

    // Filter by categories
    if (filter.categories && filter.categories.length > 0) {
     filtered = filtered.filter(p => filter.categories.includes(p.category));
    }

    // Filter by price max
    if (filter.priceMax !== undefined) {
     filtered = filtered.filter(p => p.price <= filter.priceMax);
    }

    countEl.textContent = `Showing ${filtered.length} product${filtered.length !== 1 ? "s" : ""}`;

    container.innerHTML = filtered.map(p => `
     <article class="border border-gray-200 rounded-md overflow-hidden select-none">
      <div class="relative">
       <img alt="${p.alt}" class="w-full h-48 object-cover" height="300" src="${p.image}" width="400"/>
       ${p.featured ? '<span class="absolute top-2 left-2 bg-purple-400 text-white text-xs font-semibold rounded-full px-2 py-0.5">Featured</span>' : ''}
      </div>
      <div class="p-3">
       <h3 class="font-semibold text-sm mb-1">${p.title}</h3>
       <div class="flex items-center text-yellow-400 text-xs mb-1">${createStarRating(p.rating)}<span class="text-gray-500 ml-1">(${p.reviews})</span></div>
       <p class="text-gray-600 text-xs leading-tight">${p.description}</p>
      </div>
     </article>
    `).join("");
   }

   // Simple validation for demo: accept only one user
   const validUser = {
    email: "user@example.com",
    password: "password123"
   };

   // Load page content
   function loadPage(page) {
    const main = document.getElementById("main-content");
    if (!pages[page]) return;
    main.innerHTML = pages[page];

    if (page === "home") {
     const browseBtn = document.getElementById("browse-products-btn");
     if (browseBtn) {
      browseBtn.addEventListener("click", () => loadPage("products"));
     }
    }

    if (page === "products") {
     renderProducts();

     // Setup filters
     const searchInput = document.getElementById("search");
     const categoryCheckboxes = document.querySelectorAll(".category-checkbox");
     const priceRange = document.getElementById("price-range");
     const priceRangeValue = document.getElementById("price-range-value");

     function updateFilters() {
      const searchText = searchInput.value.trim();
      const categories = Array.from(categoryCheckboxes).filter(cb => cb.checked).map(cb => cb.value);
      const priceMax = Number(priceRange.value);
      priceRangeValue.textContent = `$${priceMax}`;
      renderProducts({searchText, categories, priceMax});
     }

     searchInput.addEventListener("input", updateFilters);
     categoryCheckboxes.forEach(cb => cb.addEventListener("change", updateFilters));
     priceRange.addEventListener("input", updateFilters);
    }

    if (page === "contact") {
     const contactForm = document.getElementById("contact-form");
     if (contactForm) {
      contactForm.addEventListener("submit", e => {
       e.preventDefault();
       alert("Thank you for contacting ShopHub! We will get back to you soon.");
       contactForm.reset();
      });
     }
    }

    if (page === "login") {
     const loginForm = document.getElementById("login-form");
     if (loginForm) {
      loginForm.addEventListener("submit", e => {
       e.preventDefault();
       const email = loginForm.email.value.trim();
       const password = loginForm.password.value.trim();
       if (!email || !password) {
        alert("Please enter both email and password.");
        return;
       }
       if (email === validUser.email && password === validUser.password) {
        alert(`Welcome back, ${email}!`);
        loadPage("home");
        window.scrollTo(0, 0);
       } else {
        alert("Invalid email or password. Please try again.");
       }
       loginForm.reset();
      });
     }
     const forgotLink = document.getElementById("forgot-password-link");
     if (forgotLink) {
      forgotLink.addEventListener("click", () => alert("Password reset link sent to your email."));
     }
     const signUpLink = document.getElementById("sign-up-link");
     if (signUpLink) {
      signUpLink.addEventListener("click", () => alert("Redirecting to sign up page (not implemented)."));
     }
    }
   }

   // Navigation click handler
   function onNavClick(e) {
    if (e.target.matches("[data-page]")) {
     const page = e.target.getAttribute("data-page");
     loadPage(page);
     window.scrollTo(0, 0);
    }
   }

   // Logo click loads home
   document.getElementById("logo").addEventListener("click", () => {
    loadPage("home");
    window.scrollTo(0, 0);
   });

   // Nav links click
   document.getElementById("nav-links").addEventListener("click", onNavClick);

   // Cart button click
   document.getElementById("cart-button").addEventListener("click", () => {
    alert("Your cart is currently empty.");
   });

   // Load home page initially
   loadPage("home");
  </script>
 </body>
</html>