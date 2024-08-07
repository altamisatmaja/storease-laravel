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
            <form action="">
                <div class="my-2">
                    <label for="title" class="block text-gray-800 text-lg font-semibold mb-2">Judul website</label>
                    <input type="text" name="title" id="title" required placeholder="Masukkan jumlah penyetuju"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">title</span> website!</p>
                </div>
                <div class="my-2">
                    <label for="title" class="block text-gray-800 text-lg font-semibold mb-2">Judul website</label>
                    <input type="text" name="title" id="title" required placeholder="Masukkan jumlah penyetuju"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">title</span> website!</p>
                </div>
                <div class="my-2">
                    <label for="title" class="block text-gray-800 text-lg font-semibold mb-2">Judul website</label>
                    <input type="text" name="title" id="title" required placeholder="Masukkan jumlah penyetuju"
                        class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-orange-600">
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">title</span> website!</p>
                </div>
                <div class="my-2">
                    <label for="title" class="block text-gray-800 text-lg font-semibold mb-2">Gambar</label>
                    <label
                        class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center cursor-pointer">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center">
                            <div class="flex max-h-48  -mt-10">
                                <img class="has-mask h-36 object-center"
                                    src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                    alt="freepik image">
                            </div>
                            <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here
                                <br /> or <a href="" id="" class="text-blue-600 hover:underline">select
                                    a
                                    file</a> from your computer
                            </p>
                        </div>
                        <input type="file" class="hidden">
                    </label>
                    <p class="mt-2">*Ini akan digunakan untuk <span class="font-bold">icon</span> website!</p>
                </div>
                <button
                    class="w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-100 focus:ring-orange-600 bg-primarybase"
                    type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
