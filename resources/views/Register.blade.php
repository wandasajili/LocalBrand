<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Register</title>
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
                            <div x-show="isDropdownOpen" @click.away="isDropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign out</a>
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

        <main>
            <div class="font-[sans-serif] bg-white max-w-4xl flex items-center mx-auto md:h-screen p-4">
                <div
                    class="grid md:grid-cols-3 items-center shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-xl overflow-hidden">
                    <div
                        class="max-md:order-1 flex flex-col justify-center space-y-16 max-md:mt-16 min-h-full bg-gradient-to-r from-gray-900 to-gray-700 lg:px-8 px-4 py-4">
                        <div>
                            <h4 class="text-white text-lg font-semibold">Create Your Account</h4>
                            <p class="text-[13px] text-gray-300 mt-3 leading-relaxed">Welcome to our registration page!
                                Get started by creating your account.</p>
                        </div>
                        <div>
                            <h4 class="text-white text-lg font-semibold">Simple & Secure Registration</h4>
                            <p class="text-[13px] text-gray-300 mt-3 leading-relaxed">Our registration process is
                                designed to be straightforward and secure. We prioritize your privacy and data security.
                            </p>
                        </div>
                    </div>

                    <form class="md:col-span-2 w-full py-6 px-6 sm:px-16">
                        <div class="mb-6">
                            <h3 class="text-gray-800 text-2xl font-bold">Create an account</h3>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <label class="text-gray-800 text-sm mb-2 block">Name</label>
                                <div class="relative flex items-center">
                                    <input name="name" type="text" required
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500"
                                        placeholder="Enter name" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                                        <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                        <path
                                            d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                            data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>

                            <div>
                                <label class="text-gray-800 text-sm mb-2 block">Email Id</label>
                                <div class="relative flex items-center">
                                    <input name="email" type="email" required
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500"
                                        placeholder="Enter email" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-4 h-4 absolute right-4" viewBox="0 0 682.667 682.667">
                                        <defs>
                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                            <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                                d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                                data-original="#000000"></path>
                                            <path
                                                d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                                data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div>
                                <label class="text-gray-800 text-sm mb-2 block">Password</label>
                                <div class="relative flex items-center">
                                    <input name="password" type="password" required
                                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded-md outline-blue-500"
                                        placeholder="Enter password" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-4 h-4 absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                                        <path
                                            d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                            data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                                <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                    I accept the <a href="javascript:void(0);"
                                        class="text-blue-600 font-semibold hover:underline ml-1">Terms and
                                        Conditions</a>
                                </label>
                            </div>
                        </div>

                        <div class="!mt-12">
                            <button type="button"
                                class="w-full py-3 px-4 tracking-wider text-sm rounded-md text-white bg-gray-700 hover:bg-gray-800 focus:outline-none">
                                Create an account
                            </button>
                        </div>
                        <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="/login"
                                class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
                    </form>
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
