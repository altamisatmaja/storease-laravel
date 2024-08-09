@extends('layouts.guest.app')

@section('content')
    <!-- component -->
    <section>
        <div class="mx-auto grid w-full grid-cols-12 gap-4 bg-zinc-50 p-1">
            <div class="col-span-12  sm:col-span-8">
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="relative">
                            <div class="relative z-10 grid gap-3 grid-cols-6">
                                @foreach ($vendorImages as $vendorimage)
                                    <div
                                        class="col-span-full lg:col-span-3 overflow-hidden flex relative rounded-xl bg-white border border-gray-200">
                                        <div class="relative w-full h-72">
                                            <img class="absolute inset-0 w-full h-full object-cover"
                                                src="{{ asset('uploads/' . $vendorimage->image_path) }}"
                                                alt="{{ $vendorimage->timage_path }}" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <h2 class="text-gray-500 font-bold text-4xl md:block my-2">{{ $vendor->vendor_name }}</h2>
                        <p class="text-gray-500 font-medium text-xl md:block my-2">{{ $vendor->provinsi_vendor }},
                            {{ $vendor->kabupaten_vendor }}, {{ $vendor->kecamatan_vendor }},
                            {{ $vendor->kelurahan_vendor }}, {{ $vendor->detail_alamat_vendor }}</p>

                        <div class="w-full bg-white rounded-lg">
                            <div x-data="setup()" class="w-full">
                                <ul class="flex my-4 w-full border-b border-gray-200">
                                    <template x-for="(tab, index) in tabs" :key="index">
                                        <li class="cursor-pointer py-3 px-6 rounded transition"
                                            :class="activeTab === index ? 'bg-green-500 text-white' : 'text-gray-500'"
                                            @click="activeTab = index" x-text="tab"></li>
                                    </template>
                                </ul>

                                <div class="w-full bg-white  border">
                                    <div x-show="activeTab===0">
                                        <div class="flex flex-col h-full">
                                            <div
                                                class="relative flex flex-col rounded-[20px] w-full mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 ">
                                                <div class="mt-2 mb-8 w-full">
                                                    <h4 class="px-2 text-xl font-bold text-navy-700 ">
                                                        Tentang
                                                    </h4>
                                                    <p class="mt-2 px-2 text-base text-gray-600">
                                                        {{ $vendor->about_vendor }}
                                                    </p>
                                                </div>
                                                <div class="grid grid-cols-2 gap-4 px-2 w-full">
                                                    <div
                                                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Provinsi</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->provinsi_vendor }}
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Kabupaten</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->kabupaten_vendor }}
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Kecamatan</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->kecamatan_vendor }}
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Kelurahan</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->kelurahan_vendor }}
                                                        </p>
                                                    </div>

                                                </div>
                                                <div class="px-2">
                                                    <div
                                                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Detail alamat</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->detail_alamat_vendor }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="px-2">
                                                    <div
                                                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500  ">
                                                        <p class="text-sm text-gray-600">Sosial media</p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->link_instagram_vendor }}
                                                        </p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->link_website_vendor }}
                                                        </p>
                                                        <p class="text-base font-medium text-navy-700 ">
                                                            {{ $vendor->link_facebook_vendor }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-show="activeTab===1">
                                        <div
                                            class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl w-full mx-auto bg-white">
                                            <div class="w-full md:w-1/3 bg-white grid place-items-center">
                                                <img src="{{ asset('uploads/' . $vendorService->thumbnail_service) }}"
                                                    alt="tailwind logo" class="rounded-xl" />
                                            </div>
                                            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
                                                <h3 class="font-black text-gray-800 md:text-3xl text-xl">
                                                    {{ $vendorService->service_name }}</h3>
                                                <p class="md:text-lg text-gray-500 text-base">
                                                    {{ $vendorService->service_description }}</p>
                                                <p class="text-xl font-black text-gray-800">
                                                    Mulai dari
                                                    Rp{{ number_format($vendorService->start_price_at, 0, ',', '.') }}
                                                </p>
                                                <p class="md:text-lg text-gray-500 text-base">
                                                    Tersedia di wilayah {{ $vendorService->location_available }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div x-show="activeTab===2">
                                        <h2
                                            class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">
                                            Owner</h2>
                                        <h1
                                            class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font">
                                            {{ $vendorTeam->owner_vendor_name }}</h1>
                                        <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">
                                            {{ $vendorTeam->about_the_team }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12p-16 sm:col-span-4">
                <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300 sticky top-20">
                    <h1 class="text-4xl font-medium">Tertarik?</h1>
                    <p class="text-slate-500">Anda bisa melakukan konsultasi terlebih dahulu!</p>

                    <form action="" class="my-10">
                        <div class="flex flex-col space-y-5">
                            <button
                                class="w-full py-3 font-medium text-white bg-primarybase hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>

                                <span>Chat sekarang</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script>
        function setup() {
            return {
                activeTab: 0,
                tabs: [
                    "Detail",
                    "Service",
                    "Team",
                ]
            };
        };
    </script>
@endsection
