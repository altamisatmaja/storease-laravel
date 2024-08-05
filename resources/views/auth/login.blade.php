<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter antialiased bg-gray-100  text-gray-600 ">
    <main class="bg-white ">
        <div class="relative flex">
            <div class="w-full md:w-1/2">
                <div class="min-h-[100dvh] h-full items-center my-auto justify-center flex flex-col ">
                    <div class="max-w-sm mx-auto w-full px-4 py-10">
                        <div class="flex items-center justify-center h-16 gap-y-10 sm:py-16 lg:py-20">
                            <a href="{{ route('login') }}" class="flex items-center gap-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" height="75px" viewBox="0 -960 960 960"
                                    width="75px" fill="#ea580c">
                                    <path
                                        d="M219-120q-25 0-42.5-17.5T159-180q0-25 17.5-42.5T219-240h64L181-574q-27-15-44.5-44T119-680q0-50 35-85t85-35q39 0 69.5 22.5T351-720h128v-40q0-17 11.5-28.5T519-800q9 0 17.5 4t14.5 12l68-64q9-9 21.5-11.5T665-856l156 72q12 6 16.5 17.5T837-744q-6 12-17.5 15.5T797-730l-144-66-94 88v56l94 86 144-66q11-5 23-1t17 15q6 12 1 23t-17 17l-156 74q-12 6-24.5 3.5T619-512l-68-64q-6 6-14.5 11t-17.5 5q-17 0-28.5-11.5T479-600v-40H351q-3 8-6.5 15t-9.5 15l200 370h84q25 0 42.5 17.5T679-180q0 25-17.5 42.5T619-120H219Zm20-520q17 0 28.5-11.5T279-680q0-17-11.5-28.5T239-720q-17 0-28.5 11.5T199-680q0 17 11.5 28.5T239-640Z" />
                                </svg>
                                <div class="flex flex-col">
                                    <div class="text-xl font-bold text-gray-800 ">PT Nickel Pasific Tbk.</div>
                                    <div class="text-lg font-semibold text-gray-800 ">Perusahaan Tambah Nickel</div>
                                </div>
                            </a>
                        </div>

                        <h1 class="text-3xl text-gray-800  font-bold mb-6">{{ __('Selamat datang!') }}
                        </h1>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="username" class="block text-gray-800 text-md font-semibold mb-2">Username
                                    *</label>
                                <input type="text" id="username" name="username" :value="old('username')" autofocus
                                    class=" w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600"
                                    required placeholder="Username anda">
                                @if ($errors->has('username'))
                                    <div class="mb-4 font-medium text-md mt-2 text-red-600">
                                        {{ $errors->first('username') }}
                                    </div>
                                @endif

                            </div>
                            <div class="mb-6">
                                <label for="password" class="block text-gray-800 text-md font-semibold mb-2">Password
                                    *</label>
                                <input type="password" id="password" name="password" autocomplete="current-password"
                                    class=" w-full px-4 py-2 border-2 border-gray-200  text-md rounded-lg text-gray-700 focus:ring-orange-600"
                                    required placeholder="••••••••">
                                @if ($errors->has('password'))
                                    <div class="mb-4 font-medium text-md mt-2 text-red-600">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif

                            </div>
                            <button type="submit"
                                class="w-full bg-orange-600 text-white text-md font-semibold px-4 py-3 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:ring-opacity-50">Masuk</button>
                        </form>

                        <div class="mt-6 border-t border-gray-100 ">
                            <div class="mt-5">
                                <div class="bg-orange-600/20 p-4 rounded-lg">
                                    <p class="text-gray-800 text-md text-center">
                                        Peringatan: Hanya stakeholder yang berwenang yang dapat mengakses sistem ini.
                                        Tindakan melanggar akan dikenakan sanksi sesuai hukum yang berlaku.
                                        Silakan merujuk pada <a href="#"
                                            class="text-orange-700 hover:underline">Kebijakan Penggunaan</a> untuk
                                        informasi lebih lanjut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden md:block absolute top-0 bottom-0 right-0 md:w-1/2" aria-hidden="true">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/auth-images.jpeg') }}"
                    width="760" height="1024" alt="Authentication image" />
            </div>

        </div>

    </main>
</body>

</html>
