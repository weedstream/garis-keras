Index

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LBS MERCH</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }

        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Add smooth scroll to all links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</head>
<body class="bg-black text-white">
 <div class="bg-neutral-950">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-black ">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <div class="logo">
                <img src="assets/lbss" alt="LBS Logo" class=" h-[80px]">
            </div>
            <button class="text-white md:hidden z-50" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="menu" class="hidden absolute top-full right-0 left-0 md:relative md:flex md:space-x-6 md:ml-auto text-white bg-black md:bg-transparent rounded-md md:rounded-none shadow-md md:shadow-none">
                <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-6 p-4 md:p-0">
                    <li>
                        <a href="#about" class="hover:text-yellow-500 flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>About Us
                        </a>
                    </li>
                    <li>
                        <a href="#product" class="hover:text-yellow-500 flex items-center">
                            <i class="fas fa-box-open mr-2"></i>Product
                        </a>
                    </li>
                    <li>
                        <a href="#faq" class="hover:text-yellow-500 flex items-center">
                            <i class="fas fa-question-circle mr-2"></i>FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#testimonial" class="hover:text-yellow-500 flex items-center">
                            <i class="fas fa-comment-dots mr-2"></i>Testimonial
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:text-yellow-500 flex items-center">
                            <i class="fas fa-envelope mr-2"></i>Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
     <!-- Full-width Banner -->
    <div class="relative w-full">
        <img src="assets/bannerr" alt="Banner Image" class="w-full h-auto object-cover">
    </div>
