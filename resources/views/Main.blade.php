<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Chhun-2022</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- aos CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <div class="main">


        <!-- Header -->
        <div id="header" class="header h-[50px] bg-[#0000FF] px-4 py-2 md:px-12 duration-200">
            <p id="logo" class="text-2xl md:text-4xl text-white ham duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"/></svg>
            </p>
            <p id="cross" class="hidden duration-200 text-2xl md:text-4xl text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M24.879 2.879A3 3 0 1 1 29.12 7.12l-8.79 8.79a.125.125 0 0 0 0 .177l8.79 8.79a3 3 0 1 1-4.242 4.243l-8.79-8.79a.125.125 0 0 0-.177 0l-8.79 8.79a3 3 0 1 1-4.243-4.242l8.79-8.79a.125.125 0 0 0 0-.177l-8.79-8.79A3 3 0 0 1 7.12 2.878l8.79 8.79a.125.125 0 0 0 .177 0l8.79-8.79Z"/></svg>
            </p>
        </div>
        <div id="menu-on" class="duration-200 z-[999] sticky top-0 menu h-screen absolute text-white text-2xl md:text-4xl font-normal md:font-bold w-full hidden duration-200 text-center flex flex-col justify-center bg-[#0000FF]">
            <ul class="duration-200">
                <li class="hover:underline duration-200"><a href="/home">Home</a></li>
                <li class="hover:underline duration-200 mt-12"><a href="/about">About</a></li>
                <li class="mt-12 hover:underline "><a href="/projects">Projects</a></li>
                <li class="mt-12 hover:underline "><a href="/contact">Contact</a></li>
            </ul>
        </div>


        <!-- Content Template -->
        <div class="content">
            @yield('content')
        </div>



        <!-- Footer -->
        <div class="footer bg-[#0000FF] md:flex justify-between px-4 py-14 md:py-20 md:px-12">
            <div>
                <h1 class="md:text-2xl font-bold text-white mb-12 md:mb-0">Made by @Chhun2022</h1>
            </div>
            <div>
                <h1 class="md:text-xl font-semibold text-white">Email : Chhunkim394@gmail.com</h1>
                <h1 class="md:text-xl font-semibold text-white mt-6">Telegram : 085622539</h1>
                <h1 class="md:text-xl font-semibold text-white mt-6">Location : PhnomPenh, Cambodia.</h1>
            </div>
        </div>

    </div>
    
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>

        let ham = document.getElementById("logo");
        let menu = document.getElementById("menu-on");
        let cross = document.getElementById("cross");

        menu.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            cross.classList.toggle("hidden");
            ham.classList.remove("hidden");
        })

        ham.addEventListener("click", () => {
            ham.classList.toggle("hidden");
            cross.classList.remove("hidden");
            menu.classList.remove("hidden");
        })

        cross.addEventListener("click", () => {
            cross.classList.toggle("hidden");
            ham.classList.remove("hidden");
            menu.classList.toggle("hidden");
        })

        gsap.from('.show', {opacity: 0, duration: 1 , stagger:0.4})
        // gsap.from('.menu', {opacity: 0, duration: 2,})
        // gsap.from('.txt-2', {duration: 2, backgroundPosition: '200px 0px', x: 100})
        // gsap.from('.skill-detail', {opacity: 0, duration: 0.5, stagger:0.4})
        gsap.from('.success', {opacity: 0, duration:2})


        AOS.init({
            duration: 750,
            once: false,
            easing: 'ease-in-out-sine'
        });
    </script>
</body>
</html>