<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SwishAuthSystem</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <section>
        <div class="max-w-screen-xl mx-auto px-4 py-28 gap-12 text-gray-600 md:px-8">
            <div class="space-y-5 max-w-4xl mx-auto text-center">
                <h1 class="text-sm text-indigo-800 font-medium">
                    Authentication System Project
                </h1>
                <h2 class="text-4xl text-gray-800 font-extrabold mx-auto md:text-5xl">
                    Implemented by the best <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF3131] to-[#FA1818]">Laravel</span>
                    Developer of <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#19E600] to-[#19E600]">POLIS University's</span>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#0B6000] to-[#0B6000]">MSc.CS</span>
                    2023/24 Class
                </h2>
                <p class="max-w-2xl mx-auto">
                    Welcome to the documentation for our Laravel web application built with Laravel Jetstream! This
                    documentation aims to provide you with all the necessary information to understand, use, and extend
                    our web application effectively.
                    To start using the application, you need to <a href="/register"
                                                                   class="text-indigo-600 hover:text-indigo-800">register</a>
                    or <a href="/login" class="text-indigo-600 hover:text-indigo-800">log in</a>. You can find the
                    registration
                    and login buttons located in the top right corner of the page too.
                </p>
                <div class="items-center justify-center gap-x-3 space-y-3 sm:flex sm:space-y-0">
                    <a href="https://github.com/numbhill"
                       class="block py-2 px-4 text-white font-medium bg-indigo-900 duration-150 hover:bg-indigo-700 active:bg-indigo-900 rounded-lg shadow-lg hover:shadow-none">
                        This Project's GitHub Repo
                    </a>
                    <a href="https://jetstream.laravel.com/introduction.html"
                       class="block py-2 px-4 text-gray-700 hover:text-gray-500 font-medium duration-150 active:bg-gray-100 border rounded-lg">
                        Jetstream Doc
                    </a>
                </div>
            </div>
        </div>
    </section>


</div>

<section class="py-14">
    <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
        <div class="max-w-xl mx-auto space-y-3 sm:text-center">
            <h3 class="text-indigo-900 font-semibold">Features</h3>
            <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                About this Laravel Jetstream
            </p>
            <p>
                Laravel Jetstream is a beautifully crafted application scaffolding for Laravel that provides
                authentication, team management, API support, and more right out of the box. It's built using the latest
                Laravel features and offers a robust foundation for building modern web applications.
            </p>
        </div>
        <div class="mt-12">
            <ul class="grid gap-y-8 gap-x-12 sm:grid-cols-2 lg:grid-cols-3">
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Authentication</h4>
                        <p class="mt-3">
                            Our web application includes a secure authentication system powered by Laravel Jetstream.
                            Users can register, log in, reset passwords, and manage their profiles with ease.
                        </p>
                    </div>
                </li>
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Multi-Tenancy</h4>
                        <p class="mt-3">
                            With Laravel Jetstream, our application supports multi-tenancy, allowing users to create and
                            manage multiple teams within a single account.
                        </p>
                    </div>
                </li>
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"/>
                            <path
                                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"/>
                        </svg>

                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Mail Support</h4>
                        <p class="mt-3">
                            Our web application offers Mail support such as email verification and password reset.
                        </p>
                    </div>
                </li>
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Two-Factor Authentication (2FA)</h4>
                        <p class="mt-3">
                            For enhanced security, our application supports two-factor authentication, providing an
                            additional layer of protection for user accounts.
                        </p>
                    </div>
                </li>
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                  clip-rule="evenodd"/>
                            <path
                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z"/>
                        </svg>

                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Team Collaboration</h4>
                        <p class="mt-3">
                            Users can collaborate effectively with team members by creating teams, inviting members, and
                            managing team settings within the application.
                        </p>
                    </div>
                </li>
                <li class="flex gap-x-4">
                    <div
                        class="flex-none w-12 h-12 bg-indigo-50 text-indigo-900 rounded-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Super Cool Creator</h4>
                        <p class="mt-3">
                            Because I love creating cool stuff and I like to share it with the world.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>


<section class="py-14">
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        <img
            src="https://media1.popsugar-assets.com/files/thumbor/INM-DZOVRQmrOhAuZSumFeWzu_0=/2790x1500/top/filters:format_auto():quality(85):extract_cover()/2017/06/14/762/n/1922283/0f4d630c8e067efe_MCDFINE_EC015_H.JPG"
            alt=""
            class="absolute inset-0 -z-10 w-full object-cover object-right md:object-center"
            style="opacity: 0.7; filter: brightness(0.5);">
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
             aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div
            class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                 style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">About this project</h2>
                <p class="mt-6 text-lg leading-8 text-white">Packages and Technologies:</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                    <a href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze">Breeze <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://laravel.com/docs/10.x/fortify">Laravel Fortify <span
                            aria-hidden="true">&rarr;</span></a>
                    <a href="https://laravel.com/docs/10.x/sanctum">Laravel Sanctum <span
                            aria-hidden="true">&rarr;</span></a>
                    <a href="https://livewire.laravel.com/docs/quickstart">Livewire <span
                            aria-hidden="true">&rarr;</span></a>
                    <a href="https://alpinejs.dev/start-here">Alpine.js <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://tailwindcss.com/">Tailwind CSS <span aria-hidden="true">&rarr;</span></a>
                    <a href="https://mailtrap.io/">Mailtrap <span aria-hidden="true">&rarr;</span></a>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Packages & Technologies</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">6</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Documentations of each one</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Click the links</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Hours spend for this project</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">6 hours</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-gray-300">Still Unknown</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Grade</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>

<section class="py-14">
    <div class="max-w-screen-xl mx-auto px-4 md:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <div class="pb-6 mx-auto">
                <svg class="mx-auto" version="1.0" xmlns="http://www.w3.org/2000/svg" width="128pt" height="128pt"
                     viewBox="0 0 256.000000 256.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" fill="#2E1653"
                       stroke="none">
                        <path
                            d="M1325 1630 c-22 -9 -55 -45 -55 -60 0 -6 -6 -19 -12 -31 -11 -17 -10 -22 12 -39 14 -11 21 -20 15 -20 -5 0 -3 -5 6 -10 12 -7 15 -34 17 -149 1 -93 -2 -141 -9 -141 -22 0 -34 -26 -29 -60 5 -33 7 -35 50 -40 25 -3 68 -3 95 0 48 5 50 6 53 38 2 21 -3 41 -13 52 -11 12 -18 39 -19 75 -3 56 7 81 18 47 8 -23 76 -62 108 -62 30 0 32 -33 4 -53 -13 -9 -17 -24 -14 -52 3 -37 6 -40 35 -43 17 -2 45 4 61 12 25 13 31 13 35 2 7 -18 64 -28 88 -16 11 6 19 21 19 35 0 14 5 25 10 25 6 0 10 -5 10 -12 0 -7 5 -5 13 4 16 22 67 13 67 -12 0 -23 19 -38 57 -46 30 -6 56 9 65 38 3 9 9 8 22 -5 13 -13 22 -15 37 -7 10 6 19 15 19 21 0 6 5 7 10 4 6 -4 9 -1 8 7 -2 8 5 12 17 10 13 -2 16 0 8 6 -9 6 0 20 32 52 25 24 45 51 45 60 0 9 -25 40 -55 70 -30 29 -52 57 -49 62 3 5 0 7 -8 6 -8 -2 -12 5 -11 17 1 11 0 15 -3 8 -3 -7 -12 -9 -20 -6 -8 3 -24 -3 -34 -12 -20 -18 -20 -17 -20 18 0 58 -7 67 -55 67 -23 0 -47 -6 -53 -13 -6 -7 -12 -59 -13 -115 l-1 -102 -92 0 c-81 0 -94 3 -110 21 -20 23 -30 59 -16 59 5 0 10 -10 12 -22 3 -20 9 -23 53 -23 l50 0 0 95 0 95 -48 3 c-43 3 -49 0 -54 -18 -3 -12 -9 -18 -12 -13 -19 27 -161 48 -161 24 0 -5 -9 -11 -20 -14 -11 -3 -27 -20 -35 -39 l-14 -33 -1 41 c0 31 6 45 25 62 29 26 31 38 8 51 -10 5 -15 12 -11 16 3 4 -10 22 -30 41 -37 34 -67 41 -107 24z m111 -51 c13 -26 13 -29 0 -29 -9 0 -13 6 -10 13 7 19 -20 39 -59 43 -22 3 -27 1 -18 -5 8 -5 21 -7 29 -4 11 5 13 1 7 -18 -7 -23 -7 -24 9 -4 15 19 18 17 20 -15 1 -9 13 -16 29 -18 35 -4 34 -9 -5 -44 l-33 -29 -3 -155 -3 -154 25 0 c23 0 26 -4 26 -32 l0 -33 -80 0 -80 0 0 33 c0 25 4 32 20 32 19 0 20 7 20 154 l0 154 -35 31 c-27 23 -32 32 -21 38 8 4 16 19 18 33 2 16 14 31 36 42 43 21 86 8 108 -33z m213 -136 c16 -16 32 -40 35 -55 6 -26 4 -28 -23 -28 -19 0 -40 10 -55 25 -34 33 -70 22 -74 -24 -4 -33 -1 -35 62 -46 71 -12 109 -74 87 -145 -9 -31 -20 -43 -54 -59 -24 -12 -46 -21 -50 -21 -4 0 -7 18 -7 40 0 33 3 40 20 40 13 0 22 9 26 27 8 32 -10 48 -64 57 -54 8 -95 53 -95 104 0 69 45 111 120 112 33 0 49 -6 72 -27z m126 -53 l0 -80 -37 0 -38 0 0 80 0 80 38 0 37 0 0 -80z m213 -107 l-3 -187 -35 0 c-34 -1 -35 0 -33 37 l3 37 -76 0 -76 0 4 -37 c3 -37 2 -37 -35 -38 l-37 -2 0 74 0 74 108 -2 107 -1 -3 116 -3 116 41 0 40 0 -2 -187z m140 -100 c-67 -67 -79 -75 -93 -63 -14 12 -9 20 47 77 l63 64 -61 58 c-56 54 -60 61 -45 75 14 15 22 10 91 -59 l75 -75 -77 -77z m-538 182 c0 -8 15 -19 33 -24 30 -10 30 -10 -12 -6 -50 5 -62 12 -42 25 11 6 10 9 -5 13 -16 4 -16 5 4 6 13 1 22 -5 22 -14z m493 -65 l39 -42 -49 -49 c-26 -27 -51 -49 -55 -49 -5 0 -8 45 -8 100 0 115 2 116 73 40z"/>
                        <path
                            d="M1310 1585 c-7 -8 -10 -24 -7 -35 3 -11 0 -20 -6 -20 -6 0 -8 -2 -5 -5 3 -4 22 5 41 18 34 23 35 25 18 41 -22 20 -25 20 -41 1z m40 -14 c0 -10 -30 -24 -37 -17 -3 3 -2 9 2 15 8 13 35 15 35 2z"/>
                        <path d="M1356 1535 c-3 -8 -1 -15 4 -15 6 0 10 7 10 15 0 8 -2 15 -4 15 -2 0 -6 -7 -10 -15z"/>
                        <path d="M1418 1523 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
                        <path
                            d="M1305 1499 c4 -6 13 -8 21 -5 8 3 13 0 11 -7 -1 -7 10 -13 26 -15 20 -3 27 1 27 13 0 11 5 15 15 12 8 -4 17 -2 20 3 4 6 -20 10 -60 10 -44 0 -64 -4 -60 -11z"/>
                        <path
                            d="M578 1462 c-15 -15 -30 -42 -34 -59 -4 -18 -10 -30 -15 -27 -5 3 -6 -2 -2 -12 5 -13 2 -15 -16 -9 -26 8 -47 -7 -55 -41 -4 -13 -17 -48 -30 -77 -36 -80 -36 -84 -15 -108 10 -12 19 -19 19 -16 0 3 39 -10 87 -28 80 -32 87 -33 99 -17 30 39 21 49 -79 91 -54 23 -54 23 -15 111 12 27 22 39 25 31 7 -19 41 -51 53 -51 6 0 10 -5 10 -10 0 -6 6 -10 13 -9 36 4 56 -2 51 -16 -4 -9 0 -15 7 -15 8 0 4 -8 -9 -18 -19 -15 -23 -26 -20 -57 2 -32 7 -40 28 -45 32 -8 97 23 105 50 4 11 11 18 16 15 5 -4 9 17 9 47 0 53 -15 88 -48 116 -20 15 -3 36 24 30 13 -3 18 -11 16 -28 -1 -18 1 -21 7 -11 11 17 42 -82 34 -108 -4 -13 -3 -13 5 -2 8 11 11 9 14 -10 2 -13 -3 -29 -10 -35 -19 -14 -25 -106 -9 -125 6 -9 46 -24 87 -34 41 -10 80 -22 87 -27 6 -5 36 -12 66 -15 47 -5 56 -3 65 13 18 36 21 81 8 100 -11 15 -11 20 -1 29 7 5 30 56 52 112 22 57 43 100 48 95 5 -4 5 -2 2 5 -8 13 2 45 12 38 4 -2 8 13 9 35 2 46 -12 58 -64 52 -30 -4 -38 -10 -51 -40 -11 -26 -17 -32 -23 -22 -5 8 -7 17 -4 21 2 4 1 9 -4 11 -4 1 -18 25 -30 51 l-23 48 -47 -3 c-46 -3 -47 -4 -74 -58 -15 -30 -27 -63 -27 -73 -1 -27 -18 -11 -26 23 -8 35 -29 49 -74 48 -18 -1 -36 3 -39 8 -23 33 -73 54 -129 53 -49 0 -62 -4 -85 -27z m160 -8 c22 -15 52 -63 52 -84 0 -19 -64 -11 -78 10 -29 47 -108 9 -82 -40 6 -12 21 -20 36 -20 130 0 171 -167 52 -215 -21 -8 -41 -15 -43 -15 -3 0 -5 18 -5 40 0 33 4 40 19 40 17 0 31 18 31 40 0 16 -31 40 -52 40 -30 0 -87 30 -99 53 -12 22 -14 75 -4 107 16 51 124 79 173 44z m366 -76 c17 -48 34 -89 37 -92 3 -3 15 23 28 57 21 62 23 63 56 63 19 -1 35 -3 35 -6 1 -13 -114 -309 -118 -305 -3 2 -6 33 -7 68 -2 73 -42 167 -98 232 l-34 39 -7 -75 c-13 -123 -14 -127 -63 -182 -29 -32 -34 -35 -40 -20 -3 10 -26 69 -50 131 -23 63 -43 115 -43 116 0 2 17 2 38 1 36 -2 38 -4 57 -64 11 -33 22 -61 25 -61 3 0 21 43 39 96 l35 95 39 -3 40 -3 31 -87z m-387 -38 c9 0 14 -2 11 -5 -3 -3 -18 -2 -34 1 -21 4 -30 12 -31 26 -2 20 -2 20 18 -1 11 -11 27 -21 36 -21z m335 -2 c14 -14 18 -27 14 -46 -5 -20 -4 -23 3 -12 17 25 36 -41 44 -153 3 -41 1 -47 -12 -42 -9 4 -32 9 -51 13 -34 6 -34 6 -10 14 18 5 14 6 -13 2 -20 -3 -43 -1 -50 3 -6 4 -19 8 -27 8 -8 0 -15 7 -15 15 0 8 5 14 11 13 5 -1 18 15 28 35 10 20 22 45 27 54 5 10 9 35 9 55 0 46 12 93 18 74 2 -7 13 -22 24 -33z m-538 -46 c-40 -95 -46 -114 -38 -121 5 -4 39 -21 77 -36 70 -29 72 -31 58 -54 -8 -12 -25 -8 -105 24 -53 21 -96 42 -96 47 0 7 67 175 77 191 2 4 13 2 24 -3 18 -10 18 -13 3 -48z m367 -199 l1 -38 14 32 c20 46 47 35 39 -16 l-5 -36 17 33 c9 17 23 32 30 32 17 0 17 0 -13 -54 -29 -52 -49 -55 -49 -7 0 28 -1 30 -12 14 -7 -9 -13 -20 -13 -25 0 -4 -8 -8 -19 -8 -16 0 -18 7 -17 55 1 64 25 80 27 18z m165 -13 c8 0 14 -7 14 -15 0 -11 -7 -14 -25 -9 -15 4 -25 2 -25 -5 0 -6 9 -11 20 -11 11 0 20 -5 20 -11 0 -5 -8 -9 -18 -7 -11 2 -20 -1 -21 -7 -1 -5 7 -11 18 -13 12 -2 18 -9 15 -17 -4 -10 -13 -11 -36 -4 -17 4 -32 10 -34 12 -2 2 3 25 12 51 12 34 20 46 31 42 8 -3 21 -6 29 -6z m93 -35 c8 -8 10 -18 5 -27 -5 -7 -8 -22 -9 -33 0 -22 -24 -30 -60 -21 -22 6 -23 9 -14 43 17 64 17 65 41 58 13 -4 29 -13 37 -20z"/>
                        <path d="M1030 1326 c0 -9 5 -16 10 -16 6 0 10 4 10 9 0 6 -4 13 -10 16 -5 3 -10 -1 -10 -9z"/>
                        <path d="M1090 1030 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z"/>
                        <path d="M1080 990 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z"/>
                    </g>
                </svg>
            </div>
            <figure>
                <blockquote>
                    <p class="text-gray-800 text-l font-semibold sm:text-l">
                        “As a computer science student and Laravel developer, I embarked on the journey of creating an
                        Authentication System, a project assigned to me by my super cool Information Security
                        teacher, Ergest Alite. With a passion for innovation and a keen eye for security, I've been
                        digging deep into the intricacies of web authentication. This project not only challenged my
                        technical skills but also fueled my commitment to safeguarding digital identities. As the
                        founder of SwishWeb, I approached this endeavor with unwavering dedication, aiming to create a
                        robust system that not only meets industry standards but exceeds them. Through meticulous design
                        and relentless testing, I strive to redefine the paradigm of authentication, ensuring a seamless
                        and secure digital experience for all.“
                    </p>
                </blockquote>
                <div class="mt-6">
                    <img
                        src="https://lh3.googleusercontent.com/a/ACg8ocJ5S87wl0TJ0Ur22rT2T_6SyfZ4czHtsv6d1uB6x4gheAsJ=s360-c-no"
                        class="w-16 h-16 mx-auto rounded-full"/>
                    <div class="mt-3">
                        <span class="block text-gray-800 font-semibold">Aron Bazini</span>
                        <span class="block text-gray-600 text-sm mt-0.5">Founder of SwishWeb</span>
                    </div>
                </div>
            </figure>
        </div>
    </div>
</section>
</body>

    <footer class="pt-10">
        <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
            <div class="space-y-6 sm:max-w-md sm:mx-auto sm:text-center">
                <h2 class="text-2xl font-semibold">Ready to dive in?</h2>
                <p>Register or Login here!</p>
                @if (Route::has('login'))
                    <div class="items-center gap-x-3 space-y-3 sm:flex sm:justify-center sm:space-y-0">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="block py-2 px-4 text-center text-white font-medium bg-indigo-600 duration-150 hover:bg-indigo-500 active:bg-indigo-700 rounded-lg shadow-lg hover:shadow-none">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="block py-2 px-4 text-center text-white font-medium bg-indigo-600 duration-150 hover:bg-indigo-500 active:bg-indigo-700 rounded-lg shadow-lg hover:shadow-none">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="flex items-center justify-center gap-x-2 py-2 px-4 text-gray-700 hover:text-gray-500 font-medium duration-150 active:bg-gray-100 border rounded-lg md:inline-flex">
                                    Register now
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="mt-10 py-10 border-t items-center justify-between sm:flex">
                <p>© 2024 SwishWeb. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

</html>
