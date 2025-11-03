<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>
    <nav class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- Menggunakan h-16 sebagai ganti h-30 karena h-30 tidak valid di Tailwind. Anda bisa menyesuaikan angkanya (misalnya h-10, h-12, h-20, dll) -->
                <img src="{{ asset('images/logofix.png') }}" class="h-16" alt="Logo Perusahaan">
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://placehold.co/40x40/56687a/ffffff?text=U"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/rekom"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Rekomendasi
                            Skincare</a>
                    </li>
                    <li>
                        <a href="/tentangkami"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Div Kontainer Utama -->

    <div class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800 p-8">

        <div class="space-y-16 px-6 py-10 ">

            <!-- Bagian 1: Kiri teks, kanan gambar -->
            <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInRight">
                <!-- Kiri: Penjelasan -->
                <div>
                    <h2 class="text-2xl font-bold mb-4 text-white">Facewash</h2>
                    <p class="text-gray-200 leading-relaxed">
                        Facewash adalah produk pembersih wajah yang membantu mengangkat kotoran,
                        minyak berlebih, serta sisa makeup. Dengan pemakaian rutin, kulit terasa
                        lebih segar, bersih, dan terhindar dari jerawat.
                    </p>
                </div>
                <!-- Kanan: Gambar -->
                <div class="flex justify-center ">
                    <img src="images/facewash.jpg" alt="Facewash"
                        class=" w-56 h-56 rounded-full object-cover shadow-lg border-4 border-white ">
                </div>
            </div>

            <!-- Bagian 2: Kiri gambar, kanan teks -->
            <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInLeft">
                <!-- Kiri: Gambar -->
                <div class="flex justify-center">
                    <img src="images/mois.jpg" alt="Moisturizer"
                        class="w-56 h-56 rounded-full object-cover shadow-lg border-4 border-white ">
                </div>
                <!-- Kanan: Penjelasan -->
                <div>
                    <h2 class="text-2xl font-bold mb-4 text-white">Moisturizer</h2>
                    <p class="text-gray-200 leading-relaxed">
                        Moisturizer berfungsi menjaga kelembapan kulit, mengunci hidrasi, serta
                        melindungi skin barrier. Cocok digunakan semua jenis kulit agar tetap sehat,
                        lembap, dan terlindungi dari kekeringan.
                    </p>
                </div>
            </div>

            <!-- Bagian 3: Kiri teks, kanan gambar -->
            
            <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInRight">
                <!-- Kiri: Penjelasan -->
                <div>
                    <h2 class="text-2xl font-bold mb-4 text-white">Sunscreen</h2>
                    <p class="text-gray-200 leading-relaxed">
                        Sunscreen melindungi kulit dari sinar UVA dan UVB yang dapat menyebabkan
                        penuaan dini, flek hitam, hingga kanker kulit. Pemakaian rutin membantu
                        menjaga kulit tetap sehat dan terlindungi.
                    </p>
                </div>
                <!-- Kanan: Gambar -->
                <div class="flex justify-center">
                    <img src="images/sunscreen.jpg" alt="Sunscreen"
                        class="w-56 h-56 rounded-full object-cover shadow-lg border-4 border-white " >
                </div>
            </div>

        </div>

    </div>
    <!-- Akhir Div Kontainer Utama -->

    <footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023
                GlowGenius™. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
