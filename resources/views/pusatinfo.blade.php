<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 border-b">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logofix.png') }}" class="h-8" alt="GlowGenius Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GlowGenius</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                        src="https://ui-avatars.com/api/?name={{ Auth::check() ? Auth::user()->name : 'Guest' }}&background=56687a&color=ffffff"
                        alt="user photo">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    @auth
                        <div class="px-4 py-3">
                            <span
                                class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name ?? 'Pengguna' }}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email ?? 'user@example.com' }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Sign out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    @else
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Register</a>
                            </li>
                        </ul>
                    @endauth
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
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Request::is('/') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                            aria-current="{{ Request::is('/') ? 'page' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ Auth::check() ? route('rekom.index') : route('login') }}"
                            class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('rekom') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900' }}">Rekomendasi
                            Skincare</a>
                    </li>
                    <li>
                        <a href="{{ url('/pusatinfo') }}"
                            class="block py-2 px-3 rounded-sm md:bg-transparent md:p-0 {{ Request::is('pusatinfo') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700' }}"
                            aria-current="{{ Request::is('pusatinfo') ? 'page' : '' }}">Pusat Info</a>
                    </li>
                    <li>
                        <a href="{{ url('/tentangkami') }}"
                            class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('tentangkami') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900' }}">Tentang
                            Kami</a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ Request::is('dashboard') ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900' }}">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="max-w-screen-xl mx-auto py-8">
        <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800 p-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 text-center">Pusat Informasi Skincare</h1>

            <div class="space-y-16 px-6 py-10 ">

                <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInRight">
                    <div>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Facewash</h2>
                        <p class="text-gray-600 dark:text-gray-200 leading-relaxed">
                            Facewash adalah produk pembersih wajah yang membantu mengangkat kotoran,
                            minyak berlebih, serta sisa makeup yang menumpuk di kulit sepanjang hari.
                            Dengan pH yang seimbang, facewash menjaga kelembapan alami kulit.
                            Pembersihan yang tepat merupakan langkah dasar terpenting dalam rutinitas skincare
                            untuk mempersiapkan kulit menerima produk selanjutnya dan mencegah masalah kulit.
                        </p>
                    </div>
                    <div class="flex justify-center ">
                        <img src="{{ asset('images/facewash.jpg') }}" alt="Facewash"
                            class=" w-56 h-56 rounded-full object-cover shadow-lg border-4 border-gray-200 dark:border-gray-700">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInLeft">
                    <div class="flex justify-center">
                        <img src="{{ asset('images/mois.jpg') }}" alt="Moisturizer"
                            class="w-56 h-56 rounded-full object-cover shadow-lg border-4 border-gray-200 dark:border-gray-700">
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Moisturizer (Pelembap)</h2>
                        <p class="text-gray-600 dark:text-gray-200 leading-relaxed">
                            Moisturizer sangat penting untuk menjaga kelembapan kulit dan memperkuat
                            lapisan pelindung kulit (skin barrier). Pelembap bekerja dengan cara mengurangi
                            penguapan air dari permukaan kulit, sehingga kulit tetap terhidrasi, elastis,
                            dan mengurangi risiko iritasi atau kemerahan. Pelembap tersedia dalam berbagai
                            tekstur (gel, krim, lotion) disesuaikan dengan jenis kulit.
                        </p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8 items-center animate__animated animate__backInRight">
                    <div>
                        <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Sunscreen (Tabir Surya)</h2>
                        <p class="text-gray-600 dark:text-gray-200 leading-relaxed">
                            Sunscreen adalah produk wajib yang melindungi kulit dari bahaya radiasi
                            sinar ultraviolet (UVA dan UVB). Paparan UV adalah penyebab utama penuaan dini,
                            flek hitam, dan risiko kanker kulit. Pemakaian sunscreen dengan SPF minimal 30
                            setiap hari, bahkan saat cuaca mendung atau di dalam ruangan, adalah kunci untuk
                            mempertahankan kesehatan dan keremajaan kulit dalam jangka panjang.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/sunscreen.jpg') }}" alt="Sunscreen"
                            class="w-56 h-56 rounded-full object-cover shadow-lg border-4 border-gray-200 dark:border-gray-700">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/"
                    class="hover:underline">GlowGenius™</a>. All Rights Reserved.</span>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
