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
        background-image: url('{{ asset('uploads/' . $heroWelcome->image) }}');
    ">
            <div class="absolute inset-0 bg-sekunderbase opacity-50"></div>
            <h1 class="text-white text-5xl font-semibold mb-10 relative z-10">
                Tentang storease
            </h1>
            <a href="" target="_blank" class="text-white/90 hover:text-white relative z-10">
                {{ $heroWelcome->title }}
            </a>
        </section>


        <section class="bg-white text-primarybase h-[450px]">
            <div class="container px-6 py-10 mx-auto">
                <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                    <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                        <a href="#"
                            class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-3xl text-right">
                            Tentang
                        </a>
                        <p class="mt-3 text-lg text-gray-500 text-right">
                            <span class="font-bold text-primarybase text-xl">storease. -</span>
                            {!! $abouts['about_section_description'] !!}
                        </p>
                    </div>
                    <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-md h-72 lg:h-96"
                        src="{{ asset('uploads/' . $abouts['about_images']) }}"alt="">
                </div>
            </div>
        </section>

        <section class="bg-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2">

                    <div class="bg-white rounded-lg  p-6 transform hover:scale-105 transition duration-300">
                        <div class="mb-8">
                            <h3 class="text-2xl font-semibold text-black">Visi</h3>
                            <p class="mt-4 text-gray-400">{!! $abouts['our_vision'] !!}</p>
                        </div>
                    </div>

                    <!-- Starter Plan -->
                    <div class="bg-white rounded-lg  p-6 transform hover:scale-105 transition duration-300">
                        <div class="mb-8">
                            <h3 class="text-2xl font-semibold text-black">Misi</h3>
                            <p class="mt-4 text-gray-400">{!! $abouts['our_mission'] !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="bg-white py-8 w-full px-4" id="portofolio">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Portofolio
            </h2>

            <div class="relative w-sceen overflow-hidden">
                <div class="absolute inset-y-0 left-0 flex items-center z-40">
                    <button class="prev bg-primarybase text-white p-2 rounded focus:outline-none">
                        &larr;
                    </button>
                </div>
                <div class="carousel-container flex space-x-4 p-4">
                    @foreach ($portofolios as $portofolio)
                        <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg">
                            <a href="{{ $portofolio->link_social_media_portofolio }}" target="_blank">
                                <div
                                    class="relative group grid h-[40rem] w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                                    <img src="{{ asset('uploads/' . $portofolio->thumbnail_portofolio) }}"
                                        alt="{{ $portofolio->thumbnail_portofolio }}"
                                        class="absolute inset-0 m-0 h-full w-full object-cover rounded-none shadow-none transition-opacity duration-300 group-hover:opacity-0" />
                                    <img src="{{ asset('uploads/' . $portofolio->thumbnail_portofolio) }}" alt="Hover Image"
                                        class="absolute inset-0 m-0 h-full w-full object-cover rounded-none shadow-none transition-opacity duration-300 opacity-0 group-hover:opacity-100" />
                                    <div
                                        class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <button class="next bg-primarybase text-white p-2 rounded focus:outline-none">
                        &rarr;
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-white py-8 w-full px-4" id="our-service">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Our Service
            </h2>

            <div class="relative w-sceen overflow-hidden">
                <div class="absolute inset-y-0 left-0 flex items-center z-40">
                    <button class="prev bg-primarybase text-white p-2 rounded focus:outline-none">
                        &larr;
                    </button>
                </div>
                <div class="carousel-container flex space-x-4 p-4">
                    @foreach ($ourservices as $ourservice)
                        <div class="carousel-item flex-none w-1/4 bg-white p-4 rounded-lg">
                            <div
                                class="relative group grid h-[40rem] w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
                                <img src="{{ asset('uploads/' . $ourservice->vendor_image) }}"
                                    alt="{{ $ourservice->vendor_image }}"
                                    class="absolute inset-0 m-0 h-full w-full object-cover rounded-none shadow-none transition-opacity duration-300 group-hover:opacity-0" />
                                <div
                                    class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50">
                                </div>
                                <div
                                    class="absolute bottom-0 w-full p-4 bg-black/60 text-white text-lg font-semibold transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                    {{ $ourservice->vendor_name }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center z-40">
                    <button class="next bg-primarybase text-white p-2 rounded focus:outline-none">
                        &rarr;
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-white py-8 " id="portofolio">
            <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl text-center">Testimoni
            </h2>
            <div class="container mx-auto px-6">
                <div class="relative">
                    <div class="flex overflow-x-auto scroll-smooth h-[550px] scroll-container">
                        @foreach ($testimonials as $testimonial)
                            <div class="scroll-item bg-white p-4 shadow-lg flex-auto w-full mr-4">
                                <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
                                    <div class="mx-auto max-w-2xl lg:max-w-4xl">
                                        <figure class="mt-10">
                                            <blockquote
                                                class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                                                <p>“{!! $testimonial->description_testimonial !!}”</p>
                                            </blockquote>
                                            <figcaption class="mt-10">
                                                <img class="mx-auto h-10 w-10 rounded-full"
                                                    src="uploads/{{ $testimonial->customer_pictures }}" alt="">
                                                <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                                                    <div class="font-semibold text-gray-900">
                                                        {{ $testimonial->customer_name }}</div>
                                                    <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true"
                                                        class="fill-gray-900">
                                                        <circle cx="1" cy="1" r="1" />
                                                    </svg>
                                                    <div class="text-gray-600">Rating {{ $testimonial->rating }}/5</div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const carouselContainer = $('.scroll-container');
                const cardWidth = $('.scroll-item').outerWidth(true);
                const scrollInterval = 3000;
                const scrollSpeed = 300;

                function autoScroll() {
                    carouselContainer.animate({
                        scrollLeft: '+=' + cardWidth
                    }, scrollSpeed, function() {
                        if (carouselContainer.scrollLeft() + carouselContainer.innerWidth() >=
                            carouselContainer[0].scrollWidth) {
                            carouselContainer.animate({
                                scrollLeft: 0
                            }, scrollSpeed);
                        }
                    });
                }
                setInterval(autoScroll, scrollInterval);
            });

            $(document).ready(function() {
                $('.carousel-container').each(function() {
                    const carouselContainer = $(this);
                    const cardWidth = carouselContainer.find('.carousel-item').outerWidth(true);

                    carouselContainer.siblings('.prev').click(function() {
                        carouselContainer.animate({
                            scrollLeft: '-=' + cardWidth
                        }, 300);
                    });

                    carouselContainer.siblings('.next').click(function() {
                        carouselContainer.animate({
                            scrollLeft: '+=' + cardWidth
                        }, 300);
                    });
                });
            });
        </script>
    @endsection
