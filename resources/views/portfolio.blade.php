<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ $title ?? 'raffael' }}</title>
</head>

<body class="dark:bg-neutral-900 py-4">
    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full before:absolute before:inset-0 before:max-w-[66rem] before:mx-2 before:lg:mx-auto before:rounded-[26px] before:bg-neutral-800/30 before:backdrop-blur-md">
        <nav
            class="relative max-w-[66rem] w-full py-2.5 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="../templates/agency/index.html" aria-label="Preline">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-8">
                </a>
                <!-- End Logo -->

                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-neutral-800 text-white disabled:opacity-50 disabled:pointer-events-none"
                        id="hs-navbar-floating-dark-collapse" aria-expanded="false"
                        aria-controls="hs-navbar-floating-dark" aria-label="Toggle navigation"
                        data-hs-collapse="#hs-navbar-floating-dark">
                        <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Collapse -->
            <div id="hs-navbar-floating-dark"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-navbar-floating-dark-collapse">
                <div class="flex flex-col md:flex-row md:items-center md:justify-end py-2 md:py-0 md:ps-7">
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300"
                        href="../templates/agency/index.html" aria-current="page">. Home (  )</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300"
                        href="#">. About ( )</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300"
                        href="#">. Project ( )</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-white hover:text-neutral-300 focus:outline-none focus:text-neutral-300"
                        href="#">. Contact ( )</a>

                    <div>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#7ed957] font-medium text-sm text-gray-600 rounded-full focus:outline-none md:w-full">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none md:w-full">
                                    Log in
                                </a>
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- Hero -->
    <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2"
        id="home">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
            <!-- Announcement Banner -->
            <div class="flex justify-center">
                <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 focus:outline-none focus:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:hover:border-neutral-600 dark:focus:border-neutral-600"
                    href="#">
                    Download CV
                    <span
                        class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-neutral-700 dark:text-neutral-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-file-user">
                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                            <path d="M15 18a3 3 0 1 0-6 0" />
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z" />
                            <circle cx="12" cy="13" r="2" />
                        </svg>
                    </span>
                </a>
            </div>
            <!-- End Announcement Banner -->

            <!-- Title -->
            <div class="mt-5 max-w-2xl text-center mx-auto">
                <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                    Let's Build
                    <span
                        class="font-bold text-4xl md:text-5xl lg:text-6xl text-gray-800 dark:text-[#7ed957]"">Together</span>
                </h1>
            </div>
            <!-- End Title -->

            <div class="mt-5 max-w-3xl text-center mx-auto">
                <p class="text-lg text-gray-600 dark:text-neutral-400">I'm thrilled to have you here! Dive into my world
                    of creativity and innovation, where you'll discover a collection of projects that showcase my skills
                    in web development.
                    Let's embark on this exciting journey together!</p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 gap-3 flex justify-center">
                <a class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-semibold min-w-24 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    href="#">
                    Project
                </a>
                <a class="text-white font-semibold bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 min-w-24 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    href="#">
                    Contact Me
                </a>
            </div>
            <!-- End Buttons -->

            <div class="mt-5 flex justify-center items-center gap-x-1 sm:gap-x-3">
                <span class="text-sm text-gray-600 dark:text-neutral-400">For inquiries, contact me at:</span>
                <a href="mailto:raffaelaldrichsetiawan@gmail.com"
                    class="text-sm font-bold text-blue-600 dark:text-blue-500 hover:underline">
                    raffaelaldrichsetiawan@gmail.com
                </a>
            </div>

        </div>
    </div>
    <!-- End Hero -->

    <!-- About -->
    <div class="max-w-[65rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto mt-32 " id="about">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-8 xl:gap-16 ">
            <div>
                <img class="rounded-xl" src="{{ asset('images/profil.jpg') }}" alt="Features Image">
            </div>
            <!-- End Col -->

            <div class="mt-5 sm:mt-10 lg:mt-0">
                <div class="space-y-6 sm:space-y-8">
                    <!-- Title -->
                    <div class="space-y-2 md:space-y-4">
                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-[#7ed957]">
                            Hello,
                        </h2>
                        <p class="text-gray-500 dark:text-neutral-500">
                            I’m <span class="text-gray-300"> Raffael Aldrich Setiawan</span>, a diploma student
                            majoring in Information
                            Technology
                            at
                            Universitas
                            Sebelas Maret. I specialize in front-end and back-end web development, as well as graphic
                            design,
                            with over 3 years of experience in these fields. My passion lies in creating intuitive and
                            visually
                            captivating web designs that offer seamless user experiences.
                        </p>
                        <p class="text-gray-500 dark:text-neutral-500">
                            I’m always open to collaboration, and I’m excited to bring fresh ideas and creativity to
                            every project I work on.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- List -->
                    <ul class="space-y-2 sm:space-y-4">
                        <li class="flex gap-x-3">
                            <span
                                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-gray-600 dark:bg-gray-800/30 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect width="4" height="12" x="2" y="9" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                            </span>
                            <a class="grow" href="https://www.linkedin.com/in/raffael-aldrich-setiawan-3aa10a2a4/">
                                <span class="text-sm sm:text-base text-gray-400 dark:text-neutral-400 font-bold">
                                    Raffael Aldrich Setiawan
                                </span>
                            </a>
                        </li>
                        <li class="flex gap-x-3">
                            <span
                                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-gray-600 dark:bg-gray-800/30 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                                    <path d="M9 18c-4.51 2-5-2-7-2" />
                                </svg>
                            </span>
                            <a class="grow" href="https://github.com/RaffaelAldrichS">
                                <span class="text-sm sm:text-base text-gray-400 dark:text-neutral-400 font-bold">
                                    RaffaelAldrichS
                                </span>
                            </a>
                        </li>
                        <li class="flex gap-x-3">
                            <span
                                class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-gray-600 dark:bg-gray-800/30 dark:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </span>
                            <a class="grow" href="wa.me/+6281227772844">
                                <span class="text-sm sm:text-base text-gray-400 dark:text-neutral-400 font-bold">
                                    0812-2777-2844
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End About -->

    <!-- Clients -->
    <div class="max-w-[65rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6">
            <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800 dark:text-neutral-200">Here’s a
                Glimpse of the Skills I Bring to the Table</h2>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="my-4 md:my-8 grid grid-cols-3 sm:flex sm:justify-center gap-6 sm:gap-x-12 lg:gap-x-20">
            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="55" viewBox="0 0 48 55"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M48 27.3522C48 24.1724 44.0179 21.159 37.9128 19.2902C39.3216 13.0677 38.6955 8.11699 35.9364 6.53199C35.3004 6.1602 34.5569 5.98409 33.7448 5.98409V8.16591C34.1949 8.16591 34.5569 8.25396 34.8602 8.42029C36.1908 9.18344 36.768 12.0893 36.318 15.8267C36.2104 16.7464 36.0342 17.715 35.819 18.7032C33.9013 18.2336 31.8076 17.8716 29.6062 17.6368C28.2854 15.8267 26.9156 14.183 25.5361 12.7448C28.7256 9.78026 31.7195 8.15612 33.7546 8.15612V5.9743C31.064 5.9743 27.5418 7.89196 23.9804 11.2185C20.4191 7.91152 16.8969 6.01344 14.2063 6.01344V8.19526C16.2316 8.19526 19.2352 9.80961 22.4248 12.7546C21.055 14.1928 19.6853 15.8267 18.384 17.6368C16.1729 17.8716 14.0791 18.2336 12.1614 18.713C11.9364 17.7346 11.7701 16.7856 11.6527 15.8756C11.1928 12.1382 11.7603 9.23236 13.0811 8.45942C13.3746 8.28331 13.7562 8.20504 14.2063 8.20504V6.02322C13.3844 6.02322 12.6408 6.19933 11.9951 6.57112C9.24582 8.15612 8.62943 13.097 10.0481 19.3C3.96249 21.1785 0 24.1822 0 27.3522C0 30.532 3.98206 33.5454 10.0872 35.4142C8.67835 41.6368 9.30453 46.5874 12.0636 48.1724C12.6996 48.5442 13.4431 48.7203 14.265 48.7203C16.9556 48.7203 20.4778 46.8027 24.0391 43.4761C27.6005 46.7831 31.1227 48.6812 33.8133 48.6812C34.6351 48.6812 35.3787 48.5051 36.0245 48.1333C38.7737 46.5483 39.3901 41.6074 37.9715 35.4044C44.0375 33.5357 48 30.5222 48 27.3522V27.3522ZM35.2613 20.8263C34.8993 22.0884 34.4492 23.3897 33.9405 24.691C33.5393 23.9083 33.1186 23.1255 32.6588 22.3428C32.2087 21.5601 31.7293 20.797 31.2499 20.0534C32.6392 20.2589 33.9796 20.5132 35.2613 20.8263ZM30.7803 31.2462C30.0171 32.567 29.2344 33.8194 28.4223 34.9837C26.9645 35.1109 25.4872 35.1794 24 35.1794C22.5226 35.1794 21.0453 35.1109 19.5972 34.9935C18.7852 33.8292 17.9927 32.5866 17.2295 31.2756C16.4859 29.9939 15.8108 28.6926 15.1945 27.3816C15.8011 26.0705 16.4859 24.7595 17.2197 23.4778C17.9829 22.1569 18.7656 20.9046 19.5777 19.7403C21.0355 19.6131 22.5128 19.5446 24 19.5446C25.4774 19.5446 26.9547 19.6131 28.4028 19.7305C29.2148 20.8948 30.0073 22.1374 30.7705 23.4484C31.5141 24.7301 32.1892 26.0314 32.8055 27.3424C32.1892 28.6535 31.5141 29.9645 30.7803 31.2462ZM33.9405 29.9743C34.4688 31.2854 34.9189 32.5964 35.2907 33.8683C34.009 34.1814 32.6588 34.4456 31.2597 34.651C31.7391 33.8977 32.2185 33.1247 32.6686 32.3322C33.1186 31.5495 33.5393 30.757 33.9405 29.9743ZM24.0196 40.4138C23.1097 39.4745 22.1998 38.4276 21.2996 37.2829C22.1802 37.322 23.0803 37.3514 23.9902 37.3514C24.9099 37.3514 25.8198 37.3318 26.7102 37.2829C25.8296 38.4276 24.9197 39.4745 24.0196 40.4138ZM16.7403 34.651C15.351 34.4456 14.0106 34.1912 12.7289 33.8781C13.0909 32.616 13.541 31.3147 14.0497 30.0134C14.4509 30.7962 14.8716 31.5789 15.3314 32.3616C15.7913 33.1443 16.2609 33.9074 16.7403 34.651ZM23.9707 14.2907C24.8806 15.2299 25.7905 16.2768 26.6906 17.4215C25.81 17.3824 24.9099 17.353 24 17.353C23.0803 17.353 22.1704 17.3726 21.2801 17.4215C22.1606 16.2768 23.0705 15.2299 23.9707 14.2907ZM16.7305 20.0534C16.2511 20.8068 15.7717 21.5797 15.3216 22.3722C14.8716 23.1549 14.4509 23.9376 14.0497 24.7203C13.5214 23.4093 13.0713 22.0982 12.6996 20.8263C13.9812 20.523 15.3314 20.2589 16.7305 20.0534V20.0534ZM7.87607 32.3029C4.41256 30.8255 2.17203 28.8883 2.17203 27.3522C2.17203 25.8161 4.41256 23.8691 7.87607 22.4015C8.71749 22.0395 9.63718 21.7167 10.5862 21.4134C11.1439 23.331 11.8777 25.3269 12.7876 27.3718C11.8875 29.4068 11.1635 31.393 10.6156 33.3008C9.64696 32.9975 8.72727 32.6649 7.87607 32.3029ZM13.1398 46.2841C11.8092 45.521 11.232 42.6152 11.682 38.8777C11.7896 37.958 11.9658 36.9894 12.181 36.0012C14.0987 36.4708 16.1924 36.8328 18.3938 37.0677C19.7146 38.8777 21.0844 40.5214 22.4639 41.9596C19.2744 44.9242 16.2805 46.5483 14.2454 46.5483C13.8051 46.5385 13.4333 46.4505 13.1398 46.2841V46.2841ZM36.3473 38.8288C36.8072 42.5662 36.2397 45.4721 34.9189 46.245C34.6254 46.4211 34.2438 46.4994 33.7937 46.4994C31.7684 46.4994 28.7648 44.885 25.5752 41.9401C26.945 40.5018 28.3147 38.8679 29.616 37.0579C31.8272 36.8231 33.9209 36.4611 35.8386 35.9816C36.0636 36.9698 36.2397 37.9189 36.3473 38.8288V38.8288ZM40.1141 32.3029C39.2727 32.6649 38.353 32.9878 37.404 33.2911C36.8463 31.3734 36.1125 29.3775 35.2026 27.3326C36.1027 25.2976 36.8267 23.3114 37.3746 21.4036C38.3433 21.7069 39.2629 22.0395 40.1239 22.4015C43.5874 23.8789 45.828 25.8161 45.828 27.3522C45.8182 28.8883 43.5777 30.8353 40.1141 32.3029V32.3029Z"
                        fill="#61DAFB" />
                    <path
                        d="M23.9898 31.8234C26.4592 31.8234 28.4611 29.8216 28.4611 27.3522C28.4611 24.8828 26.4592 22.8809 23.9898 22.8809C21.5204 22.8809 19.5186 24.8828 19.5186 27.3522C19.5186 29.8216 21.5204 31.8234 23.9898 31.8234Z"
                        fill="#61DAFB" />
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="42" viewBox="0 0 48 42"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1306_13)">
                        <path d="M38.3964 0H47.9955L23.9977 41.3961L0 0H18.3583L23.9977 9.5991L29.5172 0H38.3964Z"
                            fill="#41B883" />
                        <path d="M0 0L23.9977 41.3961L47.9955 0H38.3964L23.9977 24.8377L9.47911 0H0Z" fill="#41B883" />
                        <path d="M9.479 0L23.9976 24.9576L38.3963 0H29.5171L23.9976 9.5991L18.3582 0H9.479Z"
                            fill="#35495E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1306_13">
                            <rect width="48" height="41.4336" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="51" viewBox="0 0 48 51"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1314_2)">
                        <path
                            d="M0.0193481 8.53515L23.6078 0.130676L47.8314 8.38572L43.9092 39.5943L23.6078 50.8377L3.62395 39.7437L0.0193481 8.53515Z"
                            fill="#E23237" />
                        <path d="M47.8314 8.38572L23.6078 0.130676V50.8377L43.9092 39.6131L47.8314 8.38572V8.38572Z"
                            fill="#B52E31" />
                        <path
                            d="M23.6451 6.05121L8.94678 38.754L14.4376 38.6606L17.3886 31.2832H30.5742L33.8053 38.754L39.0533 38.8473L23.6451 6.05121ZM23.6826 16.5288L28.6505 26.9129H19.3121L23.6826 16.5288Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1314_2">
                            <rect width="48" height="50.9987" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.7298 40.1472C14.695 40.0857 14.6639 40.0221 14.6368 39.9568C14.4497 39.5235 14.3922 39.0453 14.4713 38.58H3.39139L19.8574 9.60244L25.2634 19.1057L26.8305 16.3324L22.1181 8.0309C21.8923 7.60574 21.5635 7.24396 21.1618 6.97863C20.7601 6.71331 20.2983 6.5529 19.8186 6.51208C19.3399 6.53384 18.877 6.68951 18.4824 6.96138C18.0878 7.23325 17.7774 7.6104 17.5865 8.04994L0.905195 37.3791C0.655848 37.7931 0.512082 38.2622 0.486543 38.7448C0.461003 39.2275 0.554474 39.7091 0.758732 40.1472C1.01527 40.5518 1.3799 40.8765 1.81137 41.0846C2.24285 41.2927 2.72396 41.3759 3.20026 41.3248H17.1721C16.6957 41.3766 16.2143 41.2938 15.7827 41.0856C15.351 40.8774 14.9865 40.5523 14.7305 40.1472H14.7298Z"
                        fill="#00C492" />
                    <path
                        d="M46.852 37.3783L33.1438 13.2318C32.919 12.8021 32.5895 12.436 32.1858 12.1672C31.7821 11.8984 31.3173 11.7357 30.8341 11.6939C30.356 11.7146 29.8934 11.8693 29.499 12.1403C29.1046 12.4114 28.7943 12.7878 28.6035 13.2266L26.8306 16.3316L28.408 19.1056L30.8488 14.7843L44.4105 38.5793H39.2535C39.3194 38.9726 39.2823 39.3763 39.1459 39.751C39.1171 39.8338 39.0811 39.914 39.0382 39.9905L38.9943 40.0783C38.7141 40.474 38.3408 40.7946 37.9073 41.0118C37.4738 41.2289 36.9935 41.3359 36.5088 41.3233H44.576C45.0607 41.3363 45.5412 41.2295 45.9747 41.0123C46.4083 40.7951 46.7816 40.4743 47.0614 40.0783C47.2824 39.6537 47.3798 39.1756 47.3428 38.6984C47.3058 38.2211 47.1358 37.7638 46.852 37.3783V37.3783Z"
                        fill="#008776" />
                    <path
                        d="M38.9949 40.0791L39.0389 39.9912C39.0815 39.9147 39.1173 39.8346 39.1458 39.7517C39.2823 39.377 39.3193 38.9734 39.2534 38.5801C39.1773 38.1559 39.025 37.749 38.8038 37.3791L28.4181 19.1057L26.8312 16.3324L25.2538 19.1057L14.8718 37.3791C14.6703 37.7534 14.5348 38.1597 14.4713 38.5801C14.3877 39.0442 14.4403 39.5226 14.6228 39.9575C14.6499 40.0228 14.681 40.0864 14.7159 40.1479C14.9725 40.5524 15.3372 40.8769 15.7686 41.0849C16.2001 41.2928 16.6811 41.3759 17.1574 41.3248H36.4941C36.9811 41.3392 37.4641 41.2331 37.9003 41.0159C38.3364 40.7987 38.7122 40.4772 38.9942 40.0798L38.9949 40.0791ZM26.8305 21.8797L36.3235 38.5793H17.3419L26.8305 21.8797Z"
                        fill="#2D4A5D" />
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="48" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.4295 0.0375632C22.3263 0.0469373 21.9982 0.0797466 21.703 0.103182C14.8927 0.717184 8.51362 4.39183 4.47339 10.0397C2.22361 13.18 0.784692 16.7422 0.240995 20.5153C0.0488258 21.8323 0.0253906 22.2213 0.0253906 24.0071C0.0253906 25.7929 0.0488258 26.1819 0.240995 27.4989C1.54399 36.5028 7.95118 44.0676 16.641 46.8705C18.1971 47.372 19.8375 47.7142 21.703 47.9204C22.4295 48.0001 25.5698 48.0001 26.2963 47.9204C29.5163 47.5642 32.2441 46.7674 34.9345 45.3941C35.3469 45.1832 35.4266 45.1269 35.3704 45.08C35.3329 45.0519 33.5752 42.6943 31.4661 39.8446L27.6321 34.6654L22.8279 27.5552C20.1844 23.6462 18.0096 20.4496 17.9908 20.4496C17.9721 20.4449 17.9533 23.604 17.944 27.4615C17.9299 34.2155 17.9252 34.4873 17.8408 34.6467C17.719 34.8764 17.6252 34.9701 17.4284 35.0732C17.2784 35.1482 17.1472 35.1623 16.4394 35.1623H15.6286L15.413 35.0263C15.2723 34.9373 15.1692 34.8201 15.0989 34.6842L15.0005 34.4733L15.0099 25.0757L15.0239 15.6735L15.1692 15.4907C15.2442 15.3923 15.4036 15.2658 15.5161 15.2048C15.7082 15.1111 15.7832 15.1017 16.5941 15.1017C17.5502 15.1017 17.7096 15.1392 17.958 15.4111C18.0283 15.4861 20.6296 19.4044 23.7418 24.1243C26.854 28.8441 31.1099 35.2888 33.2003 38.4526L36.9968 44.2036L37.189 44.077C38.8903 42.9709 40.6902 41.396 42.115 39.7556C45.1475 36.2731 47.102 32.0266 47.7582 27.4989C47.9504 26.1819 47.9738 25.7929 47.9738 24.0071C47.9738 22.2213 47.9504 21.8323 47.7582 20.5153C46.4552 11.5114 40.048 3.94656 31.3583 1.14371C29.8256 0.646879 28.1945 0.304725 26.3666 0.0984947C25.9166 0.0516243 22.8185 6.68575e-05 22.4295 0.0375632V0.0375632ZM32.2441 14.5393C32.4691 14.6518 32.6519 14.8674 32.7175 15.0923C32.755 15.2142 32.7644 17.8202 32.755 23.6931L32.7409 32.1204L31.2552 29.8425L29.7647 27.5646V21.4386C29.7647 17.478 29.7834 15.2517 29.8115 15.1439C29.8865 14.8814 30.0506 14.6752 30.2756 14.5533C30.4677 14.4549 30.538 14.4455 31.2739 14.4455C31.9676 14.4455 32.0894 14.4549 32.2441 14.5393V14.5393Z"
                        fill="currentColor" class="fill-black dark:fill-white" />
                    <path
                        d="M36.7627 44.3067C36.5986 44.4098 36.5471 44.4801 36.6924 44.4004C36.7955 44.3395 36.9642 44.2129 36.9361 44.2083C36.922 44.2083 36.8423 44.2551 36.7627 44.3067ZM36.4393 44.5176C36.3549 44.5832 36.3549 44.5879 36.458 44.5363C36.5142 44.5082 36.5611 44.4754 36.5611 44.466C36.5611 44.4285 36.5377 44.4379 36.4393 44.5176ZM36.2049 44.6582C36.1205 44.7238 36.1205 44.7285 36.2237 44.677C36.2799 44.6488 36.3268 44.616 36.3268 44.6067C36.3268 44.5692 36.3033 44.5785 36.2049 44.6582ZM35.9706 44.7988C35.8862 44.8644 35.8862 44.8691 35.9893 44.8176C36.0455 44.7894 36.0924 44.7566 36.0924 44.7473C36.0924 44.7098 36.069 44.7191 35.9706 44.7988ZM35.6143 44.9863C35.4362 45.08 35.4456 45.1175 35.6237 45.0285C35.7034 44.9863 35.7643 44.9441 35.7643 44.9347C35.7643 44.9019 35.7596 44.9066 35.6143 44.9863Z"
                        fill="currentColor" class="fill-black dark:fill-white" />
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="50" viewBox="0 0 48 50"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1314_6)">
                        <path
                            d="M47.8876 11.3229C47.9054 11.3887 47.9145 11.4565 47.9146 11.5246V22.1123C47.9146 22.2481 47.8788 22.3816 47.8107 22.4992C47.7425 22.6168 47.6446 22.7143 47.5267 22.7819L38.6403 27.8982V38.0391C38.6403 38.3151 38.4936 38.5698 38.2543 38.7088L19.7047 49.3871C19.6622 49.4113 19.6159 49.4267 19.5696 49.4431C19.5522 49.4489 19.5358 49.4595 19.5175 49.4643C19.3878 49.4985 19.2515 49.4985 19.1219 49.4643C19.1006 49.4585 19.0813 49.447 19.0611 49.4392C19.0186 49.4238 18.9742 49.4103 18.9337 49.3871L0.387918 38.7088C0.270102 38.6411 0.172209 38.5436 0.104105 38.426C0.0360015 38.3084 9.33506e-05 38.175 0 38.0391L0 6.27612C0 6.20664 0.00964971 6.1391 0.0270192 6.07348C0.032809 6.05128 0.0463186 6.03102 0.0540383 6.00883C0.0685129 5.9683 0.0820225 5.9268 0.103252 5.88917C0.117726 5.86408 0.138956 5.84382 0.156325 5.82066C0.17852 5.78978 0.198784 5.75793 0.224838 5.73091C0.247032 5.70872 0.275982 5.69232 0.301071 5.67302C0.329055 5.64986 0.354144 5.62477 0.385988 5.60643H0.386953L9.66032 0.267251C9.77774 0.199684 9.91084 0.164124 10.0463 0.164124C10.1818 0.164124 10.3149 0.199684 10.4323 0.267251L19.7057 5.60643H19.7076C19.7385 5.62573 19.7645 5.64986 19.7925 5.67205C19.8176 5.69135 19.8456 5.70872 19.8678 5.72995C19.8948 5.75793 19.9141 5.78978 19.9373 5.82066C19.9537 5.84382 19.9759 5.86408 19.9894 5.88917C20.0116 5.92777 20.0241 5.9683 20.0395 6.00883C20.0473 6.03102 20.0608 6.05128 20.0666 6.07444C20.0843 6.1402 20.0934 6.20801 20.0936 6.27612V26.1149L27.8211 21.6655V11.5236C27.8211 11.4561 27.8307 11.3876 27.8481 11.3229C27.8548 11.2998 27.8674 11.2795 27.8751 11.2573C27.8905 11.2168 27.904 11.1753 27.9253 11.1376C27.9398 11.1126 27.961 11.0923 27.9774 11.0691C28.0005 11.0383 28.0198 11.0064 28.0469 10.9794C28.0691 10.9572 28.097 10.9408 28.1221 10.9215C28.1511 10.8983 28.1762 10.8732 28.207 10.8549H28.208L37.4823 5.51573C37.5997 5.44806 37.7328 5.41245 37.8683 5.41245C38.0038 5.41245 38.1369 5.44806 38.2543 5.51573L47.5277 10.8549C47.5605 10.8742 47.5856 10.8983 47.6145 10.9205C47.6387 10.9398 47.6666 10.9572 47.6888 10.9784C47.7159 11.0064 47.7352 11.0383 47.7583 11.0691C47.7757 11.0923 47.7969 11.1126 47.8104 11.1376C47.8326 11.1753 47.8452 11.2168 47.8606 11.2573C47.8693 11.2795 47.8818 11.2998 47.8876 11.3229V11.3229ZM46.3688 21.6655V12.8611L43.1236 14.7293L38.6403 17.3106V26.1149L46.3697 21.6655H46.3688ZM37.0954 37.5923V28.7821L32.6855 31.3007L20.0926 38.4878V47.381L37.0954 37.5923ZM1.54588 7.61261V37.5923L18.5467 47.38V38.4888L9.66514 33.4622L9.66225 33.4603L9.65839 33.4584C9.62847 33.441 9.60339 33.4159 9.5754 33.3947C9.55128 33.3754 9.52329 33.3599 9.50206 33.3387L9.50013 33.3358C9.47504 33.3117 9.45767 33.2818 9.43645 33.2548C9.41715 33.2287 9.39399 33.2065 9.37855 33.1795L9.37758 33.1766C9.36021 33.1477 9.3496 33.1129 9.33705 33.0801C9.32451 33.0512 9.3081 33.0241 9.30038 32.9933V32.9923C9.29073 32.9556 9.2888 32.917 9.28494 32.8794C9.28108 32.8504 9.27336 32.8215 9.27336 32.7925V12.0621L4.79108 9.47982L1.54588 7.61357V7.61261ZM10.0473 1.82857L2.32075 6.27612L10.0453 10.7237L17.7709 6.27516L10.0453 1.82857H10.0473ZM14.0654 29.585L18.5477 27.0047V7.61261L15.3025 9.48079L10.8192 12.0621V31.4541L14.0654 29.585ZM37.8683 7.07705L30.1428 11.5246L37.8683 15.9721L45.5929 11.5236L37.8683 7.07705ZM37.0954 17.3106L32.6121 14.7293L29.3669 12.8611V21.6655L33.8492 24.2458L37.0954 26.1149V17.3106ZM19.3187 37.1513L30.6504 30.6822L36.3147 27.4495L28.595 23.0048L19.7066 28.1221L11.6057 32.7858L19.3187 37.1513Z"
                            fill="#FF2D20" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1314_6">
                            <rect width="48" height="49.6278" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" width="48" height="50" viewBox="0 0 1280 1280"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M815.039 94.6439C824.758 106.709 829.714 122.99 839.626 155.553L1056.17 866.901C976.107 825.368 889.072 795.413 797.281 779.252L656.29 302.798C653.983 295.002 646.822 289.654 638.693 289.654C630.542 289.654 623.368 295.03 621.08 302.853L481.795 779.011C389.579 795.1 302.146 825.109 221.741 866.793L439.347 155.388L439.348 155.388C449.291 122.882 454.262 106.629 463.982 94.5853C472.562 83.9531 483.723 75.6958 496.4 70.6002C510.76 64.8284 527.756 64.8284 561.749 64.8284H717.174C751.212 64.8284 768.23 64.8284 782.603 70.6123C795.292 75.7184 806.459 83.9923 815.039 94.6439Z"
                        fill="url(#paint0_linear_709_11012gh4)" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M840.951 900.754C805.253 931.279 734.002 952.097 651.929 952.097C551.197 952.097 466.767 920.737 444.363 878.561C436.354 902.732 434.558 930.396 434.558 948.068C434.558 948.068 429.281 1034.84 489.636 1095.2C489.636 1063.86 515.042 1038.46 546.381 1038.46C600.097 1038.46 600.036 1085.32 599.987 1123.34C599.986 1124.48 599.984 1125.61 599.984 1126.73C599.984 1184.44 635.255 1233.91 685.416 1254.77C677.924 1239.36 673.721 1222.05 673.721 1203.77C673.721 1148.73 706.034 1128.23 743.588 1104.41L743.588 1104.41C773.469 1085.46 806.668 1064.41 829.548 1022.17C841.486 1000.13 848.265 974.893 848.265 948.068C848.265 931.573 845.702 915.676 840.951 900.754Z"
                        fill="#FF5D01" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M840.951 900.754C805.253 931.279 734.002 952.097 651.929 952.097C551.197 952.097 466.767 920.737 444.363 878.561C436.354 902.732 434.558 930.396 434.558 948.068C434.558 948.068 429.281 1034.84 489.636 1095.2C489.636 1063.86 515.042 1038.46 546.381 1038.46C600.097 1038.46 600.036 1085.32 599.987 1123.34C599.986 1124.48 599.984 1125.61 599.984 1126.73C599.984 1184.44 635.255 1233.91 685.416 1254.77C677.924 1239.36 673.721 1222.05 673.721 1203.77C673.721 1148.73 706.034 1128.23 743.588 1104.41L743.588 1104.41C773.469 1085.46 806.668 1064.41 829.548 1022.17C841.486 1000.13 848.265 974.893 848.265 948.068C848.265 931.573 845.702 915.676 840.951 900.754Z"
                        fill="url(#paint1_linear_709_1103afaw)" />
                    <defs>
                        <linearGradient id="paint0_linear_709_11012gh4" x1="882.997" y1="27.1132" x2="638.955"
                            y2="866.902" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#000014" />
                            <stop offset="1" stop-color="#150426" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_709_1103afaw" x1="1001.68" y1="652.45" x2="790.326"
                            y2="1094.91" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#FF1639" />
                            <stop offset="1" stop-color="#FF1639" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>

            <a class="shrink-0 transition hover:-translate-y-1" href="#">
                <svg class="size-6 md:size-10 mx-auto sm:mx-0" fill="none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 70 70">
                    <mask id="a" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                        width="70" height="70">
                        <path d="M62 0H8a8 8 0 0 0-8 8v54a8 8 0 0 0 8 8h54a8 8 0 0 0 8-8V8a8 8 0 0 0-8-8Z"
                            fill="#fff" />
                    </mask>
                    <g mask="url(#a)">
                        <path
                            d="M69.8 70H.1V8a8 8 0 0 1 8-8h54a8 8 0 0 1 8 8v61.8l-.3.2Zm-12-24.2-.4-.4c-1.3-1.3-3-1.6-4.7-1.4-1.5 0-2.8.8-4 1.8l-.2-.1c0-.6-.2-1-.7-1.2-.4-.2-.9-.2-1.3 0-.5.4-.6.8-.6 1.3v12.8c0 .7.3 1.2.8 1.4 1 .2 1.8-.4 1.8-1.3v-8.3c0-.8.2-1.5.7-2.1 1.2-1.4 2.7-2 4.5-1.8.8.1 1.6.5 2 1.3.5.7.7 1.5.7 2.3v8.7c0 1 1 1.5 1.9 1 .5-.2.7-.7.7-1.3V49a6.3 6.3 0 0 0-1.2-3.1Zm-16.3-1.3c-.3-.1-.6-.2-1-.1-.6.2-1 .7-1 1.4V55a3 3 0 0 1-2 2.4 5 5 0 0 1-3.2.1 3 3 0 0 1-1.8-1.5c-.3-.5-.5-1-.5-1.7v-8.5c0-.8-.5-1.4-1.2-1.4-.9 0-1.5.5-1.5 1.4v8c0 1 .1 2 .5 2.9.7 1.7 2 2.7 3.7 3.3a8.4 8.4 0 0 0 5.9-.6c1.8-1 2.7-2.7 2.8-4.7v-9c0-.6-.3-1-.7-1.2Z"
                            fill="#EFDA4F" />
                        <path
                            d="M57.8 45.8c.7 1 1 2 1.1 3.1l.1 1.9v7.7c0 .6-.2 1-.7 1.4-.9.4-1.9-.2-2-1.1V50c0-.8-.1-1.6-.6-2.3a2.7 2.7 0 0 0-2-1.3c-1.8-.2-3.3.4-4.5 1.8-.5.6-.7 1.3-.7 2v8.4c0 1-.8 1.5-1.8 1.3-.5-.2-.8-.7-.8-1.4V46c0-.6.1-1 .6-1.3.4-.3.9-.3 1.3-.1a1.3 1.3 0 0 1 .7 1.2c0 .1.2.2.2 0 1.2-1 2.5-1.6 4-1.7 1.8-.2 3.4 0 4.7 1.4l.4.4ZM40.5 44.4l1 .1c.5.2.7.7.7 1.2v9c-.1 2-1 3.6-2.8 4.7a8.4 8.4 0 0 1-5.8.6c-1.8-.6-3.1-1.6-3.8-3.3-.4-1-.5-1.9-.5-2.8v-8.1c0-1 .6-1.5 1.5-1.4.7 0 1.2.6 1.2 1.4v8.5c0 .6.2 1.2.5 1.7a3 3 0 0 0 1.8 1.5 5 5 0 0 0 3.3-.1 3 3 0 0 0 1.9-2.4V45.8c0-.7.4-1.2 1-1.4Z"
                            fill="#000" />
                    </g>
                </svg>
            </a>
        </div>
        <!-- End Grid -->

    </div>
    <!-- End Clients -->

    <!-- Services -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="relative p-6 md:p-16">
            <!-- Grid -->
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                    <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200">
                        Transforming <span
                            class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-[#7ed957]">Ideas</span>
                        into Stunning Digital <span
                            class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-[#7ed957]">Experiences</span>
                    </h2>

                    <!-- Tab Navs -->
                    <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist"
                        aria-orientation="vertical">
                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 active"
                            id="tabs-with-card-item-1" aria-selected="true" data-hs-tab="#tabs-with-card-1"
                            aria-controls="tabs-with-card-1" role="tab">
                            <span class="flex gap-x-6">
                                <svg class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z" />
                                    <path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z" />
                                    <path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z" />
                                    <path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z" />
                                    <path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z" />
                                </svg>
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Web
                                        Design</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Beautiful
                                        and elegant designs with interfaces that are intuitive, efficient and pleasant
                                        to use for the user.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2"
                            aria-controls="tabs-with-card-2" role="tab">
                            <span class="flex gap-x-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">
                                    <rect width="18" height="7" x="3" y="3" rx="1" />
                                    <rect width="9" height="7" x="3" y="14" rx="1" />
                                    <rect width="5" height="7" x="16" y="14" rx="1" />
                                </svg>
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Web
                                        Development</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Custom
                                        web development tailored to your specifications, designed to provide a flawless
                                        user experience.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button"
                            class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            id="tabs-with-card-item-3" aria-selected="false" data-hs-tab="#tabs-with-card-3"
                            aria-controls="tabs-with-card-3" role="tab">
                            <span class="flex gap-x-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">
                                    <path
                                        d="M15.707 21.293a1 1 0 0 1-1.414 0l-1.586-1.586a1 1 0 0 1 0-1.414l5.586-5.586a1 1 0 0 1 1.414 0l1.586 1.586a1 1 0 0 1 0 1.414z" />
                                    <path
                                        d="m18 13-1.375-6.874a1 1 0 0 0-.746-.776L3.235 2.028a1 1 0 0 0-1.207 1.207L5.35 15.879a1 1 0 0 0 .776.746L13 18" />
                                    <path d="m2.3 2.3 7.286 7.286" />
                                    <circle cx="11" cy="11" r="2" />
                                </svg>
                                <span class="grow">
                                    <span
                                        class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Graphic
                                        Design</span>
                                    <span
                                        class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Stunning
                                        visual designs that captivate and communicate your brand's message
                                        clearly.</span>
                                </span>
                            </span>
                        </button>
                    </nav>
                    <!-- End Tab Navs -->
                </div>
                <!-- End Col -->

                <div class="lg:col-span-6">
                    <div class="relative">
                        <!-- Tab Content -->
                        <div>
                            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://w0.peakpx.com/wallpaper/11/559/HD-wallpaper-poster-design-poster-anime-red-background-anime-boys.jpg"
                                    alt="Features Image">
                            </div>

                            <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-2">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://www.andersondesigngroupstore.com/cdn/shop/articles/CHEER_I_Need_Glasses_RGB_1024x1024.jpg?v=1581803476"
                                    alt="Features Image">
                            </div>

                            <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                aria-labelledby="tabs-with-card-item-3">
                                <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                    src="https://webneel.com/daily/sites/default/files/images/daily/07-2019/1-poster-design-portrait-illustration-bladerunner-tracie-ching.jpg"
                                    alt="Features Image">
                            </div>
                        </div>
                        <!-- End Tab Content -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                            <svg class="w-16 h-auto text-orange-500" width="121" height="135"
                                viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                    stroke-width="10" stroke-linecap="round" />
                                <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                    stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                    stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <!-- Background Color -->
            <div class="absolute inset-0 grid grid-cols-12 size-full">
                <div
                    class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800">
                </div>
            </div>
            <!-- End Background Color -->
        </div>
    </div>
    <!-- End Services -->

    <!-- Projects -->
    <div class="max-w-[65rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" id="project">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">My Projects</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Explore the innovative projects I’ve worked on, each
                designed to deliver high-quality solutions and exceptional user experiences.</p>
        </div>

        <!-- End Title -->

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="https://drive.google.com/file/d/1P5kmkYMFm-wSKRYQZvWEhfw8WWHMxFR7/view">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl" src="{{ asset('images/project1.png') }}"
                        alt="Project Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Secure Your Data with Caesar Cipher Encryption
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        Explore how the ancient Caesar Cipher encryption technique is still a relevant tool in modern
                        data security. Learn how to encrypt and decrypt messages effortlessly.
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <p class="mt-2 text-sm font-medium text-gray-600 dark:text-neutral-400">
                        September 3, 2024
                    </p>
                </div>
            </a>
            <!-- End Card -->

            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="https://drive.google.com/file/d/1P5kmkYMFm-wSKRYQZvWEhfw8WWHMxFR7/view">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full max-h-[193px] object-cover rounded-xl" src="{{ asset('images/project2.png') }}"
                        alt="Project Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Unlock Secret Messages with Pigpen Cipher
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        Discover the fun and simplicity of the Pigpen Cipher, a classic method for encoding messages in
                        a visually unique way. Learn how to create and decode secret symbols easily.
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <p class="mt-2 text-sm font-medium text-gray-600 dark:text-neutral-400">
                        September 3, 2024
                    </p>
                </div>
            </a>


            <!-- Card -->
            <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg transition duration-300 rounded-xl p-5 dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                href="https://drive.google.com/file/d/1P5kmkYMFm-wSKRYQZvWEhfw8WWHMxFR7/view">
                <div class="aspect-w-16 aspect-h-11">
                    <img class="w-full object-cover rounded-xl" src="{{ asset('images/project1.png') }}"
                        alt="Project Image">
                </div>
                <div class="my-6">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
                        Secure Your Data with Caesar Cipher Encryption
                    </h3>
                    <p class="mt-5 text-gray-600 dark:text-neutral-400">
                        Explore how the ancient Caesar Cipher encryption technique is still a relevant tool in modern
                        data security. Learn how to encrypt and decrypt messages effortlessly.
                    </p>
                </div>
                <div class="mt-auto flex items-center gap-x-3">
                    <p class="mt-2 text-sm font-medium text-gray-600 dark:text-neutral-400">
                        September 3, 2024
                    </p>
                </div>
            </a>
            <!-- End Card -->

        </div>
        <!-- End Grid -->

        <!-- Card -->
        <div class="mt-12 text-center">
            <a class="py-3 px-4 inline-flex items-center gap-x-1 text-sm font-medium rounded-full border border-gray-200 bg-white text-blue-600 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-blue-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                href="#">
                Read more
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Projects -->

    <!-- FAQ -->
    <div class="max-w-[65rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid md:grid-cols-5 gap-10">
            <div class="md:col-span-2">
                <div class="max-w-xs">
                    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Frequently<br>asked
                        questions</h2>
                    <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">Answers to the most common
                        questions about my services.</p>
                </div>
            </div>
            <!-- End Col -->

            <div class="md:col-span-3">
                <!-- Accordion -->
                <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-neutral-700">
                    <div class="hs-accordion pb-3 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <button
                            class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            Can I request custom designs for my project?
                            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                            <p class="text-gray-600 dark:text-neutral-400">
                                Absolutely! I offer fully customized web design and graphic design services that are
                                tailored to meet the unique needs of your project.
                            </p>
                        </div>
                    </div>

                    <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                        <button
                            class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                            How long does it take to complete a web development project?
                            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                            <p class="text-gray-600 dark:text-neutral-400">
                                The timeline for web development projects depends on the complexity and scope of the
                                project. I aim to deliver high-quality, responsive websites efficiently, typically
                                within 4-8 weeks.
                            </p>
                        </div>
                    </div>

                    <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                        <button
                            class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                            What types of graphic design services do you offer?
                            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                            <p class="text-gray-600 dark:text-neutral-400">
                                I specialize in creating visually compelling posters, branding materials, and marketing
                                assets that align with your brand’s vision.
                            </p>
                        </div>
                    </div>

                    <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
                        <button
                            class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                            Do you offer maintenance or support after project delivery?
                            <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                            <p class="text-gray-600 dark:text-neutral-400">
                                Yes, I provide ongoing support and maintenance services to ensure your website or
                                designs continue to function smoothly after the project is completed.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Accordion -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End FAQ -->

    <!-- Contact -->
    <div class="max-w-5xl px-8 xl:px-0 py-10 lg:py-20 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
            <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Contact Me</h2>
            <p class="mt-1 text-neutral-400">Let's bring your ideas to life.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16">
            <div class="md:order-2 border-b border-neutral-800 pb-10 mb-10 md:border-b-0 md:pb-0 md:mb-0">
                <form>
                    <div class="space-y-4">
                        <!-- Input -->
                        <div class="relative">
                            <input type="text" id="hs-tac-input-name"
                                class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2"
                                placeholder="Name">
                            <label for="hs-tac-input-name"
                                class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Name</label>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="relative">
                            <input type="email" id="hs-tac-input-email"
                                class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2"
                                placeholder="Email">
                            <label for="hs-tac-input-email"
                                class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Email</label>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="relative">
                            <input type="text" id="hs-tac-input-company"
                                class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2"
                                placeholder="Company">
                            <label for="hs-tac-input-company"
                                class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Company</label>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="relative">
                            <input type="text" id="hs-tac-input-phone"
                                class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2"
                                placeholder="Phone">
                            <label for="hs-tac-input-phone"
                                class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Phone</label>
                        </div>
                        <!-- End Input -->

                        <!-- Textarea -->
                        <div class="relative">
                            <textarea id="hs-tac-message"
                                class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2"
                                placeholder="This is a textarea placeholder"></textarea>
                            <label for="hs-tac-message"
                                class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Tell
                                us about your project</label>
                        </div>
                        <!-- End Textarea -->
                    </div>

                    <div class="mt-2">
                        <p class="text-xs text-neutral-500">
                            All fields are required
                        </p>

                        <p class="mt-5">
                            <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-[#ff0] font-medium text-sm text-neutral-800 rounded-full focus:outline-none"
                                href="#">
                                Submit
                                <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </a>
                        </p>
                    </div>
                </form>
            </div>
            <!-- End Col -->

            <div class="space-y-14">
                <!-- Item -->
                <div class="flex gap-x-5">
                    <svg class="shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    <div class="grow">
                        <h4 class="text-white font-semibold">Address:</h4>

                        <address class="mt-1 text-neutral-400 text-sm not-italic">
                            Jl. Jend. Urip Sumoharjo No.112, Purwodiningratan, <br>Kec. Jebres, Kota Surakarta, Jawa
                            Tengah 57129
                        </address>
                    </div>
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="flex gap-x-5">
                    <svg class="shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                    </svg>
                    <div class="grow">
                        <h4 class="text-white font-semibold">Email:</h4>

                        <a class="mt-1 text-neutral-400 text-sm hover:text-neutral-200 focus:outline-none focus:text-neutral-200"
                            href="#mailto:example@site.co" target="_blank">
                            raffaelaldrichsetiawan@gmail.com
                        </a>
                    </div>
                </div>
                <!-- End Item -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Contact -->

    <!-- ========== FOOTER ========== -->
    <footer class="relative overflow-hidden bg-neutral-900">
        <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745"
            height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127"
                class="stroke-neutral-700/50" stroke="currentColor" />
            <path
                d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136"
                class="stroke-neutral-700/50" stroke="currentColor" />
        </svg>

        <div class="relative z-10">
            <div class="w-full max-w-5xl px-4 xl:px-0 py-10 lg:pt-16 mx-auto">
                <div class="inline-flex items-center">
                    <!-- Logo -->
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-8">
                    <!-- End Logo -->

                    <div class="border-s border-neutral-700 ps-5 ms-5">
                        <p class="text-sm text-neutral-400">
                            © 2024 Raffael Aldrich Setiawan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->
</body>

</html>
