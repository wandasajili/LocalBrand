<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | Login</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:flex items-baseline space-x-4">
                            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300" aria-current="page">Home</a>
                            <a href="/Catolog" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Catolog</a>
                            <a href="/Check" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Check Order</a>
                            <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                        </div>
                    </div>
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
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Login</a>
                                <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Sign out</a>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <button @click="isOpen = !isOpen" class="text-gray-400 hover:bg-gray-700 hover:text-white p-2 rounded-md">
                            <svg x-show="!isOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                            <svg x-show="isOpen" class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
            <div class="font-[sans-serif]">
                <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
                  <div class="grid md:grid-cols-2 items-center gap-6 max-w-6xl w-full">
                    <div class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
                      <form class="space-y-4">
                        <div class="mb-8">
                          <h3 class="text-gray-800 text-3xl font-bold">Sign in</h3>
                          <p class="text-gray-500 text-sm mt-4 leading-relaxed">Sign in to your account and explore a world of possibilities. Your journey begins here.</p>
                        </div>

                        <div>
                          <label class="text-gray-800 text-sm mb-2 block">User name</label>
                          <div class="relative flex items-center">
                            <input name="username" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600" placeholder="Enter user name" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                              <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                              <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <label class="text-gray-800 text-sm mb-2 block">Password</label>
                          <div class="relative flex items-center">
                            <input name="password" type="password" required class="w-full text-sm text-gray-800 border border-gray-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600" placeholder="Enter password" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                              <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                            </svg>
                          </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-4">
                          <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                              Remember me
                            </label>
                          </div>

                          <div class="text-sm">
                            <a href="/forgotpass" class="text-blue-600 hover:underline font-semibold">
                              Forgot your password?
                            </a>
                          </div>
                        </div>

                        <div class="!mt-8">
                          <button  type="button" class="w-full shadow-xl  py-2.5 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                            Sign in
                        </button>
                        </div>

                        <p class="text-sm !mt-8 text-center text-gray-500">Don't have an account <a href="/register" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register here</a></p>
                      </form>
                    </div>
                    <div class="max-md:mt-8">
                      <img src="https://readymadeui.com/login-image.webp" class="w-full aspect-[71/50] max-md:w-4/5 mx-auto block object-cover" alt="Dining Experience" />
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
