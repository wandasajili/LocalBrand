<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Cekout</title>
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
        <div class="mt-6 flex flex-wrap gap-4 justify-start" style="margin-left: 2rem;">
            <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Back</a>
        </div>
        <main>
            <div class="font-[sans-serif] lg:flex lg:items-center lg:justify-center lg:h-screen max-lg:py-4">
                <div class="bg-white p-8 w-full max-w-5xl max-lg:max-w-xl mx-auto rounded-md">
                    <h2 class="text-3xl font-extrabold text-gray-800 text-center">Checkout</h2>

                    <div class="grid lg:grid-cols-3 gap-6 max-lg:gap-8 mt-16">
                        <div class="lg:col-span-2">
                            <h3 class="text-lg font-bold text-gray-800">Choose your payment method</h3>

                            <div class="grid gap-4 sm:grid-cols-2 mt-4">
                                <div class="flex items-center">
                                    <input type="radio" class="w-5 h-5 cursor-pointer" id="card" checked />
                                    <label for="card" class="ml-4 flex gap-2 cursor-pointer">
                                        <img src="https://readymadeui.com/images/visa.webp" class="w-12"
                                            alt="card1" />
                                        <img src="https://readymadeui.com/images/american-express.webp" class="w-12"
                                            alt="card2" />
                                        <img src="https://readymadeui.com/images/master.webp" class="w-12"
                                            alt="card3" />
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" class="w-5 h-5 cursor-pointer" id="paypal" />
                                    <label for="paypal" class="ml-4 flex gap-2 cursor-pointer">
                                        <img src="https://readymadeui.com/images/paypal.webp" class="w-20"
                                            alt="paypalCard" />
                                    </label>
                                </div>
                            </div>

                            <form class="mt-8">
                                <div class="grid sm:col-span-2 sm:grid-cols-2 gap-4">
                                    <div>
                                        <input type="text" placeholder="Name of card holder"
                                            class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                                    </div>
                                    <div>
                                        <input type="number" placeholder="Postal code"
                                            class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                                    </div>
                                    <div>
                                        <input type="number" placeholder="Card number"
                                            class="col-span-full px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                                    </div>
                                    <div>
                                        <input type="number" placeholder="EXP."
                                            class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                                    </div>
                                    <div>
                                        <input type="number" placeholder="CVV"
                                            class="px-4 py-3.5 bg-white text-gray-800 w-full text-sm border rounded-md focus:border-[#007bff] outline-none" />
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-4 mt-8">
                                    <button type="button"
                                        class="px-7 py-3.5 text-sm tracking-wide bg-white hover:bg-gray-50 text-gray-800 rounded-md">Pay
                                        later</button>
                                    <button type="button"
                                        class="px-7 py-3.5 text-sm tracking-wide bg-blue-600 text-white rounded-md hover:bg-blue-700"><a
                                            href="/sale">Submit</a></button>
                                </div>
                            </form>
                        </div>

                        <div class="bg-white p-6 rounded-md max-lg:-order-1">
                            <h3 class="text-lg font-bold text-gray-800">Summary</h3>
                            <ul class="text-gray-800 mt-6 space-y-3">
                                <li class="flex flex-wrap gap-4 text-sm">Sub total <span
                                        class="ml-auto font-bold">$48.00</span></li>
                                <li class="flex flex-wrap gap-4 text-sm">Discount (20%) <span
                                        class="ml-auto font-bold">$4.00</span></li>
                                <li class="flex flex-wrap gap-4 text-sm">Tax <span
                                        class="ml-auto font-bold">$4.00</span></li>
                                <hr />
                                <li class="flex flex-wrap gap-4 text-base font-bold">Total <span
                                        class="ml-auto">$52.00</span></li>
                            </ul>
                        </div>
                    </div>
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
