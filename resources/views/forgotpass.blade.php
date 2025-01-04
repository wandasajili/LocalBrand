<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman | forgot password</title>
</head>

<body class="h-full">
    <div class="mt-6 flex flex-wrap gap-4 justify-start" style="margin-left: 2rem;">
        <a href="/login" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Back</a>
    </div>
    <main>
        <div class="font-[sans-serif]">
            <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
                <div class="grid md:grid-cols-2 items-center gap-6 max-w-6xl w-full">
                    <div
                        class="border border-gray-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-md:mx-auto">
                        <form class="space-y-4">
                            <div class="mb-8">
                                <h3 class="text-gray-800 text-3xl font-bold">forgot password</h3>
                            </div>

                            <div>
                                <label class="text-gray-800 text-sm mb-2 block">Password</label>
                                <div class="relative flex items-center">
                                    <input name="password" type="password" required
                                        class="w-full text-sm text-gray-800 border border-gray-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600"
                                        placeholder="Enter password" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                                        <path
                                            d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                            data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm mb-2 block">konfirmsi password</label>
                                <div class="relative flex items-center">
                                    <input name="password" type="password" required
                                        class="w-full text-sm text-gray-800 border border-gray-300 pl-4 pr-10 py-3 rounded-lg outline-blue-600"
                                        placeholder="Enter password" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                                        class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                                        <path
                                            d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                                            data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center">
                                    <input id="remember-me" name="remember-me" type="checkbox"
                                        class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                                    <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="!mt-8">
                                <button type="buuton"
                                    class="w-full shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                                    <a href="/">Sign in</a>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="max-md:mt-8">
                        <img src="https://readymadeui.com/login-image.webp"
                            class="w-full aspect-[71/50] max-md:w-4/5 mx-auto block object-cover"
                            alt="Dining Experience" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
