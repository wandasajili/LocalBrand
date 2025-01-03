<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Home</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:flex items-baseline space-x-4">
                            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300"
                                aria-current="page">Home</a>
                            <a href="/Catolog"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Catolog</a>
                            <a href="/Check"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Check
                                Order</a>
                            <a href="/contact"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <div
                            class="flex px-4 py-2 rounded-md border-2 border-gray-700 overflow-hidden max-w-md mx-auto font-[sans-serif]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                                class="fill-gray-600 mr-3 rotate-90">
                                <path
                                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                                </path>
                            </svg>
                            <input type="email" placeholder="Search Something..."
                                class="w-full outline-none bg-transparent text-white text-sm" />
                        </div>

                        <button type="button"
                            class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9a6 6 0 00-12 0v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                        <div x-data="{ isDropdownOpen: false }" class="relative">
                            <button @click="isDropdownOpen = !isDropdownOpen"
                                class="rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white">
                                <span class="sr-only">Open user menu</span>
                                <svg class="w-6 h-6 text-gray-400 hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z" />
                                </svg>
                            </button>
                            <div x-show="isDropdownOpen" @click.away="isDropdownOpen = false"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                                <a href="/login"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign
                                    out</a>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <button @click="isOpen = !isOpen"
                            class="text-gray-400 hover:bg-gray-700 hover:text-white p-2 rounded-md">
                            <svg x-show="!isOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                            <svg x-show="isOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="isOpen" class="md:hidden bg-gray-800 text-gray-300 space-y-2 py-3 px-4">
                <a href="/" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Home</a>
                <a href="/Catolog" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Catolog</a>
                <a href="/Check" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Check Order</a>
                <a href="/contact" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Contact</a>
            </div>
        </nav>
        <div class="flex flex-col md:flex-row max-w-4xl mx-auto p-6 space-y-6 md:space-y-0 md:space-x-6">
            <div class="flex-1">
                <h1 class="text-4xl font-bold mb-4">Local Brand</h1>
                <p class="text-gray-700 mb-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sequi nihil doloremque quae numquam
                    repellendus! Dolore iusto reiciendis commodi qui, enim, optio soluta porro necessitatibus incidunt
                    nobis, iure sapiente vero.
                </p>
                <div class="flex space-x-4">
                    <button class="bg-black text-white py-2 px-4 rounded-lg">ADD TO CART</button>
                    <a href="/sale" class="rounded-md px-3 py-2 bg-blue-500 text-white hover:bg-blue-700">SALE</a>
                </div>
            </div>
            <div class="flex-none">
                <img src="https://hgbasiclabs.com/cdn/shop/products/6d9ef2f2-c83a-4f67-868d-75164b3dd11c-GREY-WHITE_e8d2f675-9b65-4c38-ba34-13de8e5617cf.jpg?v=1710819445&width=600"
                    alt="Air Jordan 1 Dark Mocha" class="w-full md:w-72">
            </div>
        </div>


        <main class="grid min-h-full place-items-center bg-white px-6 py-10">
            <!-- Product Categories -->
            <section id="products" class="">
                <div class="container mx-auto">
                    
                    <h3 class="text-3xl font-bold text-center text-black mb-10">Flash sale</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Category Card 1 -->
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/products/6d9ef2f2-c83a-4f67-868d-75164b3dd11c-GREY-WHITE_e8d2f675-9b65-4c38-ba34-13de8e5617cf.jpg?v=1710819445&width=600"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">CREWNECK STRIPE GREY-WHITE</h3>
                            <p class="text-black font-bold">Rp 125.000,00 IDR</p>
                        </div>
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/products/49f59da1-ed8a-4595-8cca-53200f400456-djon-navy_ed8519cd-adc0-46f0-a1bf-e1ebdbb4cbfb.jpg?v=1710819451&width=600"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">TWIST CREWNECKNAVY-DJON</h3>
                            <p class="text-black font-bold">Rp 125.000,00 IDR</p>
                        </div>
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/products/d70b4572-3bcb-44ac-ad7c-ae77c6f31341-navy_20-_20blue_abd0aac6-0d7d-46c6-8320-48f4ecd5da2d.jpg?v=1710819367&width=600"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">HOODIE STRIPE NAVY GREY</h3>
                            <p class="text-black font-bold">Rp 250.000,00 IDR</p>
                        </div>
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/products/1628309441445036058__201109152455_pink_20peacock_aceae221-369b-4ad5-9eb2-03d4ea35853a.jpg?v=1710819022"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">CREWNECK SYCAMORE</h3>
                            <p class="text-black font-bold">Rp 150.000,00 IDR</p>
                        </div>
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/products/2ce2a50c-9b7a-4c74-9689-86935e98850b-blue_b4590c23-d05c-4c85-8f8e-38570af03bf0.jpg?v=1710819480&width=600"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">HEAVY COTTON STRIPE BLUE</h3>
                            <p class="text-black font-bold">Rp 125.000,00 IDR</p>
                        </div>
                        <div class="bg-white rounded shadow p-4 text-center">
                            <div class="relative">
                                <span
                                    class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                <img src="https://hgbasiclabs.com/cdn/shop/files/id-11134207-7r98t-ltj69w3cmvbe35.jpg?v=1715400779&width=600"
                                    alt="Produk 3" class="w-full h-auto rounded mb-4">
                            </div>
                            <h3 class="text-gray-700 font-semibold">Birmingham Flex Outer Khaki</h3>
                            <p class="text-black font-bold">Rp 200.000,00 IDR</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#"
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                        <a href="#/Catolog" aria-current="page"
                            class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                        <a href="#"
                            class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#"
                            class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <a href="#"
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </main>

        <footer class="bg-white dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="/" class=" hover:underline">Home</a>
                            </li>
                            <li class="mb-4">
                                <a href="/Catolog" class="hover:underline">Catolog</a>
                            </li>
                            <li class="mb-4">
                                <a href="/Check" class="hover:underline">Check
                                    Order</a>
                            </li>
                            <li class="mb-4">
                                <a href="/contact" class="hover:underline">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">instragam</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Licensing</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
