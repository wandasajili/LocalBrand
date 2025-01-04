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

<body class="bg-gray-100 font-sans">

    <!-- Container -->
    <div class="flex flex-col lg:flex-row h-screen">

        <!-- Sidebar -->
        <aside class="w-full lg:w-64 bg-gray-500 border-r flex-shrink-0">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-white">Local Brand</h1>
                {{-- <p class="text-xs text-white">Agen Momentum Nusantara</p> --}}
            </div>
            <nav class="mt-6">
                <ul>
                    <li>
                        <a href="/" class="flex items-center px-5 py-3 text-white rounded-lg">
                            <span class="ml-4 font-medium">Dashboard </span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="mt-auto p-2">
                <ul>
                    <li>
                        <a href="/forgotpass"
                            class="flex items-center px-6 py-3 text-white hover:bg-cyan-950 rounded-lg">
                            <span class=" font-medium">Ganti Sandi</span>
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="/login" class="flex items-center px-6 py-3 text-white hover:bg-cyan-950 rounded-lg">
                            <span class="font-medium">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <header class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-semibold">Dashboard Admin</h2>
            </header>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-500">Total Toko</h3>
                    <p class="text-2xl font-bold text-gray-800">0</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-500">Total User</h3>
                    <p class="text-2xl font-bold text-gray-800">0</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-sm font-medium text-gray-500">Total Produk</h3>
                    <p class="text-2xl font-bold text-gray-800">0</p>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-medium text-gray-800 mb-4">Toko dengan Omset Terbanyak</h3>
                <canvas id="barChart" height="100"></canvas>
            </div>
        </main>
    </div>
</body>

</html>
