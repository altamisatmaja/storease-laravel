@extends('layouts.guest.app')

@section('content')
    @if (session('success'))
        <div id="successMessage"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Berhasil
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('success') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('errors'))
        <div id="errorMessage"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Gagal
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('error') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section class="relative flex flex-col w-full h-[550px] bg-cover bg-fixed bg-center justify-center items-center"
        style="
        background-image: url('{{ asset('uploads/' . $heroContactUs->image) }}');
    ">
        <div class="absolute inset-0 bg-sekunderbase opacity-50"></div>
        <h1 class="text-white text-5xl font-semibold mb-10 relative z-10">
            Kontak kami!
        </h1>
        <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
            class="text-white/90 hover:text-white relative z-10">
            {{ $heroContactUs->title }}
        </a>
    </section>
    <div class="my-6">
        <div class="grid sm:grid-cols-2 items-center gap-16 p-8 mx-auto bg-white rounded-md text-[#333] font-[sans-serif]">
            <div>
                <h1 class="text-3xl font-extrabold">Informasi Kontak</h1>
                <p class="text-lg text-gray-400 mt-3">Selamat datang di website resmi storease,
                    informasi kontak resmi kami tertera pada halaman ini.
                </p>
                <div class="space-y-4 mt-10">
                    <div class="flex items-start space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#423c6a">
                            <path
                                d="M480-168q129.33-118 191.33-214.17 62-96.16 62-169.83 0-114.86-73.36-188.1-73.36-73.23-179.97-73.23T300.03-740.1q-73.36 73.24-73.36 188.1 0 73.67 63 169.83Q352.67-286 480-168Zm-.17 65.67q-11.83 0-23.5-4-11.66-4-20.66-12.67-49.67-45.33-99-97.33-49.34-52-88.5-107.84Q209-380 184.5-437.83 160-495.67 160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 56.33-24.5 114.17Q751-380 711.83-324.17q-39.16 55.84-88.5 107.84-49.33 52-99 97.33-9 8.67-20.83 12.67-11.83 4-23.67 4ZM480-560Zm.06 73.33q30.27 0 51.77-21.56 21.5-21.55 21.5-51.83 0-30.27-21.56-51.77-21.55-21.5-51.83-21.5-30.27 0-51.77 21.56-21.5 21.55-21.5 51.83 0 30.27 21.56 51.77 21.55 21.5 51.83 21.5Z" />
                        </svg>
                        <p>{{ $contacts->detail_address_storease }}</p>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#423c6a">
                            <path
                                d="M796-120q-119 0-240-55.5T333-333Q231-435 175.5-556T120-796q0-18.86 12.57-31.43T164-840h147.33q14 0 24.34 9.83Q346-820.33 349.33-806l26.62 130.43q2.05 14.9-.62 26.24-2.66 11.33-10.82 19.48L265.67-530q24 41.67 52.5 78.5T381-381.33q35 35.66 73.67 65.5Q493.33-286 536-262.67l94.67-96.66q9.66-10.34 23.26-14.5 13.61-4.17 26.74-2.17L806-349.33q14.67 4 24.33 15.53Q840-322.27 840-308v144q0 18.86-12.57 31.43T796-120ZM233-592l76-76.67-21-104.66H187q3 41.66 13.67 86Q211.33-643 233-592Zm365.33 361.33q40.34 18.34 85.84 29.67 45.5 11.33 89.16 13.67V-288l-100-20.33-75 77.66ZM233-592Zm365.33 361.33Z" />
                        </svg>
                        <p>{{ $contacts->whatsapp_number_storease }}</p>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#423c6a">
                            <path
                                d="M146.67-160q-27 0-46.84-19.83Q80-199.67 80-226.67v-506.66q0-27 19.83-46.84Q119.67-800 146.67-800h666.66q27 0 46.84 19.83Q880-760.33 880-733.33v506.66q0 27-19.83 46.84Q840.33-160 813.33-160H146.67Zm666.66-510L497.67-466.33q-4.34 2.33-8.5 3.83Q485-461 480-461t-9.17-1.5q-4.16-1.5-8.5-3.83L146.67-670v443.33h666.66V-670ZM480-521.33l330.67-212H150l330 212ZM146.67-670v8V-707.88v.82-26.27 26-.78V-662v-8 443.33V-670Z" />
                        </svg>
                        <p>{{ $contacts->email_storease }}</p>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#423c6a">
                            <path
                                d="M515.33-493.33v-162q0-14.34-9.5-23.84t-23.83-9.5q-14.33 0-23.83 9.5-9.5 9.5-9.5 23.84v175q0 6.66 2.33 12.5 2.33 5.83 7 11.16l140 143.34q9.67 10.33 24.33 10 14.67-.34 24.34-10 9.66-9.67 9.66-24 0-14.34-9.66-24l-131.34-132ZM480-80q-82.33 0-155.33-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.67T80-480q0-82.33 31.5-155.33 31.5-73 85.83-127.34Q251.67-817 324.67-848.5T480-880q82.33 0 155.33 31.5 73 31.5 127.34 85.83Q817-708.33 848.5-635.33T880-480q0 82.33-31.5 155.33-31.5 73-85.83 127.34Q708.33-143 635.33-111.5T480-80Zm0-400Zm0 333.33q137.67 0 235.5-97.83 97.83-97.83 97.83-235.5 0-137.67-97.83-235.5-97.83-97.83-235.5-97.83-137.67 0-235.5 97.83-97.83 97.83-97.83 235.5 0 137.67 97.83 235.5 97.83 97.83 235.5 97.83Z" />
                        </svg>
                        <p>{{ $contacts->operational_schedule_date }} - {{ $contacts->operational_schedule_hour }} WIB</p>
                    </div>
                </div>
            </div>

            <form class="ml-auto space-y-4" action="{{ route('contact_us.store') }}" method="POST">
                @csrf
                <h1 class="text-3xl font-extrabold">Ingin Menghubungi Kami?
                </h1>
                <p class="text-md text-gray-400 mt-3">Gunakan form dibawah ini, Customer Service kami akan segera merespond
                    anda
                </p>
                <div class="grid grid-cols-2 gap-x-2">
                    <div>
                        <label for="name" class="text-md text-primarybase">Nama Lengkap</label>
                        <input type='text' name="name" placeholder='Name Lengkap'
                            class="w-full
                        rounded-md py-2.5 px-4 border text-sm outline-primarybase" />
                    </div>
                    <div>
                        <label for="address" class="text-md text-primarybase">Alamat</label>
                        <input type='text' name="address" placeholder='Alamat'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-primarybase" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-2">
                    <div>
                        <label for="nohp" class="text-md text-primarybase">Nomor Hp</label>
                        <input type='text' name="nohp" placeholder='No HP'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-primarybase" />
                    </div>
                    <div>
                        <label for="email" class="text-md text-primarybase">Email</label>
                        <input type='text' name="email" placeholder=' Email'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-primarybase" />
                    </div>
                </div>
                <div>
                    <label for="subject" class="text-md text-primarybase">Subjek</label>
                    <input type='text' name="subject" placeholder='Subject'
                        class="w-full rounded-md py-2.5 px-4 border text-sm outline-primarybase" />
                </div>
                <div>
                    <label for="message" class="text-md text-primarybase">Pesan</label>
                    <textarea placeholder='Message' name="message" rows="6"
                        class="w-full rounded-md px-4 border text-sm pt-2.5 outline-primarybase"></textarea>
                </div>
                <button type='submit'
                    class="text-white bg-primarybase hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Kirim</button>
            </form>
        </div>
    </div>
    <div class="w-full h-[600px] px-10">
        <h1 class="text-4xl font-extrabold text-center text-primarybase my-3">Lokasi kami</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1974.6822176682679!2d113.71559793855504!3d-8.16598964295056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1723011592196!5m2!1sen!2sid"
            class="w-full h-[500px] rounded-lg " style="border:0;" allowfullscreen="true" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            var errorMessage = document.getElementById('errorMessage');

            if (successMessage) {
                successMessage.addEventListener('click', function() {
                    successMessage.style.display = 'none';
                });
            }

            if (errorMessage) {
                errorMessage.addEventListener('click', function() {
                    errorMessage.style.display = 'none';
                });
            }
        });
    </script>
@endsection
