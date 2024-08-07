<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>storease - Official Website</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

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
            box-sizing: border-box;
            width: 100%;
            margin-right: 16px;
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

        .hover-image {
            display: none;
        }

        .portfolio-item:hover .hover-image {
            display: block;
        }

        .portfolio-item:hover .main-image {
            display: none;
        }

        #whatsapp-chat {
            display: block;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }

        .floating-button img {
            width: 24px;
            height: 24px;
        }

        .floating-button span {
            display: none;
        }


        @media (min-width: 768px) {
            #back-to-top {
                display: block;
            }
        }
    </style>
</head>

<body class="antialiased">
    @include('layouts.guest.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.guest.footer')

    <button id="back-to-top"
        class="fixed bottom-4 text-lg right-6 bg-slate-600 cursor-pointer rounded-full p-3 items-center justify-center d-none text-white w-12 h-12 mb-20">
        ↑
    </button>

    <a href="https://wa.me/0893828323" target="_blank" id="whatsapp-chat"
        class="fixed bottom-4 right-4 bg-transparent cursor-pointer">
        <div class="flex gap-x-4">
            <div class="flex flex-col text-left bg-white px-3 py-2 rounded-lg text-primarybase ring-1 ring-primarybase">
                <p>Hubungi kami!</p>
                <span class="font-bold">Chat melalui WhatsApp</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
                <path fill="#fff"
                    d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                </path>
                <path fill="#fff"
                    d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                </path>
                <path fill="#cfd8dc"
                    d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                </path>
                <path fill="#40c351"
                    d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                </path>
                <path fill="#fff" fill-rule="evenodd"
                    d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </a>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollContainer = document.querySelector('.scroll-container');
        const scrollLeftButton = document.getElementById('scroll-left');
        const scrollRightButton = document.getElementById('scroll-right');
        const scrollItems = document.querySelectorAll('.scroll-item');

        if (scrollItems.length > 0) {
            const itemWidth = scrollItems[0].offsetWidth + parseInt(window.getComputedStyle(scrollItems[0])
                .marginRight);

            let scrollInterval = setInterval(() => {
                scrollContainer.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
            }, 2000);

            scrollLeftButton.addEventListener('click', () => {
                clearInterval(scrollInterval);
                scrollContainer.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
                scrollInterval = setInterval(() => {
                    scrollContainer.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }, 2000);
            });

            scrollRightButton.addEventListener('click', () => {
                clearInterval(scrollInterval);
                scrollContainer.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
                scrollInterval = setInterval(() => {
                    scrollContainer.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }, 2000);
            });
        }
    });

    document.querySelectorAll('.portfolio-item').forEach(item => {
        item.addEventListener('mouseover', () => {
            item.querySelector('.main-image').classList.add('hidden');
            item.querySelector('.hover-image').classList.remove('hidden');
        });

        item.addEventListener('mouseout', () => {
            item.querySelector('.main-image').classList.remove('hidden');
            item.querySelector('.hover-image').classList.add('hidden');
        });
    });

    const portfolioContainer = document.getElementById('portfolio-container');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');

    leftArrow.addEventListener('click', () => {
        portfolioContainer.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    rightArrow.addEventListener('click', () => {
        portfolioContainer.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        const scrollContainer = document.querySelector('.scroll-container');
        const scrollLeftButton = document.getElementById('scroll-left');
        const scrollRightButton = document.getElementById('scroll-right');
        const scrollItems = document.querySelectorAll('.scroll-item');
        const backToTopButton = document.getElementById('back-to-top');

        if (scrollItems.length > 0) {
            const itemWidth = scrollItems[0].offsetWidth + parseInt(window.getComputedStyle(scrollItems[0])
                .marginRight);

            let scrollInterval = setInterval(() => {
                scrollContainer.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
            }, 2000);

            scrollLeftButton.addEventListener('click', () => {
                clearInterval(scrollInterval);
                scrollContainer.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
                scrollInterval = setInterval(() => {
                    scrollContainer.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }, 2000);
            });

            scrollRightButton.addEventListener('click', () => {
                clearInterval(scrollInterval);
                scrollContainer.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
                scrollInterval = setInterval(() => {
                    scrollContainer.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }, 2000);
            });
        }

        document.querySelectorAll('.portfolio-item').forEach(item => {
            item.addEventListener('mouseover', () => {
                item.querySelector('.main-image').classList.add('hidden');
                item.querySelector('.hover-image').classList.remove('hidden');
            });

            item.addEventListener('mouseout', () => {
                item.querySelector('.main-image').classList.remove('hidden');
                item.querySelector('.hover-image').classList.add('hidden');
            });
        });

        const portfolioContainer = document.getElementById('portfolio-container');
        const leftArrow = document.getElementById('left-arrow');
        const rightArrow = document.getElementById('right-arrow');

        leftArrow.addEventListener('click', () => {
            portfolioContainer.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });

        rightArrow.addEventListener('click', () => {
            portfolioContainer.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>

</html>
