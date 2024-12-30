{{-- <!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <title>Halaman | Home</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8"
                                src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">Home</a>
                                <a href="/Blog"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                                <a href="/About"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                                <a href="/contact"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
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
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="/blod"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                    <a href="/about"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="/contact"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Wanda Sajili</div>
                            <div class="text-sm font-medium text-gray-400">admin@example.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="/your profile"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="/Admin"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Admin</a>
                        <a href="/sing in"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            in</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                        Selamat datang di </h1>
                    <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Pustaka TMS Barokah
                        Plastik</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/Blog"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Detail
                            Produk</a>
                        <a href="/contact" class="text-sm font-semibold text-gray-900">Contact support <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>

            <!-- Product Categories -->
            <section id="products" class="py-16">
                <div class="container mx-auto">
                    <h3 class="text-3xl font-bold text-center text-green-700 mb-10">Kategori Produk</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Category Card 1 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Makanan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Makanan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Beragam pilihan makanan lezat dari pelaku UMKM lokal.</p>
                            </div>
                        </div>
                        <!-- Category Card 2 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Minuman" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Minuman</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Cicipi berbagai minuman segar dan berkualitas.</p>
                            </div>
                        </div>
                        <!-- Category Card 3 -->
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="https://shop.indomarkt.com/2785-large_default/bogasari-tepung-terigu-segitiga-biru-1kg.jpg"
                                alt="Kerajinan" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="text-xl font-bold text-green-700">Kerajinan</h4>
                                <p>Rp.100.000</p>
                                <p class="text-gray-600">Produk kerajinan tangan dengan keunikan lokal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                <a href="/Blog" class="hover:underline">Blog</a>
                            </li>
                            <li class="mb-4">
                                <a href="/about" class="hover:underline">About</a>
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
                                <a href="#" class="hover:underline">Discord Server</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Contact Us</a>
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
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
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
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html> --}}
