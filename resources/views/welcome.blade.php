@extends('layouts.guest.app')

@section('content')
    <section class="flex flex-col w-full h-[550px] bg-cover bg-fixed bg-center flex justify-center items-center"
        style="
            background-image: url(https://blog-cdn.kitalulus.com/blog/wp-content/uploads/2024/02/20095813/62b5a64282c88e5dfa3b85de_Peluang-usaha-wedding-organizer.jpg);
        ">
        <h1 class="text-white text-5xl font-semibold  mb-10">
            This is Parallax Effect
        </h1>
        <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
            class="text-white/90 hover:text-white">
            Convetert to SASS
        </a>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog
            </h1>

            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                    src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">category</p>

                    <a href="#"
                        class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
                        All the features you want to know
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p>

                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read
                        more</a>

                    <div class="flex items-center mt-6">
                        <img class="object-cover object-center w-10 h-10 rounded-full"
                            src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                            alt="">

                        <div class="mx-4">
                            <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="flex mx-auto w-full text-center">
        <section class="flex flex-col md:flex-row w-full">
            <div class="w-full md:w-1/2 p-4 text-center">
                <div class="flex flex-col">
                    <p>ada</p>
                    <p>adad</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-4 text-center">

                <div class="flex flex-col">
                    <p>ada</p>
                    <p>adad</p>
                </div>
            </div>
        </section>
    </div>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-6">
            <div class="relative">
                <button id="scroll-left" class="scroll-button left">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <div class="scroll-container">
                    <div class="scroll-item bg-white p-4 shadow-lg">Item 1</div>
                    <div class="scroll-item bg-white p-4 shadow-lg">Item 2</div>
                    <div class="scroll-item bg-white p-4 shadow-lg">Item 3</div>
                    <div class="scroll-item bg-white p-4 shadow-lg">Item 4</div>
                    <div class="scroll-item bg-white p-4 shadow-lg">Item 5</div>
                </div>
                <button id="scroll-right" class="scroll-button right">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="container mx-auto p-6 relative">
        <h1 class="text-center text-3xl font-bold mb-8">Portfolio</h1>
        <div class="flex items-center">
            <button id="left-arrow"
                class="scroll-arrow left-0 absolute bg-gray-700 text-white px-3 py-1 rounded-md">&#9664;</button>
            <div id="portfolio-container" class="overflow-x-auto whitespace-nowrap">
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 1" class="main-image">
                    <img src="https://via.placeholder.com/150/0000FF" alt="Hover Image 1"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 2" class="main-image">
                    <img src="https://via.placeholder.com/150/FF0000" alt="Hover Image 2"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 3" class="main-image">
                    <img src="https://via.placeholder.com/150/00FF00" alt="Hover Image 3"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 4" class="main-image">
                    <img src="https://via.placeholder.com/150/FFFF00" alt="Hover Image 4"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
                <div class="inline-block mx-4 portfolio-item relative">
                    <img src="https://via.placeholder.com/150" alt="Main Image 5" class="main-image">
                    <img src="https://via.placeholder.com/150/FF00FF" alt="Hover Image 5"
                        class="hover-image absolute top-0 left-0 hidden">
                </div>
            </div>
            <button id="right-arrow"
                class="scroll-arrow right-0 absolute bg-gray-700 text-white px-3 py-1 rounded-md">&#9654;</button>
        </div>
    </section>
@endsection
