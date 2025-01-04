<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Check Order</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
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
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
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
                                        <a href="/login"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign out</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                    </button>
                                </div>

                                <div x-show="isOpen"x-transition:enter="transition ease-out
                                 duration-100 transform" x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">

                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>

                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpene, 'block': !isOpene }" class="block size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpene, 'hiddene': !isOpene }" class="hidden size-6"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="md:hidden" id="mobile-menu">
                <div x-show="isOpen" class="md:hidden bg-gray-800 text-gray-300 space-y-2 py-3 px-4">
                    <a href="/" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="/Catolog"
                        class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Catolog</a>
                    <a href="/Check" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Check
                        Order</a>
                    <a href="/contact"
                        class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
            </div>
        </nav>

        <main class="bg-white flex flex-col items-center justify-center min-h-screen px-4 sm:px-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-4xl font-bold">Check Order</h1>
                <p class="mt-2 text-gray-600 text-sm sm:text-base">
                    Silahkan Check Email Yang Terdaftar Saat Memesan Atau<br>
                    Download Aplikasi Flik di Google Play dan App Store<br>
                    Untuk mengetahui Pesanan dan Reward.
                </p>
            </div>

            <div class="flex flex-wrap items-center justify-center my-4 space-x-4">
                <img src="https://framerusercontent.com/images/rth5QMnftL3sjNDIQugqlMwa0.png" alt="Flik Logo"
                    class="h-10 sm:h-12">
            </div>

            <div class="flex flex-wrap items-center justify-center my-4 space-x-4">
                <img src="https://cdn.shopify.com/s/files/1/0573/3597/1953/files/playstore_480x480.png?v=1715848728"
                    alt="Google Play Logo" class="h-10 sm:h-12">
            </div>

            <div class="flex flex-wrap items-center justify-center my-4 space-x-4">
                <img src="https://cdn.shopify.com/s/files/1/0573/3597/1953/files/apstore_480x480.png?v=1715848727"
                    alt="App Store Logo" class="h-10 sm:h-12">
            </div>

            <div class="mt-8 w-full sm:w-1/2 lg:w-1/3">
                <h2 class="text-base sm:text-lg font-semibold text-center">Subscribe to our emails</h2>
                <form class="mt-4 flex flex-col sm:flex-row items-center sm:justify-center">
                    <input type="email" placeholder="Email"
                        class="border border-gray-300 rounded p-2 w-full sm:w-3/4" required>
                    <button type="submit"
                        class="bg-blue-500 text-white rounded p-2 mt-2 sm:mt-0 sm:ml-2 w-full sm:w-auto">
                        Subscribe
                    </button>
                </form>
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

                    <div>
                        {{-- <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2> --}}
                        {{-- <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">iOS</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Android</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Windows</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">MacOS</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
    </div>
    </footer>
</body>

</html>
