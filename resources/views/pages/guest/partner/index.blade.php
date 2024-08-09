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


        @foreach ($categories as $category)
            <section class="bg-white py-8 max-w-7xl mx-auto px-4" id="portofolio">
                <h2 class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline md:text-4xl">
                    {{ $category->category_name }}
                </h2>

                <div class="relative w-sceen overflow-hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center z-40">
                        <button id="prev" class="bg-blue-500 text-white p-2 rounded focus:outline-none">
                            &larr;
                        </button>
                    </div>
                    <div class="carousel-container flex space-x-4">
                        @foreach ($category->vendors as $vendor)
                            <a href="{{ route('partner.detail', $vendor->slug) }}">
                                <div class="carousel-item block rounded-lg bg-white w-96 mt-10">
                                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-64" data-te-ripple-init
                                        data-te-ripple-color="light">
                                        <img class="rounded-lg w-full h-full object-cover"
                                            src="{{ asset('uploads/' . $vendor->thumbnail_vendor) }}" alt="" />
                                        <a href="{{ route('partner.detail', $vendor->slug) }}">
                                            <div
                                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="p-2">
                                        <div class="flex justify-between">
                                            <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800">
                                                {{ $vendor->vendor_name }}
                                            </h5>
                                        </div>
                                        <p class="mb-1 text-sm text-neutral-600">
                                            {{ $vendor->kabupaten_vendor }}, {{ $vendor->provinsi_vendor }}
                                        </p>

                                        <p class="mb-4 text-base text-neutral-600">
                                            {{ $vendor->about_vendor }}
                                        </p>
                                        <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800">
                                            {{ $vendor->detail_alamat_vendor }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <button id="next" class="bg-blue-500 text-white p-2 rounded-full focus:outline-none">
                            &rarr;
                        </button>
                    </div>
                </div>
            </section>
        @endforeach

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
