@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Kelola Vendor</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2 invisible">
                <button
                    class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden lg:block p-2 ">Tambah vendor</span>
                </button>
            </div>
        </div>

        <div class="mx-auto w-full max-w-full">
            <form action="{{ route('admin.dashboard.partner.pengajuan.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-4 sm:mb-0">
                    <h1 class="text-xl md:text-2xl text-gray-800 font-semibold">Formulir utama vendor</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    @foreach ([1, 2, 3, 4] as $index)
                        <div class="mb-6 pt-4">
                            <label class="mb-3 block text-xl font-medium text-textbase">
                                Foto {{ $index }} *
                            </label>
                            <div class="mb-3">
                                <input type="file" name="image_path_{{ $index }}"
                                    id="image_path_{{ $index }}" class="sr-only"
                                    onchange="previewImage(event, {{ $index }})" />
                                <label for="image_path_{{ $index }}"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                    <div>
                                        <span class="mb-2 block text-xl font-semibold text-textbase">
                                            Jatuhkan gambar disini
                                        </span>
                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                            atau
                                        </span>
                                        <span
                                            class="inline-flex rounded-lg border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                            Pilih
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <p class="mb-5 block text-lg font-medium text-textbase">
                                Foto {{ $index }}
                            </p>
                            @error('image_path_{{ $index }}')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div id="image-preview-{{ $index }}" class="mt-4"></div>
                        </div>
                    @endforeach
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="vendor_name">Nama Vendor *</label>
                        <input name="vendor_name" id="vendor_name" type="text" placeholder="Masukkan Nama Vendor"
                            class="border p-2 rounded w-full">
                        @error('vendor_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="provinsi_vendor">Provinsi vendor *</label>
                        <input name="provinsi_vendor" id="provinsi_vendor" type="text"
                            placeholder="Masukkan provinsi_vendor" class="border p-2 rounded w-full">
                        @error('provinsi_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kabupaten_vendor">Kabupaten vendor *</label>
                        <input name="kabupaten_vendor" id="kabupaten_vendor" type="text" placeholder="Masukkan Kabupaten"
                            class="border p-2 rounded w-full">
                        @error('kabupaten_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kecamatan_vendor">Kecamatan vendor *</label>
                        <input name="kecamatan_vendor" id="kecamatan_vendor" type="text"
                            placeholder="Masukkan kecamatan vendor" class="border p-2 rounded w-full">
                        @error('kecamatan_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kelurahan_vendor">Kelurahan vendor *</label>
                        <input name="kelurahan_vendor" id="kelurahan_vendor" type="text" placeholder="Masukkan Kelurahan"
                            class="border p-2 rounded w-full">
                        @error('kelurahan_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="detail_alamat_vendor">Detail Alamat vendor
                            *</label>
                        <input name="detail_alamat_vendor" id="detail_alamat_vendor" type="text"
                            placeholder="Masukkan detail alamat vendor" class="border p-2 rounded w-full">
                        @error('detail_alamat_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="about_vendor">Tentang vendor *</label>
                        <textarea type="about_vendor" name="about_vendor" id="about_vendor" placeholder="Masukkan deskripsi vendor"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600"></textarea>
                        @error('about_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="link_instagram_vendor">Link instagram vendor
                            *</label>
                        <input name="link_instagram_vendor" id="link_instagram_vendor" type="text"
                            placeholder="Masukkan link instagram vendor" class="border p-2 rounded w-full">
                        @error('link_instagram_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="link_website_vendor">Link website vendor
                            *</label>
                        <input name="link_website_vendor" id="link_website_vendor" type="text"
                            placeholder="Masukkan link website" class="border p-2 rounded w-full">
                        @error('link_website_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="link_facebook_vendor">Link facebook vendor
                            *</label>
                        <input name="link_facebook_vendor" id="link_facebook_vendor" type="text"
                            placeholder="Masukkan link facebook" class="border p-2 rounded w-full">
                        @error('link_facebook_vendor')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="location_by_gmaps">Lokasi berdasarkan Google
                            Maps
                            *</label>
                        <input name="location_by_gmaps" id="location_by_gmaps" type="text"
                            placeholder="Lokasi berdasarkan google maps" class="border p-2 rounded w-full">
                        @error('location_by_gmaps')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="my-4">
                    <label for="thumbnail_vendor" class="block text-gray-800 text-lg font-semibold mb-2">Gambar
                        thumbail vendor</label>
                    <label
                        class="relative flex flex-col rounded-lg border-4 border-dashed w-full h-96 p-1 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="relative w-full h-full flex items-center justify-center">
                                <img id="image-preview-thumbnail-vendor" class="w-96 h-full object-cover rounded-lg"
                                    src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                    alt="Preview Image">
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-50 rounded-lg">
                                    <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 -960 960 960" fill="currentColor">
                                        <path
                                            d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="thumbnail_vendor" id="thumbnail_vendor" class="hidden"
                            onchange="previewImageThumbVendor(event)">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">gambar</span> thumbnail vendor!
                    </p>
                </div>
                <div>
                    <label class="text-lg font-medium text-textbase" for="vendor_category_services_id">Kategori vendor
                        *</label>
                    <select name="vendor_category_services_id" id="vendor_category_services_id"
                        class="border p-2 rounded w-full">
                        <option value="" disabled selected>Pilih kategori vendor</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('vendor_category_services_id')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 sm:mb-0 my-4 pb-4">
                    <h1 class="text-xl md:text-2xl text-gray-800 font-semibold">Formulir services vendor</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-2 mt-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="service_name">Nama layanan
                            *</label>
                        <input name="service_name" id="service_name" type="text" placeholder="Masukkan nama layanan"
                            class="border p-2 rounded w-full">
                        @error('service_name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="start_price_at">Harga layanan
                            *</label>
                        <input name="start_price_at" id="start_price_at" type="text"
                            placeholder="Masukkan harga layanan" class="border p-2 rounded w-full">
                        @error('start_price_at')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="location_available">Lokasi tersedia
                            *</label>
                        <select name="location_available" id="location_available" class="border p-2 rounded w-full">
                            <option value="" disabled selected>Pilih lokasi tersedia</option>
                            <option value="Nasional">Nasional</option>
                            <option value="Jawa">Jawa</option>
                            <option value="Sumatera">Sumatera</option>
                            <option value="Kalimantan">Kalimantan</option>
                            <option value="Bali">Bali</option>
                            <option value="Papua">Papua</option>
                        </select>
                        @error('location_available')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 mt-4">
                    <div class="">
                        <label class="text-lg font-medium text-textbase" for="service_description">Tentang Service Vendor
                            *</label>
                        <textarea name="service_description" id="service_description"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600"></textarea>
                        @error('service_description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="my-4">
                    <label for="thumbnail_service" class="block text-gray-800 text-lg font-semibold mb-2">Gambar
                        thumbanil service</label>
                    <label
                        class="relative flex flex-col rounded-lg border-4 border-dashed w-full h-96 p-1 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="relative w-full h-full flex items-center justify-center">
                                <img id="image-preview-thumbnail" class="w-96 h-full object-cover rounded-lg"
                                    src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                    alt="Preview Image">
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-50 rounded-lg">
                                    <svg class="w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 -960 960 960" fill="currentColor">
                                        <path
                                            d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="thumbnail_service" id="thumbnail_service" class="hidden"
                            onchange="previewImageThumb(event)">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">gambar</span> thumbnail service!
                    </p>
                </div>

                @error('thumbnail_service')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <div class="mb-4 sm:mb-0">
                    <h1 class="text-xl md:text-2xl text-gray-800 font-semibold">Formulir utama vendor</h1>
                </div>
                <div class="pt-4">
                    <label class="text-lg font-medium text-textbase" for="owner_vendor_name">Nama owner
                        *</label>
                    <input name="owner_vendor_name" id="owner_vendor_name" type="text"
                        placeholder="Masukkan harga layanan" class="border p-2 rounded w-full">
                    @error('owner_vendor_name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div class="">
                        <label class="text-lg font-medium text-textbase" for="about_the_team">Tentang Tim Vendor
                            *</label>
                        <textarea name="about_the_team" id="about_the_team"
                            class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600"></textarea>
                        @error('about_the_team')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-xl font-semibold text-white outline-none">
                        Tambahkan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function previewImage(event, index) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var previewContainer = document.getElementById('image-preview-' + index);
                var imageElement = document.createElement('img');
                imageElement.src = reader.result;
                imageElement.classList.add('rounded-md', 'max-w-full', 'h-auto');
                previewContainer.innerHTML = '';
                previewContainer.appendChild(imageElement);
            };
            reader.readAsDataURL(input.files[0]);
        }

        function previewImageThumb(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image-preview-thumbnail');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function previewImageThumbVendor(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image-preview-thumbnail-vendor');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
