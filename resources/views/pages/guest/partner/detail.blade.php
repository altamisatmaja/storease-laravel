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
                        <p class="text-gray-500 font-medium text-xl md:block my-2">{{ $vendor->about_vendor }}</p>

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
                                        {{ $vendor }}
                                    </div>
                                    <div x-show="activeTab===1">
                                        {{ $vendorService }}
                                    </div>
                                    <div x-show="activeTab===2">
                                        {{ $vendorTeam }}
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
