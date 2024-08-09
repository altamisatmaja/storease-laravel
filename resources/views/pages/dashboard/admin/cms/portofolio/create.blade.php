@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Dashboard</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                <button
                    class="px-3 lg:gap-x-2 font-medium text-md inline-flex items-center justify-center rounded-lg leading-5 transition bg-white border-2  border-gray-200 hover:border-gray-300  text-gray-400 ">
                    <svg class="fill-current shrink-0 xs:hidden" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden lg:block p-2 ">Tambah partner</span>
                </button>
            </div>
        </div>

        <div class="">
            <form action="{{ route('admin.dashboard.cms.portofolio.store') }}" method="POST">
                @csrf
                <div class="my-2">
                    <label for="link_social_media_portofolio"
                        class="block text-gray-800 text-lg font-semibold mb-2">link_social_media_portofolio</label>
                    <input type="text" name="link_social_media_portofolio" id="link_social_media_portofolio" required
                        placeholder="Masukkan jumlah penyetuju"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">link_social_media_portofolio</span>
                        website!</p>
                </div>
                <div class="my-4">
                    <label for="thumbnail_portofolio" class="block text-gray-800 text-lg font-semibold mb-2">Gambar
                        tentang</label>
                    <label
                        class="relative flex flex-col rounded-lg border-4 border-dashed w-full h-96 p-1 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="relative w-full h-full flex items-center justify-center">
                                <img id="image-preview-thumb-pictures" class="w-96 h-full object-cover rounded-lg"
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
                        <input type="file" name="thumbnail_portofolio" id="thumbnail_portofolio" class="hidden"
                            onchange="previewThumbanilPortofolio(event)">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">icon</span> website!</p>
                </div>
                <div class="my-4">
                    <label for="hover_portofolio" class="block text-gray-800 text-lg font-semibold mb-2">Gambar
                        tentang</label>
                    <label
                        class="relative flex flex-col rounded-lg border-4 border-dashed w-full h-96 p-1 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="relative w-full h-full flex items-center justify-center">
                                <img id="image-preview-hover-pictures" class="w-96 h-full object-cover rounded-lg"
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
                        <input type="file" name="hover_portofolio" id="hover_portofolio" class="hidden"
                            onchange="previewHoverPortofolio(event)">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">icon</span> website!</p>
                </div>
                <button
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-100 focus:ring-orange-600 bg-primarybase"
                    type="submit">Simpan</button>
            </form>
        </div>
    </div>
    <script>
        function previewThumbanilPortofolio(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image-preview-thumb-pictures');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function previewHoverPortofolio(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image-preview-hover-pictures');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
