<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <title>Halaman | Catolog</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/"
                                    class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white"
                                    aria-current="page">Home</a>
                                <a href="/Catolog"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Catolog</a>
                                <a href="/Check "
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Check
                                    Order</a>
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
                                        >
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
                            <svg :class="{ 'block': isOpene, 'hiddene': !isOpene }" class="hidden size-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
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
                    <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Home</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Catolog</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="#"
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
                            <div class="text-base/5 font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
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
                        <a href="#"
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
        <main>
            <section>

                <div class="container mx-auto">
                    <a href="#" class="block rounded-md px-3 py-5 text-base font-medium text-black"
                        aria-current="page">Collections</a>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8"></div>

                    <div class="bg-gray-100 py-10 min-h-screen">
                        <div class="container mx-auto grid grid-cols-6 gap-4">
                            <!-- Card Produk -->
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304578653794158__201027152323_dusty_20pink_054ea1db-3494-49cd-ad79-289b2a91c42f.jpg?v=1710818978&width=533"
                                        alt="Produk 1" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE ZIPPER LIGHT PINK</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>

                            <!-- Salin Struktur Card untuk Produk Lain -->
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304578109231830__201027152417_pink_ff29abb2-e7b4-4d70-9cd7-fdb0285f4164.jpg?v=1710818980&width=533"
                                        alt="Produk 2" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE ZIPPER WHITE</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>

                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304577799035908__201030150724_lilac_767cd6b2-e6a4-4565-bba8-9bef4ea23f46.jpg?v=1710819051&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE ZIPPER BLUE</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304575987665439__201027152408_royal_d3fb0424-efa0-40f1-8654-63b3c6a77c09.jpg?v=1710819040&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE ROYAL PURPLE</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304577557462518__201027152646_hd_20maroon_d087a656-3d0b-49ce-a59b-0d26d3901cc5.jpg?v=1710819036&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE NAVY</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628304576545454451__201027152615_hd_20red_ff1ce82d-a554-44b0-b1fc-fbd497ee2ef9.jpg?v=1710818983&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">HOODIE RED</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628309441445036058__201109152455_pink_20peacock_aceae221-369b-4ad5-9eb2-03d4ea35853a.jpg?v=1710819022"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK SYCAMORE</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628306549299347043__201027144643_crew_20d_20jon_0e9c3430-abab-4b20-9dc3-d59f6d0d4791.jpg?v=1710819025&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK D JON</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628306546692186243__201024104253_crew_20yell_b58331c8-74d7-450b-88e8-f7e56ee6b0c9.jpg?v=1710819034&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK ROTTEN YELLOW</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628306546477513279__201024104549_WhatsApp_20Image_202020-08-31_20at_2022.15.43_0c7572c5-1f29-4f1c-bd96-6e00328b5b49.jpg?v=1710818958&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK ROYAL PURPLE</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 200.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/935ca7c1-56fd-4b20-b14b-07ad70d0399c-COCA_20MOCA_687625eb-c294-41e1-a360-607d03798ef1.jpg?v=1710819389&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK COCA MOCHA</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 150.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/1628306549005879541__201027144655_DUSTY_20PINK_044885a3-0966-49b7-af00-b0a98e59f789.jpg?v=1710819031&width=533"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">CREWNECK DUSTY PINK</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRplTFYTNx2eazhbfG8lFQy8NK_4ehLYSNaoc7d_aBll5pewAc3EjPcp0v3kompF4QEt_0&usqp=CAU"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">BOXING HOOD D JON</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 200.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/files/id-11134207-7r98y-lt3dimi3gg21e1.jpg?v=1715408216&width=1500"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">Cross Stitch OS Green Shirt</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/7c544d48-2165-4f1e-9ed5-644372ed142a-BLACK_19a035ba-dc87-44d2-a8d9-c1c272872069.jpg?v=1710819512&width=1500"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">Cross Stitch OS Black Shirt</h3>
                                <p class="text-gray-500 line-through t-sm">Rp2300.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/d2290440-c837-4c2e-9d4c-334a332d88c5-cotton_20black_0f924f4b-9a57-45bf-b1f0-a60c5a13dd38.jpg?v=1710819407&width=1500"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">STRIPE OVERSIZE NAVY</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://hgbasiclabs.com/cdn/shop/products/11b96509-39a5-45e4-9287-b6b10c77b5d9-hg-stripe-flag-tee-navy_c3ab2001-1a91-48dd-95ab-81da8e05563a.jpg?v=1710819297&width=1500"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">OS FLATKNIT NAVY</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <div class="bg-white rounded shadow p-4 text-center">
                                <div class="relative">
                                    <span
                                        class="absolute top-2 left-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">Sale</span>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0chie3g4pYDLxtvF_8IelpHlt-3aM88wVC6uV2dgn7BoQaUB0pUkRQzyUByZign_F7hY&usqp=CAU"
                                        alt="Produk 3" class="w-full h-auto rounded mb-4">
                                </div>
                                <h3 class="text-gray-700 font-semibold">Cross Stitch OS Beige Shirt</h3>
                                <p class="text-gray-500 line-through text-sm">Rp 200.000,00 IDR</p>
                                <p class="text-red-600 font-bold">Rp 125.000,00 IDR</p>
                            </div>
                            <!-- Tambahkan produk lainnya -->
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
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
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
        </footer>
    </div>

</body>

</html>
