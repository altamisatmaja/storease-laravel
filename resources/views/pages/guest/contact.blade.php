<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>storease</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .white-filter {
            filter: brightness(0) invert(1);
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .dot.active {
            background-color: #4a5568;
            /* Darker shade for the active dot */
        }

        .scroll-container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
        }

        .scroll-item {
            flex: 0 0 100%;
            box-sizing: border-box;
        }

        .scroll-item {
            flex: 0 0 auto;
            /* Prevents items from shrinking or growing */
            box-sizing: border-box;
            width: 100%;
            /* Adjust this width as needed */
            margin-right: 16px;
            /* Space between items */
        }


        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #333;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }


        .scroll-button.left {
            left: 0;
        }

        .scroll-button.right {
            right: 0;
        }

        .scroll-arrow {
            top: 50%;
            transform: translateY(-50%);
        }


        /* .hover-image {
            display: none;
        }

        .portfolio-item:hover .hover-image {
            display: block;
        }

        .portfolio-item:hover .main-image {
            display: none;
        } */
    </style>
</head>

<body class="antialiased">
    <header>
        <nav x-data="{ open: false }"
            class="sticky top-0 flex h-auto w-auto bg-primarybase  justify-between items-center md:h-16 py-2 md:py-0 lg:py-0">
            <div class="flex w-full justify-between text-white">
                <div
                    class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center">
                    <a class="md:text-lg lg:text-xl text-md" href="/">Beranda</a>
                </div>
                <div class="w-3/5 items-center justify-evenly font-semibold flex flex-wrap">
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
                </div>
                <div
                    class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center">
                    <div class="md:flex md:space-x-6 space-x-4">
                        <a href="/kontak" class="md:text-lg lg:text-xl text-md">Kontak</a>
                        <a href="{{ route('login') }}" class="md:text-lg lg:text-xl text-md">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <header />

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <section class="flex flex-col w-full h-[550px] bg-cover bg-fixed bg-center flex justify-center items-center"
            style="
            background-image: url(https://images.unsplash.com/photo-1642427749670-f20e2e76ed8c?auto=format&fit=crop&w=880&q=80);
        ">
            <h1 class="text-white text-5xl font-semibold  mb-10">
                This is Parallax Effect
            </h1>
            <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                class="text-white/90 hover:text-white">
                Convetert to SASS
            </a>
        </section>
        <div class="my-6">
            <div
                class="grid sm:grid-cols-2 items-center gap-16 p-8 mx-auto bg-white rounded-md text-[#333] font-[sans-serif]">
                <div>
                    <h1 class="text-3xl font-extrabold">Let's Talk</h1>
                    <p class="text-sm text-gray-400 mt-3">Have some big idea or brand to develop and need help? Then
                        reach out we'd love to hear about your project and provide help.</p>
                    <div class="mt-12">
                        <h2 class="text-lg font-extrabold">Email</h2>
                        <ul class="mt-3">
                            <li class="flex items-center">
                                <div
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                        viewBox="0 0 479.058 479.058">
                                        <path
                                            d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                            data-original="#000000" />
                                    </svg>
                                </div>
                                <a target="blank" href="#" class="text-[#007bff] text-sm ml-3">
                                    <small class="block">Mail</small>
                                    <strong>https://gmail.com</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12">
                        <h2 class="text-lg font-extrabold">Socials</h2>
                        <ul class="flex mt-3 space-x-4">
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                        viewBox="0 0 511 512">
                                        <path
                                            d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                                            data-original="#000000" />
                                    </svg>
                                </a>
                            </li>
                            <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#007bff'
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form class="ml-auto space-y-4">
                    <div class="grid grid-cols-2 gap-x-2">
                        <input type='text' placeholder='Name Lengkap'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                        <input type='text' placeholder='Alamat'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                    </div>
                    <div class="grid grid-cols-2 gap-x-2">
                        <input type='text' placeholder='No HP'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                        <input type='text' placeholder=' Email'
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                    </div>
                    <input type='text' placeholder='Subject'
                        class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                    <textarea placeholder='Message' rows="6"
                        class="w-full rounded-md px-4 border text-sm pt-2.5 outline-[#007bff]"></textarea>
                    <button type='button'
                        class="text-white bg-[#007bff] hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Send</button>
                </form>
            </div>
        </div>



        <!-- component -->
        <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
            <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div>
                        <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
                        <p class="max-w-xs mt-4 text-sm text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
                        </p>
                        <div class="flex mt-8 space-x-6 text-gray-600">
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Facebook </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Instagram </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Twitter </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> GitHub </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Dribbble </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                        <div>
                            <p class="font-medium">
                                Company
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                                <a class="hover:opacity-75" href> About </a>
                                <a class="hover:opacity-75" href> Meet the Team </a>
                                <a class="hover:opacity-75" href> History </a>
                                <a class="hover:opacity-75" href> Careers </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Services
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                                <a class="hover:opacity-75" href> 1on1 Coaching </a>
                                <a class="hover:opacity-75" href> Company Review </a>
                                <a class="hover:opacity-75" href> Accounts Review </a>
                                <a class="hover:opacity-75" href> HR Consulting </a>
                                <a class="hover:opacity-75" href> SEO Optimisation </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Helpful Links
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                                <a class="hover:opacity-75" href> Contact </a>
                                <a class="hover:opacity-75" href> FAQs </a>
                                <a class="hover:opacity-75" href> Live Chat </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Legal
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                                <a class="hover:opacity-75" href> Privacy Policy </a>
                                <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                                <a class="hover:opacity-75" href> Returns Policy </a>
                                <a class="hover:opacity-75" href> Accessibility </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-xs text-gray-800">
                    © 2022 Comany Name
                </p>
            </div>
        </footer>
</body>
<script></script>




</html>
