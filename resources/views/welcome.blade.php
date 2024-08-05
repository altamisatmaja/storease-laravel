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
    <header>
        <nav x-data="{ open: false }"
            class="flex h-auto w-auto bg-white shadow-lg rounded-lg justify-between
      md:h-16">
            <div class="flex w-full justify-between ">
                <div class="flex px-6 w-1/2 items-center font-semibold
          md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
                    x-transition:enter="transition ease-out duration-300">
                    <a href="">Mattismyname</a>
                </div>

                <div x-transition:enter="transition ease-in-out duration-300"
                    class="flex flex-col w-full h-auto
          md:hidden">
                    <div class="flex flex-wrap items-center justify-center gap-2">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                        <button>Login</button>
                        <button>Sign Up</button>
                    </div>
                </div>
                <div class="hidden w-3/5 items-center justify-evenly font-semibold
          md:flex">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                    <a href="">Products</a>
                    <a href="">Contact</a>
                </div>
                <div class="hidden w-1/5 items-center justify-evenly font-semibold
          md:flex">
                    <button>Login</button>
                    <button>Sign Up</button>
                </div>
                <button
                    class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white
                          md:hidden
                        "
                    @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true"
                            class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out"
                            :class="{ 'rotate-45': open, ' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true"
                            class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"
                            :class="{ 'opacity-0': open }"></span>
                        <span aria-hidden="true"
                            class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out"
                            :class="{ '-rotate-45': open, ' translate-y-1.5': !open }"></span>
                    </div>
                </button>
            </div>
        </nav>
        <header />

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <section class="flex flex-col w-full h-[500px] bg-cover bg-fixed bg-center flex justify-center items-center"
            style="
            background-image: url(https://images.unsplash.com/photo-1642427749670-f20e2e76ed8c?auto=format&fit=crop&w=880&q=80);
        ">
            <h1 class="text-white text-5xl font-semibold mt-20 mb-10">
                This is Parallax Effect
            </h1>

            <span class="text-center font-bold my-20 text-white/90">
                <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                    class="text-white/90 hover:text-white">
                    Convetert to SASS
                </a>

                <hr class="my-4" />

                <a href="https://unsplash.com/photos/8Pm_A-OHJGg" target="_blank"
                    class="text-white/90 hover:text-white">
                    Image Source
                </a>

                <hr class="my-4" />

                <p>
                    <a href="https://github.com/EgoistDeveloper/my-tailwind-components/blob/main/src/templates/parallax-landing-page.html"
                        target="_blank" class="text-white/90 hover:text-white">
                        Source Code
                    </a>
                    |
                    <a href="https://egoistdeveloper.github.io/my-tailwind-components/./src/templates/parallax-landing-page.html"
                        target="_blank" class="text-white/90 hover:text-white">
                        Full Preview
                    </a>
                </p>
            </span>
        </section>
        <div
            class="min-h-screen flex flex-1 w-full flex-col items-center justify-center text-center px-4 py-20  bg-gradient-to-r from-green-50/50 via-teal-50 to-green-50/50 ">
            <h1
                class="mx-auto max-w-4xl py-8 font-display text-5xl font-bold tracking-normal text-white-300  sm:text-7xl">
                Sistem Manajemen Perusahaan
                <span class="relative whitespace-nowrap text-white-600 ">Nickel</span>
                <span class="relative whitespace-nowrap text-orange-500 ">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-500 " preserveAspectRatio="none">
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
