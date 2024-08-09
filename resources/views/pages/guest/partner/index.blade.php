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
        background-image: url('{{ asset('uploads/' . $heroPartner->image) }}');
    ">
            <div class="absolute inset-0 bg-sekunderbase opacity-50"></div>
            <h1 class="text-white text-5xl font-semibold mb-10 relative z-10">
                Kontak Kami
            </h1>
            <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                class="text-white/90 hover:text-white relative z-10">
                {{ $heroPartner->title }}
            </a>
        </section>


        <section class="bg-white py-8 w-full px-4" id="portofolio">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Portofolio
            </h2>

            <div class="relative w-sceen overflow-hidden">
                <div class="absolute inset-y-0 left-0 flex items-center z-40">
                    <button id="prev" class="bg-blue-500 text-white p-2 rounded focus:outline-none">
                        &larr;
                    </button>
                </div>
                <div class="carousel-container flex space-x-4 p-4">
                    <!-- Card 1 -->
                    <a href="{{ route('partner.detail') }}">
                        <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg">
                            <div
                                class="relative grid h-[40rem] w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                                <div
                                    class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('https://images.unsplash.com/photo-1552960562-daf630e9278b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
                                    <div
                                        class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50">
                                    </div>
                                </div>
                                <div class="relative p-6 py-14 px-6 md:px-12">
                                    <h2
                                        class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
                                        How we design and code open-source projects?
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
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
