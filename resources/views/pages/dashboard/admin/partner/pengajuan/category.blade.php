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

        <!-- Cards -->
        <div class="mx-auto w-full max-w-full">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="mb-6 pt-4">
                        <label class="mb-3 block text-xl font-medium text-textbase">
                            Foto Pertama *
                        </label>
                        <div class="mb-3">
                            <input type="file" name="foto_depan" id="foto_depan" class="sr-only" />
                            <label for="foto_depan"
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
                        <description class="mb-5 block text-lg font-medium text-textbase">
                            Foto Pertama
                        </description>
                        {{-- @error('foto_depan')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                        <div id="image-front-preview" class="mt-4"></div>
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-3 block text-xl font-medium text-textbase">
                            Foto Kedua *
                        </label>

                        <div class="mb-3">
                            <input type="file" name="foto_samping_kiri" id="foto_samping_kiri" class="sr-only" />
                            <label for="foto_samping_kiri"
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
                        <description class="mb-5 block text-lg font-medium text-textbase">
                            Foto Kedua
                        </description>
                        {{-- @error('foto_samping_kiri')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                        <div id="image-left-preview" class="mt-4"></div>
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-3 block text-xl font-medium text-textbase">
                            Foto ketiga *
                        </label>

                        <div class="mb-3">
                            <input type="file" name="foto_samping_kanan" id="foto_samping_kanan" class="sr-only" />
                            <label for="foto_samping_kanan"
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
                        <description class="mb-5 block text-lg font-medium text-textbase">
                            Foto ketiga
                        </description>
                        {{-- @error('foto_samping_kanan')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                        <div id="image-right-preview" class="mt-4"></div>
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-3 block text-xl font-medium text-textbase">
                            Foto keempat *
                        </label>

                        <div class="mb-3">
                            <input type="file" name="foto_belakang" id="foto_belakang" class="sr-only" />
                            <label for="foto_belakang"
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
                        <description class="mb-5 block text-lg font-medium text-textbase">
                            Foto keempat
                        </description>
                        {{-- @error('foto_belakang')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                        <div id="image-behind-preview" class="mt-4"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="nama_properti">Nama Properti *</label>
                        <input name="nama_properti" id="nama_properti" type="text" placeholder="Masukkan Nama Properti"
                            class="border p-2 rounded w-full">
                        {{-- @error('nama_properti')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="alamat">Alamat *</label>
                        <input name="alamat" id="alamat" type="text" placeholder="Masukkan alamat"
                            class="border p-2 rounded w-full">
                        {{-- @error('alamat')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                </div>
                <div class="mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="deskripsi">Deskripsi *</label>
                        <textarea type="deskripsi" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi properti"
                            class="border p-2 rounded w-full h-20"></textarea>
                        {{-- @error('deskripsi')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="harga">Harga *</label>
                        <input name="harga" id="harga" type="text" placeholder="Masukkan harga"
                            class="border p-2 rounded w-full">
                        {{-- @error('harga')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="luas_kamar">Luas kamar *</label>
                        <input name="luas_kamar" id="luas_kamar" type="text" placeholder="Masukkan luas kamar"
                            class="border p-2 rounded w-full">
                        {{-- @error('luas_kamar')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror --}}
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="jenis_kamar_mandi">Jenis kamar mandi
                            *</label>
                        <select name="jenis_kamar_mandi" id="jenis_kamar_mandi" class="border p-2 rounded w-full">
                            <option value="" disabled selected>Pilih Jenis Kamar Mandi</option>
                            <option value="Luar">Luar</option>
                            <option value="Dalam">Dalam</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="latitude">Latitude kos *</label>
                        <input name="latitude" id="latitude" type="text" placeholder="Latitude kos"
                            class="border p-2 rounded w-full">
                        @error('latitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="longitude">Longitude kos
                            *</label>
                        <input name="longitude" id="longitude" type="text" placeholder="Masukkan longitude"
                            class="border p-2 rounded w-full">
                        @error('longitude')
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
    @endsection