<!-- About Us Section -->
    <section id="about" class="py-16 ">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-4xl font-extrabold text-white mb-6 text-center">About Us</h2>
        <div class="flex flex-col md:flex-row items-center md:items-start justify-between">
            <div class="mb-8 md:mb-0 md:w-1/2 md:pr-10">
                <img src="assets/tribun" alt="LBS MERCH" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2">
                <p class="text-lg text-white mb-4 leading-relaxed">
                    LBS MERCH is a proud local brand dedicated to creating top-tier merchandise that resonates with the passion and pride of <strong>PSIS Pemalang</strong> supporters. We bring unique, modern designs that capture the spirit of the game and the heart of the community.
                </p>
                <p class="text-lg text-white mb-4 leading-relaxed">
                    Our products are more than just apparel—they are a symbol of loyalty and a badge of honor for every PSIP Pemalang fan. From stylish t-shirts to durable accessories, each item is crafted with attention to detail, ensuring both quality and comfort.
                </p>
                <p class="text-lg text-white mb-4 leading-relaxed">
                    At LBS MERCH, we believe in celebrating the collective spirit of our supporters. Whether you're cheering from the stands or representing your team in everyday life, our merchandise allows you to showcase your support with pride and style.
                </p>
                <div class="text-center md:text-left">
                    <a href="#product" class="inline-block mt-6 px-8 py-3 bg-yellow-500 text-black font-semibold rounded-lg shadow hover:bg-yellow-600 transition duration-300 text-center">Explore Our Products</a>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Product Section -->
    <section id="product" class="py-16 ">
        <!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->

    <div class="text-center ">
        <h1 class="font-bold text-4xl mb-4 text-white">OUR PRODUCTS</h1>
    </div>

    <!-- ✅ Grid Section - Starts Here 👇 -->
    <section id="Projects"
        class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 ">

        <!--   ✅ Product card 1 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            @foreach ($data as $item)
            <a href="">
                {{-- <img src="assets/AWAYDAYS" --}}
                <img src="{{ asset('img/' . $item->image) }}"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">T-Shirts</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $item->title }}</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">Rp {{ number_format($item->harga) }}</p>
                        {{-- <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$50</p>
                        </del> --}}
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <!--   🛑 Product card 1 - Ends Here  -->

        <!--   ✅ Product card 2 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="LBS">
                <img src="assets/LBSXPSIPP"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Long Sleeve</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">LBSXPSIPP</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$29.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$55</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card 2- Ends Here  -->

        <!--   ✅ Product card 3 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="MLB">
                <img src="assets/MLBB"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">T-Shirts</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">MLBB</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$29.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$50</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card 3 - Ends Here  -->

        <!--   ✅ Product card 4 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="LBS1">
                <img src="assets/LBS1P"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Long Sleeve</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">LBS1P</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$29.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$70</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card 4 - Ends Here  -->

        <!--   ✅ Product card 5 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="Love">
                <img src="assets/LoveP"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Hoodie</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">Love Pemalang</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$39.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$70</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card 5 - Ends Here  -->

        <!--   ✅ Product card 6 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="H1980">
                <img src="assets/H1980P"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Hoodie</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">H1980P</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$39.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$80</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   ✅ Product card 7 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="NSLCS">
                <img src="assets/NSLCSP"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">T-Shirts</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">NSLCSP</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$29.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$50</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   ✅ Product card 8 - Starts Here 👇 -->
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="CLBSXPSIP">
                <img src="assets/CLBSXPSIPP"
                        alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">Hoodie</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">CLBSXPSIPP</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">$49.99</p>
                        <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">$120</p>
                        </del>
                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></div>
                    </div>
                </div>
            </a>
        </div>
        <!--   🛑 Product card 8 - Ends Here  -->

    </section>
    </section>

    <!-- 🛑 Grid Section - Ends Here -->



    <!-- FAQ Section -->
    <section id="faq" class="py-1">
        <section class=" text-gray-100 py-2 ">
  <div class="container flex flex-col justify-center p-4 mx-auto md:p-8">
    <h2 class="mb-12 text-4xl font-bold leadi text-center sm:text-5xl">Frequently Asked Questions</h2>
    <div class="flex flex-col divide-y sm:px-8 lg:px-12 xl:px-32 divide-gray-700">
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">How can I place an order?</summary>
        <div class="px-4 pb-4">
          <p>You can easily place an order on our website by browsing our product catalog, selecting the items you want, and adding them to your cart. Then, proceed to checkout, where you can provide your shipping and payment information to complete the order.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">What payment methods do you accept?</summary>
        <div class="px-4 pb-4">
          <p>We accept various payment methods, including credit cards, debit cards, net banking, and mobile wallet payments. You can choose the payment option that is most convenient for you during the checkout process.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">How long does shipping take?</summary>
        <div class="px-4 pb-4">
          <p>Shipping times may vary depending on your location and the shipping method chosen. Typically, orders are processed within 1-2 business days, and delivery can take 3-7 business days within India. You will receive a tracking notification once your order is shipped.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">Can I return a product if I'm not satisfied?</summary>
        <div class="px-4 pb-4">
          <p>Yes, we have a hassle-free return policy. If you are not satisfied with your purchase, you can initiate a return within 30 days of receiving the product. Please contact our customer support at <a href="" class="underline">example@gmail.com</a> for assistance.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">Do you offer international shipping?</summary>
        <div class="px-4 pb-4">
          <p>Currently, we only provide shipping services within India. However, we may consider expanding our shipping options to international locations in the future. Please stay updated with our website for any changes in shipping destinations.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">What is your customer support contact?</summary>
        <div class="px-4 pb-4">
          <p>If you have any questions, concerns, or need assistance, you can reach our customer support team at 9911083755 during our business hours, Monday to Saturday from 10 am to 6 pm. You can also contact us via email at <a href="" class="underline">example@gmail.com</a>.</p>
        </div>
      </details>
      <details>
        <summary class="py-2 outline-none cursor-pointer focus:underline">What are your terms and conditions?</summary>
        <div class="px-4 pb-4">
          <p>You can find our detailed terms and conditions by visiting our
            <a href="" class="underline">Terms of Service</a>
            page on our website. It includes information about our policies, user guidelines, and more.</p>
        </div>
      </details>
    </div>
  </div>
