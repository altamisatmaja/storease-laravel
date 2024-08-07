@extends('layouts.guest.app')

@section('content')
    <main class="bg-white ">
        <div class="relative flex">
            <div class="w-full md:w-1/2">
                <div class="min-h-[100dvh] h-full items-center my-auto justify-center flex flex-col ">
                    <div class="max-w-sm mx-auto w-full px-4 py-10">
                        <div class="flex flex-wrap gap-x-2 items-center">
                            <svg class="lg:h-8 md:h-6 h-4" viewBox="0 0 17 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.30938 21C7.14062 20.5125 6.925 20.0625 6.6625 19.65C6.4 19.2375 6.09062 18.8531 5.73438 18.4969C5.37813 18.1406 4.99375 17.8266 4.58125 17.5547C4.16875 17.2828 3.71875 17.0625 3.23125 16.8938C3.26875 17.4375 3.4 17.9438 3.625 18.4125C3.85 18.8813 4.15 19.3031 4.525 19.6781C4.9 20.0531 5.32188 20.3578 5.79063 20.5922C6.25938 20.8266 6.76562 20.9625 7.30938 21ZM10.3469 21C10.8906 20.9438 11.3969 20.8031 11.8656 20.5781C12.3344 20.3531 12.7562 20.0531 13.1312 19.6781C13.5062 19.3031 13.8062 18.8813 14.0312 18.4125C14.2563 17.9438 14.3969 17.4375 14.4531 16.8938C13.9656 17.0625 13.5109 17.2781 13.0891 17.5406C12.6672 17.8031 12.2781 18.1125 11.9219 18.4688C11.5656 18.825 11.2563 19.2141 10.9938 19.6359C10.7312 20.0578 10.5156 20.5125 10.3469 21ZM8.82812 10.875C10.0656 10.875 11.125 10.4344 12.0062 9.55313C12.8875 8.67188 13.3281 7.6125 13.3281 6.375V5.025L11.3594 6.68438L8.82812 3.61875L6.29688 6.68438L4.32812 5.025V6.375C4.32812 7.6125 4.76875 8.67188 5.65 9.55313C6.53125 10.4344 7.59062 10.875 8.82812 10.875ZM7.70312 23.25C5.82812 23.25 4.23438 22.5938 2.92188 21.2812C1.60937 19.9688 0.953125 18.375 0.953125 16.5V14.25C2.28437 14.2312 3.54063 14.5031 4.72188 15.0656C5.90313 15.6281 6.89687 16.3875 7.70312 17.3438V13.0406C6.09063 12.7781 4.75 12.0234 3.68125 10.7766C2.6125 9.52969 2.07812 8.0625 2.07812 6.375V2.55C2.07812 2.0625 2.29375 1.72031 2.725 1.52344C3.15625 1.32656 3.55938 1.3875 3.93438 1.70625L6.01562 3.50625L7.95625 1.14375C8.18125 0.88125 8.47188 0.75 8.82812 0.75C9.18437 0.75 9.475 0.88125 9.7 1.14375L11.6406 3.50625L13.7219 1.70625C14.0969 1.3875 14.5 1.32656 14.9313 1.52344C15.3625 1.72031 15.5781 2.0625 15.5781 2.55V6.375C15.5781 8.0625 15.0437 9.52969 13.975 10.7766C12.9062 12.0234 11.5656 12.7781 9.95312 13.0406V17.3438C10.7594 16.3875 11.7531 15.6281 12.9344 15.0656C14.1156 14.5031 15.3719 14.2312 16.7031 14.25V16.5C16.7031 18.375 16.0469 19.9688 14.7344 21.2812C13.4219 22.5938 11.8281 23.25 9.95312 23.25H7.70312Z"
                                    fill="#ffffff" />
                            </svg>
                            <img class="white-filter lg:h-8 md:h-6 h-4" src="{{ asset('icons/storease.png') }}"
                                alt="">
                        </div>

                        <h1 class="text-3xl text-gray-800  font-bold mb-6">{{ __('Selamat datang!') }}
                        </h1>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-primarybase">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('errors'))
                            <div class="mb-4 font-medium text-sm text-primarybase">
                                {{ session('errors') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="block text-gray-800 text-md font-semibold mb-2">Email
                                    *</label>
                                <input type="text" id="email" name="email" :value="old('email')" autofocus
                                    class=" w-full text-md px-4 py-3 border-2 border-gray-200 rounded-lg text-gray-700 focus:ring-primarybase"
                                    required placeholder="email anda">
                                @if ($errors->has('email'))
                                    <div class="mb-4 font-medium text-md mt-2 text-red-600">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif

                            </div>
                            <div class="mb-6">
                                <label for="password" class="block text-gray-800 text-md font-semibold mb-2">Password
                                    *</label>
                                <input type="password" id="password" name="password" autocomplete="current-password"
                                    class=" w-full px-4 py-2 border-2 border-gray-200  text-md rounded-lg text-gray-700 focus:ring-primarybase"
                                    required placeholder="••••••••">
                                @if ($errors->has('password'))
                                    <div class="mb-4 font-medium text-md mt-2 text-red-600">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif

                            </div>
                            <button type="submit"
                                class="w-full bg-primarybase text-white text-md font-semibold px-4 py-3 rounded-lg hover:bg-primarybase focus:outline-none focus:ring-2 focus:ring-primarybase focus:ring-opacity-50">Masuk</button>
                        </form>

                        <div class="mt-6 border-t border-gray-100 ">
                            <div class="mt-5">
                                <div class="bg-primarybase/20 p-4 rounded-lg">
                                    <p class="text-gray-800 text-md text-center">
                                        Peringatan: Hanya stakeholder yang berwenang yang dapat mengakses sistem ini.
                                        Tindakan melanggar akan dikenakan sanksi sesuai hukum yang berlaku.
                                        Silakan merujuk pada <a href="#"
                                            class="text-orange-700 hover:underline">Kebijakan Penggunaan</a> untuk
                                        informasi lebih lanjut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden md:block absolute top-0 bottom-0 right-0 md:w-1/2" aria-hidden="true">
                <img class="object-cover object-center w-full h-full"
                    src="https://images.unsplash.com/photo-1486520299386-6d106b22014b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    width="760" height="1024" alt="Authentication image" />
            </div>

        </div>

    </main>
@endsection
