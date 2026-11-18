<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | GlowGenius</title>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
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
                        src="https://ui-avatars.com/api/?name={{ Auth::check() ? Auth::user()->name : 'Guest' }}&background=1f2937&color=ffffff"
                        alt="user photo">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    @auth
                        <div class="px-4 py-3">
                            <span
                                class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name ?? 'Pengguna' }}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email ?? 'user@email.com' }}</span>
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
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="{{ Auth::check() ? route('rekom.index') : route('login') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Rekomendasi
                            Skincare</a>
                    </li>
                    <li>
                        <a href="{{ url('/pusatinfo') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pusat
                            Info</a>
                    </li>
                    <li>
                        <a href="{{ url('/tentangkami') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                            Kami</a>
                    </li>
                    @auth
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block py-2 px-3 text-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="min-h-screen py-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-700 dark:text-green-400"
                    role="alert">
                    <span class="font-medium">Berhasil!</span> {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                    Selamat Datang di Dashboard!
                </h1>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Ini adalah area khusus untuk pengguna yang sudah login.
                </p>

                @auth
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Informasi Akun Anda</h2>
                        <dl class="divide-y divide-gray-200 dark:divide-gray-700">
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Lengkap</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:col-span-2 sm:mt-0">
                                    {{ Auth::user()->name ?? 'Nama Pengguna' }}</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Alamat Email</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:col-span-2 sm:mt-0">
                                    {{ Auth::user()->email ?? 'user@example.com' }}</dd>
                            </div>
                            <div class="px-4 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Aksi Cepat</dt>
                                <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:col-span-2 sm:mt-0">
                                    <a href="{{ route('rekom.index') }}"
                                        class="text-blue-600 hover:underline dark:text-blue-500 mr-4">Mulai Rekomendasi</a>
                                    <form method="POST" action="{{ route('logout') }}" class="inline-block">
                                        @csrf
                                        <button type="submit" class="text-red-600 hover:underline dark:text-red-500">
                                            Logout
                                        </button>
                                    </form>
                                </dd>
                            </div>
                        </dl>
                    </div>
                @else
                    <p class="text-red-500">Anda tidak memiliki akses ke halaman ini. Silakan <a
                            href="{{ route('login') }}" class="font-medium hover:underline">login</a> terlebih
                        dahulu.</p>
                @endauth

            </div>
        </div>
    </main>

    <footer class="bg-white rounded-lg shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/"
                    class="hover:underline">GlowGenius™</a>. All Rights Reserved.</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
</body>

</html>
