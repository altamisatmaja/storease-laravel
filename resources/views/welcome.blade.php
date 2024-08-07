    <style>
        .carousel-container {
            scroll-snap-type: x mandatory;
            overflow-x: auto;
            display: flex;
            scroll-behavior: smooth;
        }

        .carousel-item {
            scroll-snap-align: start;
        }
    </style>


    @extends('layouts.guest.app')

    @section('content')
        <section class="relative flex flex-col w-full h-[550px] bg-cover bg-fixed bg-center justify-center items-center"
            style="
        background-image: url(https://blog-cdn.kitalulus.com/blog/wp-content/uploads/2024/02/20095813/62b5a64282c88e5dfa3b85de_Peluang-usaha-wedding-organizer.jpg);
    ">
            <div class="absolute inset-0 bg-sekunderbase opacity-50"></div>
            <h1 class="text-white text-5xl font-semibold mb-10 relative z-10">
                Tentang storease
            </h1>
            <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                class="text-white/90 hover:text-white relative z-10">
                Who we are?
            </a>
        </section>


        <section class="bg-white text-primarybase h-[450px]">
            <div class="container px-6 py-10 mx-auto">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                    <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                        <a href="#"
                            class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl text-right">
                            All the features you want to know
                        </a>
                        <p class="mt-3 text-lg text-gray-500 text-right">
                            <span class="font-bold text-primarybase text-xl">storease. -</span> Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Iure veritatis sint
                            autem nesciunt,
                            laudantium quia tempore delect. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt,
                            laudantium quia tempore delect. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                            veritatis sint autem nesciunt,
                            laudantium quia tempore delect
                        </p>
                    </div>
                    <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-md h-72 lg:h-96"
                        src="https://maukuliah.ap-south-1.linodeobjects.com/job/1701325954-PMddr62q7z.jpg"alt="">
                </div>
            </div>
        </section>
        <section class="h-[550px] items-center">
            <div class="flex mx-auto w-full text-center">
                <section class="flex flex-col md:flex-row w-full">
                    <div class="w-full md:w-1/2 p-4 text-center">
                        <div class="flex flex-col">
                            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-2xl">Visi
                            </h2>
                            <p>consectetur
                                adipisicing elit. Iure veritatis sint
                                autem nesciunt,
                                laudantium quia tempore delect. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Iure
                                veritatis sint autem nesciunt,</p>
                        </div>
                    </div>
                    <div class="w-full
                        md:w-1/2 p-4 text-center">
                        <div class="flex flex-col">
                            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-2xl">Misi
                            </h2>
                            <p>consectetur
                                adipisicing elit. Iure veritatis sint
                                autem nesciunt,
                                laudantium quia tempore delect. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Iure
                                veritatis sint autem nesciunt,</p>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="bg-white py-8 h-screen" id="portofolio">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Portofolio
            </h2>

            <div class="relative w-full max-w-4xl overflow-hidden">
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <button id="prev" class="bg-blue-500 text-white p-2 rounded-full focus:outline-none">
                        &larr;
                    </button>
                </div>
                <div class="carousel-container flex space-x-4 p-4">
                    <!-- Card 1 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 1</h2>
                        <p class="text-gray-600">This is card number 1.</p>
                    </div>
                    <!-- Card 2 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 2</h2>
                        <p class="text-gray-600">This is card number 2.</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 3</h2>
                        <p class="text-gray-600">This is card number 3.</p>
                    </div>
                    <!-- Card 4 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 4</h2>
                        <p class="text-gray-600">This is card number 4.</p>
                    </div>
                    <!-- Card 5 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 5</h2>
                        <p class="text-gray-600">This is card number 5.</p>
                    </div>
                    <!-- Card 6 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 6</h2>
                        <p class="text-gray-600">This is card number 6.</p>
                    </div>
                    <!-- Card 7 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 7</h2>
                        <p class="text-gray-600">This is card number 7.</p>
                    </div>
                    <!-- Card 8 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 8</h2>
                        <p class="text-gray-600">This is card number 8.</p>
                    </div>
                    <!-- Card 9 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 9</h2>
                        <p class="text-gray-600">This is card number 9.</p>
                    </div>
                    <!-- Card 10 -->
                    <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold">Card 10</h2>
                        <p class="text-gray-600">This is card number 10.</p>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <button id="next" class="bg-blue-500 text-white p-2 rounded-full focus:outline-none">
                        &rarr;
                    </button>
                </div>
            </div>




        </section>

        <section class="bg-white py-8 h-screen" id="portofolio">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Testimoni
            </h2>

            <div class="container mx-auto px-6">
                <div class="relative">
                    <div class="flex overflow-x-auto scroll-smooth h-full scroll-container">
                        <div class="scroll-item bg-white p-4 shadow-lg flex-auto w-full mr-4">
                            <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                    <figure class="mt-10">
                                        <blockquote
                                            class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita
                                                voluptas
                                                culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                                corporis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-10">
                                            <img class="mx-auto h-10 w-10 rounded-full"
                                                src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg"
                                                alt="">
                                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                <div class="font-semibold text-gray-900">Judith Black</div>
                                                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                    class="fill-gray-900">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="text-gray-600">CEO of Workcation</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div
                                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                                </div>
                            </section>
                        </div>
                        <div class="scroll-item bg-white p-4 shadow-lg">
                            <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                    <figure class="mt-10">
                                        <blockquote
                                            class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita
                                                voluptas
                                                culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                                corporis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-10">
                                            <img class="mx-auto h-10 w-10 rounded-full"
                                                src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg"
                                                alt="">
                                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                <div class="font-semibold text-gray-900">Judith Black</div>
                                                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                    class="fill-gray-900">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="text-gray-600">CEO of Workcation</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div
                                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                                </div>
                            </section>
                        </div>
                        <div class="scroll-item bg-white p-4 shadow-lg">
                            <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                    <figure class="mt-10">
                                        <blockquote
                                            class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita
                                                voluptas
                                                culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                                corporis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-10">
                                            <img class="mx-auto h-10 w-10 rounded-full"
                                                src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg"
                                                alt="">
                                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                <div class="font-semibold text-gray-900">Judith Black</div>
                                                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                    class="fill-gray-900">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="text-gray-600">CEO of Workcation</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div
                                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                                </div>
                            </section>
                        </div>
                        <div class="scroll-item bg-white p-4 shadow-lg">
                            <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                    <figure class="mt-10">
                                        <blockquote
                                            class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita
                                                voluptassssss
                                                culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                                corporis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-10">
                                            <img class="mx-auto h-10 w-10 rounded-full"
                                                src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg"
                                                alt="">
                                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                <div class="font-semibold text-gray-900">Judith Black</div>
                                                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                    class="fill-gray-900">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="text-gray-600">CEO of Worksscation</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div
                                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                                </div>
                            </section>
                        </div>
                        <div class="scroll-item bg-white p-4 shadow-lg">
                            <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                    <figure class="mt-10">
                                        <blockquote
                                            class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita
                                                voluptas
                                                culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et
                                                corporis.”</p>
                                        </blockquote>
                                        <figcaption class="mt-10">
                                            <img class="mx-auto h-10 w-10 rounded-full"
                                                src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg"
                                                alt="">
                                            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                <div class="font-semibold text-gray-900">Judithss Black</div>
                                                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                    class="fill-gray-900">
                                                    <circle cx="1" cy="1" r="1" />
                                                </svg>
                                                <div class="text-gray-600">CEO of Workcation</div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div
                                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20">
                                </div>
                                <div
                                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const carouselContainer = $('.carousel-container');
                const cardWidth = $('.carousel-item').outerWidth(true);

                $('#next').click(function() {
                    carouselContainer.animate({
                        scrollLeft: '+=' + cardWidth
                    }, 300);
                });

                $('#prev').click(function() {
                    carouselContainer.animate({
                        scrollLeft: '-=' + cardWidth
                    }, 300);
                });
            });
        </script>
    @endsection