</section>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" >
        <div class="bg-neutral-950">
          <section class="max-w-5xl mx-auto w-full px-10 py-10">
            <div class="flex items-center justify-center flex-col gap-y-2 py-5">
              <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold max-w-md mx-auto text-center text-white">Here's what our
                <span class="text-[#45B3BA]">customers</span> have to say
              </h2>
              <p class="text-lg font-medium text-slate-400/70">Discover how our service can benefit you</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 w-full">
              <div
                class="border p-7 rounded-xl bg-neutral-900 drop-shadow-md border-neutral-800/50 col-span-2 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                  <p class="font-bold text-xl text-white">Efficient customer support</p>
                  <p class="font-medium text-white">The customer support team at our service is incredibly responsive and
                    helpful. They went above and beyond to assist me with my issue.</p>
                </div>
                <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Emily Smith" class="h-10 w-10">
                  <p class="pt-2 text-sm font-semibold text-white">Emily Smith</p>
                  <p class="text-sm font-medium text-slate-100/70">Marketing Manager at ABC Company</p>
                </div>
              </div>
              <div
                class="border p-7 rounded-xl bg-neutral-900 drop-shadow-md border-neutral-800/50 col-span-3 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                  <p class="font-bold text-xl text-white">Excellent product features</p>
                  <p class="font-medium text-white">The features offered by our service are outstanding. They have greatly
                    improved our workflow and efficiency.</p>
                </div>
                <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/men/34.jpg" alt="Michael Johnson" class="h-10 w-10">
                  <p class="pt-2 text-sm font-semibold text-white">Michael Johnson</p>
                  <p class="text-sm font-medium text-slate-100/70">CEO at XYZ Corporation</p>
                </div>
              </div>
              <div
                class="border p-7 rounded-xl bg-neutral-900 drop-shadow-md border-neutral-800/50 col-span-3 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                  <p class="font-bold text-xl text-white">Seamless integration process</p>
                  <p class="font-medium text-white">Integrating our systems with our service was smooth and hassle-free. The
                    support team guided us through every step of the process.</p>
                </div>
                <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/women/71.jpg" alt="Sarah Brown" class="h-10 w-10">
                  <p class="pt-2 text-sm font-semibold text-white">Sarah Brown</p>
                  <p class="text-sm font-medium text-slate-100/70">CTO at XYZ Corporation</p>
                </div>
              </div>
              <div
                class="border p-7 rounded-xl bg-neutral-900 drop-shadow-md border-neutral-800/50 col-span-2 flex flex-col gap-y-10 justify-between">
                <div class="flex flex-col gap-y-3.5">
                  <p class="font-bold text-xl text-white">Reliable service uptime</p>
                  <p class="font-medium text-white">Our service has consistently maintained high uptime, ensuring that our
                    operations run smoothly without any disruptions.</p>
                </div>
                <div class="flex flex-col"><img src="https://randomuser.me/api/portraits/men/71.jpg" alt="James White" class="h-10 w-10">
                  <p class="pt-2 text-sm font-semibold text-white">James White</p>
                  <p class="text-sm font-medium text-slate-100/70">COO at XYZ Corporation</p>
                </div>
              </div>
            </div>
          </section>
        </div>
    </section>

    <footer id="contact" class="pt-8 pb-3 bg-neutral-950">

    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-white">Visit Our Location</h2>
            <p class="mt-4 text-lg text-gray-500">Here is our store to visit.</p>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506714.36280837917!2d108.99107563397476!3d-7.159953062988586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fdbc778d3af99%3A0x7708688d9771dc2e!2sGaris%20Keras%20Store!5e0!3m2!1sid!2sid!4v1724955976079!5m2!1sid!2sid"
                        width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-white"><i class="fas fa-map-marker-alt mr-2"></i>Our Address</h3>
                            <p class="mt-1 text-gray-200">Jl. Krakatau No.122, Wanarejan Selatan, Wanarejan Sel., Kec. Taman, Kabupaten Pemalang, Jawa Tengah 52361</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-white"><i class="fas fa-clock mr-2"></i>Hours</h3>
                            <p class="mt-1 text-gray-200"><i class="fas fa-calendar-alt mr-2"></i>Monday - Friday: 9am - 5pm</p>
                            <p class="mt-1 text-gray-200"><i class="fas fa-calendar-day mr-2"></i>Saturday: 10am - 4pm</p>
                            <p class="mt-1 text-gray-200"><i class="fas fa-calendar-times mr-2"></i>Sunday: Closed</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-white"><i class="fas fa-phone-alt mr-2"></i>Contact</h3>
                            <p class="mt-1 text-gray-200"><i class="fas fa-envelope mr-2"></i>Email: lbesmerch@gmail.com</p>
                            <p class="mt-1 text-gray-200"><i class="fas fa-phone mr-2"></i>Phone: 08996667797</p>
                            <p class="mt-1 text-gray-200"><i class="fab fa-instagram mr-2"></i>Instagram: @lbs.merch</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

 </div>
</body>
    <!-- Contact Us Section -->


</html>
