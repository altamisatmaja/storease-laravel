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

        .hover-image {
            display: none;
        }

        .portfolio-item:hover .hover-image {
            display: block;
        }

        .portfolio-item:hover .main-image {
            display: none;
        }

        .floating-button {
            position: fixed;
            bottom: 16px;
            right: 16px;
            background-color: #25D366;
            /* WhatsApp green color */
            color: white;
            border: none;
            padding: 12px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
        }

        #back-to-top {
            display: none;
            background-color: #333;
            /* Dark color for the back-to-top button */
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 24px;
            margin-bottom: 60px;
            /* Space above the WhatsApp button */
        }

        #whatsapp-chat {
            background-color: #25D366;
            /* WhatsApp green color */
            display: block;
            text-decoration: none;
            font-size: 14px;
            text-align: center;
        }

        #whatsapp-chat:hover {
            background-color: #128C7E;
            /* Darker green for hover effect */
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

    <button id="back-to-top" class="floating-button">
        ↑
    </button>

    <!-- WhatsApp Chat Button -->
    <a href="https://wa.me/yourwhatsappphonenumber" target="_blank" id="whatsapp-chat" class="floating-button">
        Chat with us on WhatsApp
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
