@extends('layouts.admin.app')

@section('title', 'Admin | Dashboard')

@section('content')
    <div>
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Manajemen konten tentang</h1>
            </div>

            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2 invisible">
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

        <form action="{{ route('admin.dashboard.cms.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="">
                <div class="my-4">
                    <label for="about_images" class="block text-gray-800 text-lg font-semibold mb-2">Gambar tentang</label>
                    <label
                        class="relative flex flex-col rounded-lg border-4 border-dashed w-full h-96 p-1 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="relative w-full h-full flex items-center justify-center">
                                <img id="image-preview" class=" w-96 h-full object-cover rounded-lg"
                                    src="{{ $about['about_images'] ? asset('uploads/' . $about['about_images']) : 'https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg' }}"
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
                        <input type="file" name="about_images" id="about_images" class="hidden"
                            onchange="previewImage(event)">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">icon</span> website!</p>
                </div>
            </div>
            @error('about_images')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            <div>
                <div class="my-4">
                    <label for="about_section_description" class="block text-gray-800 text-lg font-semibold mb-2">Deskripsi
                        tentang</label>
                    <textarea name="about_section_description" id="about_section_description"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">{{ $about['about_section_description'] }}</textarea>
                </div>
                @error('about_section_description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <div class="my-4">
                    <label for="our_vision" class="block text-gray-800 text-lg font-semibold mb-2">Deskripsi
                        <span class="italic">our vision</span></label>
                    <textarea name="our_vision" id="our_vision"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">{{ $about['our_vision'] }}</textarea>
                </div>
                @error('our_vision')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <div class="my-4">
                    <label for="our_mission" class="block text-gray-800 text-lg font-semibold mb-2">Deskripsi
                        <span class="italic">our mission</span></label></label>
                    <textarea name="our_mission" id="our_mission"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">{{ $about['our_mission'] }}</textarea>
                </div>
                @error('our_mission')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <button
                    class="w-full mt-4 text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-100 focus:ring-orange-600 bg-primarybase"
                    type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <script>
        // $(document).ready(function() {
        //     new FroalaEditor('#about_section_description', {
        //         toolbarButtons: [
        //             ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough'],
        //             ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'textColor',
        //                 'backgroundColor'
        //             ],
        //             ['formatOLSimple', 'formatUL', 'insertLink', 'insertImage', 'insertFile'],
        //         ]
        //     });
        // });

        // $(document).ready(function() {
        //     new FroalaEditor('#our_vision', {
        //         toolbarButtons: [
        //             ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough'],
        //             ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'textColor',
        //                 'backgroundColor'
        //             ],
        //             ['formatOLSimple', 'formatUL', 'insertLink', 'insertImage', 'insertFile'],
        //         ]
        //     });
        // });

        // $(document).ready(function() {
        //     new FroalaEditor('#our_mission', {
        //         toolbarButtons: [
        //             ['fontSize', 'bold', 'italic', 'underline', 'strikeThrough'],
        //             ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'textColor',
        //                 'backgroundColor'
        //             ],
        //             ['formatOLSimple', 'formatUL', 'insertLink', 'insertImage', 'insertFile'],
        //         ]
        //     });
        // });

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('image-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@endsection
