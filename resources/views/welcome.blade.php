<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header
        class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
        <div class="px-4">
            <div class="flex items-center justify-between">
                <div class="flex shrink-0">
                    <a aria-current="page" class="flex items-center" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px"
                            fill="#ea580c">
                            <path
                                d="M219-120q-25 0-42.5-17.5T159-180q0-25 17.5-42.5T219-240h64L181-574q-27-15-44.5-44T119-680q0-50 35-85t85-35q39 0 69.5 22.5T351-720h128v-40q0-17 11.5-28.5T519-800q9 0 17.5 4t14.5 12l68-64q9-9 21.5-11.5T665-856l156 72q12 6 16.5 17.5T837-744q-6 12-17.5 15.5T797-730l-144-66-94 88v56l94 86 144-66q11-5 23-1t17 15q6 12 1 23t-17 17l-156 74q-12 6-24.5 3.5T619-512l-68-64q-6 6-14.5 11t-17.5 5q-17 0-28.5-11.5T479-600v-40H351q-3 8-6.5 15t-9.5 15l200 370h84q25 0 42.5 17.5T679-180q0 25-17.5 42.5T619-120H219Zm20-520q17 0 28.5-11.5T279-680q0-17-11.5-28.5T239-720q-17 0-28.5 11.5T199-680q0 17 11.5 28.5T239-640Z" />
                        </svg>
                        <p class="sr-only">Nickel</p>
                    </a>
                </div>
                <div class="hidden md:flex md:items-center md:justify-center md:gap-5">

                </div>
                <div class="flex items-center justify-end gap-3">
                    <a class="inline-flex items-center justify-center rounded-xl bg-orange-600 px-4 py-2 text-md font-semibold text-white shadow-sm transition-all duration-150 hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600"
                        href="/login">Login</a>
                </div>
            </div>
        </div>
    </header>
    <div
        class="min-h-screen flex flex-1 w-full flex-col items-center justify-center text-center px-4 py-20  bg-gradient-to-r from-green-50/50 via-teal-50 to-green-50/50 ">
        <h1
            class="mx-auto max-w-4xl py-8 font-display text-5xl font-bold tracking-normal text-white-300  sm:text-7xl">
            Sistem Manajemen Perusahaan
            <span class="relative whitespace-nowrap text-white-600 ">Nickel</span>
            <span class="relative whitespace-nowrap text-orange-500 ">
                <svg aria-hidden="true" viewBox="0 0 418 42"
                    class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-500 "
                    preserveAspectRatio="none">
                    <path
                        d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z">
                    </path>
                </svg>
                <span class="relative">by Altamis</span>
            </span>
        </h1>
    </div>
</body>

</html>


