<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Sale</title>
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
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300"
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
                            <div class="hidden md:flex items-center space-x-4">
                                <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white">
                                    <span class="sr-only">View notifications</span>
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9a6 6 0 00-12 0v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>
                                <div x-data="{ isDropdownOpen: false }" class="relative">
                                    <button @click="isDropdownOpen = !isDropdownOpen" class="rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white">
                                        <span class="sr-only">Open user menu</span>
                                        <svg class="w-6 h-6 text-gray-400 hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1h16v-1c0-2.66-5.33-4-8-4z" />
                                        </svg>
                                    </button>
                                    <div x-show="isDropdownOpen" @click.away="isDropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Your Profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Settings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign out</a>
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
                <div x-show="isOpen" class="md:hidden bg-gray-800 text-gray-300 space-y-2 py-3 px-4">
                    <a href="/" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="/Catolog" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Catolog</a>
                    <a href="/Check" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Check Order</a>
                    <a href="/contact" class="block rounded-md px-3 py-2 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
            </div>
        </nav>


        <main class="flex">
            <div class="font-sans p-4 mx-auto lg:max-w-6xl md:max-w-4xl">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mb-6 sm:mb-10">Collections</h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304578653794158__201027152323_dusty_20pink_054ea1db-3494-49cd-ad79-289b2a91c42f.jpg?v=1710818978&width=533"
                                alt="Product 1" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE ZIPPER
                                    LIGHT PINK</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304578109231830__201027152417_pink_ff29abb2-e7b4-4d70-9cd7-fdb0285f4164.jpg?v=1710818980&width=533"
                                class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE ZIPPER
                                    WHITE
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304577799035908__201030150724_lilac_767cd6b2-e6a4-4565-bba8-9bef4ea23f46.jpg?v=1710819051&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE ZIPPER
                                    BLUE
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304575987665439__201027152408_royal_d3fb0424-efa0-40f1-8654-63b3c6a77c09.jpg?v=1710819040&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE ROYAL
                                    PURPLE
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304577557462518__201027152646_hd_20maroon_d087a656-3d0b-49ce-a59b-0d26d3901cc5.jpg?v=1710819036&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE NAVY
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628304576545454451__201027152615_hd_20red_ff1ce82d-a554-44b0-b1fc-fbd497ee2ef9.jpg?v=1710818983&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">HOODIE RED</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628309441445036058__201109152455_pink_20peacock_aceae221-369b-4ad5-9eb2-03d4ea35853a.jpg?v=1710819022"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK SYCAMORE
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628306549299347043__201027144643_crew_20d_20jon_0e9c3430-abab-4b20-9dc3-d59f6d0d4791.jpg?v=1710819025&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK D JON
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>


                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628306546692186243__201024104253_crew_20yell_b58331c8-74d7-450b-88e8-f7e56ee6b0c9.jpg?v=1710819034&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK ROTTEN
                                    YELLOW</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>

                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628306546477513279__201024104549_WhatsApp_20Image_202020-08-31_20at_2022.15.43_0c7572c5-1f29-4f1c-bd96-6e00328b5b49.jpg?v=1710818958&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK ROYAL
                                    PURPLE</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>


                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/935ca7c1-56fd-4b20-b14b-07ad70d0399c-COCA_20MOCA_687625eb-c294-41e1-a360-607d03798ef1.jpg?v=1710819389&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK COCA
                                    MOCHA</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>


                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/1628306549005879541__201027144655_DUSTY_20PINK_044885a3-0966-49b7-af00-b0a98e59f789.jpg?v=1710819031&width=533"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">CREWNECK DUSTY
                                    PINK</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>
                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRplTFYTNx2eazhbfG8lFQy8NK_4ehLYSNaoc7d_aBll5pewAc3EjPcp0v3kompF4QEt_0&usqp=CAU"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">BOXING HOOD D JON
                                </h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>
                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/files/id-11134207-7r98y-lt3dimi3gg21e1.jpg?v=1715408216&width=1500"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">Cross Stitch OS
                                    Green Shirt</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>
                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/7c544d48-2165-4f1e-9ed5-644372ed142a-BLACK_19a035ba-dc87-44d2-a8d9-c1c272872069.jpg?v=1710819512&width=1500"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">Cross Stitch OS
                                    Black Shirt</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
                        </div>
                    </div>
                    <div
                        class="bg-white flex flex-col rounded overflow-hidden shadow-md cursor-pointer hover:scale-[1.01] transition-all">
                        <div class="w-full">
                            <img src="https://hgbasiclabs.com/cdn/shop/products/d2290440-c837-4c2e-9d4c-334a332d88c5-cotton_20black_0f924f4b-9a57-45bf-b1f0-a60c5a13dd38.jpg?v=1710819407&width=1500"
                                alt="Product 3" class="w-full object-cover object-top aspect-[230/307]" />
                        </div>

                        <div class="p-4 flex-1 flex flex-col">
                            <div class="flex-1">
                                <h5 class="text-sm sm:text-base font-bold text-gray-800 line-clamp-2">STRIPE OVERSIZE
                                    NAVY</h5>
                                <div class="mt-2 flex items-center flex-wrap gap-2">
                                    <h6 class="text-sm sm:text-base font-bold text-gray-800">Rp.150.000,00</h6>
                                    <div class="bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer ml-auto"
                                        title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                            class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path
                                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                data-original="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="px-2 h-9 font-semibold w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded">Add
                                to cart</button>
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
        </footer>
    </div>

</body>

</html>
