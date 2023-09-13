<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MYMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans antialiased">
    <div class="overflow-x-hidden w-full">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('home-navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- <img src="{{ asset('assets/img/hero.jpg') }}" alt="test image"> -->
            <section class="background-radial-gradient pt-16 pb-12 text-center lg:text-left">
                <div class="relative overflow-hidden bg-cover bg-no-repeat bg-[50%] h-[500px]"
                    style="background-image: url('{{ asset('assets/img/hero.jpg') }}')">
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                        <div class="flex h-full items-center justify-center">
                            <div class="max-w-[800px] px-6 py-6 text-center text-white md:py-0 md:px-12">
                                <h2 data-aos="zoom-fade-in" data-aos-duration="3000"
                                    class="mb-12 text-5xl font-bold leading-tight tracking-tight md:text-6xl xl:text-7xl">
                                    Unlocking Possibilities
                                </h2>
                                <p class="text-xl text-semibold" id="typing-text">
                                </p>
                                <div class="mt-12">
                                    <a href="{{ route('register') }}"
                                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Get
                                        Started</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <!-- Page Content -->
            <main class="p-6 mx-auto md:px-6">


                <section class="py-12 text-center" id="about">

                    <div class="flex justify-center">
                        <div class="max-w-[700px] text-center">
                            <h2 class="mb-6 text-center text-3xl font-bold text-grey-800 dark:text-white">
                                About
                                <u class="text-red-600">us</u>
                            </h2>
                            <p class="mb-16 text-gray-500 dark:text-gray-400">
                                In the pursuit of excellence and unwavering commitment, we navigate the intricate
                                landscapes
                                of challenges and possibilities with resilience. Just as a masterful conductor
                                harmonizes an
                                orchestra, we orchestrate the symphony of intricate engineering intricacies to compose
                                solutions that resonate with brilliance. Guided by a visionary compass, we transcend
                                traditional boundaries and engineer new horizons. With meticulous attention to detail
                                and a
                                deep-seated passion, we craft a narrative of innovation, where each chapter unfolds with
                                transformative breakthroughs.
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-x-6 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12">


                        <div class="mb-12 lg:mb-0" data-aos="fade-up" data-aos-duration="300">
                            <div class="mb-6 inline-block rounded-full bg-red-200 p-4 text-red-600 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.412 15.655L9.75 21.75l3.745-4.012M9.257 13.5H3.75l2.659-2.849m2.048-2.194L14.25 2.25 12 10.5h8.25l-4.707 5.043M8.457 8.457L3 3m5.457 5.457l7.086 7.086m0 0L21 21" />

                                </svg>


                            </div>
                            <h5 class="mb-4 text-lg font-bold text-red-600 dark:text-red-600">Unparalleled Expertise
                            </h5>
                            <p class="text-gray-500 dark:text-gray-400">
                                Our seasoned engineers bring decades of expertise for top-tier solutions and training.
                            </p>
                        </div>

                        <div class="mb-12 lg:mb-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
                            <div class="mb-6 inline-block rounded-full bg-red-200 p-4 text-red-600 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />

                                </svg>



                            </div>
                            <h5 class="mb-4 text-lg font-bold text-red-600">Resourceful
                                Problem-Solving
                            </h5>
                            <p class="text-gray-500 dark:text-gray-400">
                                We excel in tackling challenges, pioneering solutions that redefine possibilities.
                            </p>

                        </div>

                        <div class="mb-12 lg:mb-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="600">
                            <div class="mb-6 inline-block rounded-full bg-red-200 p-4 text-red-600 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />

                                </svg>


                            </div>
                            <h5 class="mb-4 text-lg font-bold text-red-600">Enduring Impact</h5>
                            <p class="text-gray-500 dark:text-gray-400">
                                Our influence shapes industries and careers, crafting lasting legacies.
                            </p>

                        </div>

                        <div class="mb-12 lg:mb-0" data-aos="fade-up" data-aos-duration="300" data-aos-delay="900">
                            <div class="mb-6 inline-block rounded-full bg-red-200 p-4 text-red-600 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />

                                </svg>


                            </div>
                            <h5 class="mb-4 text-lg font-bold text-red-600">Holistic Approach</h5>
                            <p class="text-gray-500 dark:text-gray-400">
                                Our approach ensures lasting success with tailored solutions.
                            </p>

                        </div>

                    </div>
                </section>

                <section class="py-12" id="services">
                    <div class="flex flex-wrap">
                        <div class="mb-12 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12">
                            <div class="flex lg:py-12 ">
                                <img src="{{ asset('assets/img/about.jpg') }}"
                                    class="z-[10] w-full rounded-lg shadow-lg dark:shadow-black/20 lg:ml-[50px]"
                                    alt="image" />

                            </div>
                        </div>

                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                            <div
                                class="flex h-full items-center rounded-lg bg-white dark:bg-gray-800 p-6 text-center text-white lg:pl-12 lg:text-left p-12">
                                <div data-aos="fade-down" class="lg:pl-12">
                                    <div class="border-b border-gray-200 dark:border-gray-700">
                                        <h2 class="my-8 text-3xl font-bold text-red-600">Electrical
                                            Engineering
                                        </h2>
                                        <p class="mb-8 pb-2 lg:pb-0 text-gray-500 dark:text-gray-400">
                                            Explore our comprehensive range of electrical engineering services, designed
                                            to
                                            meet the diverse needs of the public sector. From innovative infrastructure
                                            solutions to cutting-edge energy optimization, we deliver excellence in
                                            every
                                            project.
                                        </p>

                                        <div
                                            class="mx-auto my-8 flex flex-col md:flex-row md:justify-around xl:justify-start text-gray-900 dark:text-white">
                                            <p data-aos="fade-left"
                                                class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Comprehensive Solutions
                                            </p>

                                            <p data-aos="fade-left"
                                                class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Embracing Diversity
                                            </p>

                                            <p data-aos="fade-left"
                                                class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Energy Excellence
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-8" data-aos="fade-down">
                                        <h2 class=" mb-8 text-3xl font-bold text-red-600">Academy
                                        </h2>
                                        <p class="mb-8 pb-2 lg:pb-0 text-gray-500 dark:text-gray-400">
                                            Empower your team with our specialized academy offerings tailored for the
                                            public
                                            sector. Our curriculum blends theoretical knowledge with practical insights,
                                            equipping professionals with the skills needed to thrive in dynamic
                                            governmental
                                            environments.
                                        </p>

                                        <div
                                            class="mx-auto mb-8 flex flex-col md:flex-row md:justify-around xl:justify-start text-gray-900 dark:text-white">
                                            <p data-aos="fade-left"
                                                class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Academic Excellence
                                            </p>

                                            <p data-aos="fade-left"
                                                class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Holistic Learning
                                            </p>

                                            <p data-aos="fade-left"
                                                class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0 text-gray-900 dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    class="mr-2 h-5 w-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                Student-Centric Approach
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="py-12 text-center lg:text-left" id="experience">
                    <div data-aos="flip-up"
                        class="block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-white dark:bg-gray-800">
                        <div class="flex flex-wrap items-center">
                            <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                                <img src="{{ asset('assets/img/experience.jpg') }}" alt="Trendy Pants and Shoes"
                                    class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
                            </div>
                            <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                                <div class="px-6 py-12 md:px-12">
                                    <h2 class="display-5 mb-6 text-4xl font-bold text-red-600">
                                        Experience
                                    </h2>
                                    <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                                        Whether you're seeking top-tier Electrical Engineering Services or an enriching
                                        learning experience through our Academy, we're dedicated to your success. Our
                                        seasoned team brings innovation to projects, while our dynamic courses equip you
                                        with practical skills and insights for excellence in your chosen field.
                                    </p>

                                    <div class="grid md:grid-cols-3 lg:gap-x-12">
                                        <div class="mb-12 md:mb-0">
                                            <h2 class="mb-4 text-6xl font-bold text-red-600">
                                                1000
                                            </h2>
                                            <h5
                                                class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                Happy customers
                                            </h5>
                                        </div>

                                        <div class="mb-12 md:mb-0">
                                            <h2 class="mb-4 text-6xl font-bold text-red-600">
                                                80%
                                            </h2>
                                            <h5
                                                class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                Pass rate
                                            </h5>
                                        </div>

                                        <div class="">
                                            <h2 class="mb-4 text-6xl font-bold text-red-600">
                                                49
                                            </h2>
                                            <h5
                                                class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                Projects
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-12" id="contacts">

                    <div data-aos="flip-down"
                        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">

                        <div class="flex flex-wrap items-center">
                            <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                                <div class="h-[500px] w-full">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4117822955695!2d101.66337307504627!3d2.9831133541506967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb5b23bd10327%3A0x27e15eb54dceb271!2s17%2C%20Jalan%20Bpp%205%2F1%2C%20Pusat%20Bandar%20Putra%20Permai%2C%2043300%20Seri%20Kembangan%2C%20Selangor!5e0!3m2!1sen!2smy!4v1692922009079!5m2!1sen!2smy"
                                        class="left-0 top-0 h-full w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                                <h2
                                    class="mt-12 lg:mb-20 text-center text-3xl font-bold text-gray-900 dark:text-white">
                                    Contact <u class="text-red-600">Us</u>
                                </h2>
                                <div class="flex flex-wrap px-3 pt-12 pb-12 md:pb-0 lg:pt-0">
                                    <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="300"
                                        class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                        <div class="flex items-start">
                                            <div class="shrink-0">
                                                <div class="inline-block rounded-md bg-red-200 p-4 text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="h-6 w-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ml-6 grow">
                                                <p class="mb-2 font-bold dark:text-white">
                                                    Phone
                                                </p>
                                                <p class="text-gray-500 dark:text-gray-400">
                                                    <a href="tel:+60122753138">012 - 2753 138</a>
                                                </p>
                                                <p class="text-gray-500 dark:text-gray-400">
                                                    <a href="tel:+60148086799">014 - 8086 799</a>
                                                </p>
                                                <p class="text-gray-500 dark:text-gray-400">
                                                    <a href="tel:+60136073094">013 - 6073 094</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="600"
                                        class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:w-6/12 xl:px-12">
                                        <div class="flex items-start">
                                            <div class="shrink-0">
                                                <div class="inline-block rounded-md bg-red-200 p-4 text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="h-6 w-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ml-6 grow">
                                                <p class="mb-2 font-bold dark:text-white">
                                                    Inquiries
                                                </p>
                                                <p class="text-gray-500 dark:text-gray-400">
                                                    <a href="mailto:admin@myms.co">admin@myms.co</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="300"
                                        class="mb-12 w-full shrink-0 grow-0 basis-auto px-3 md:w-6/12 md:px-6 lg:w-full xl:mb-0 xl:w-6/12 xl:px-12">
                                        <div class="align-start flex">
                                            <div class="shrink-0">
                                                <div class="inline-block rounded-md bg-red-200 p-4 text-red-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        class="h-6 w-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ml-6 grow">
                                                <p class="mb-2 font-bold dark:text-white">Address</p>
                                                <p class="text-gray-500 dark:text-gray-400">
                                                    No 17 Jalan BPP 5/1, <br>
                                                    Bandar Putra Permai, <br>
                                                    43300 Seri Kembangan, <br>
                                                    Selangor, Malaysia
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

                <section class="py-12 text-center lg:text-left" id="team">

                    <h2 class="mb-12 text-center text-3xl font-bold text-gray-900 dark:text-white">
                        Meet <u class="text-red-600">Our Team</u>
                    </h2>

                    <div class="grid gap-6 md:grid-cols-3 xl:gap-x-12">
                        <div data-aos="zoom-in" data-aos-duration="500" class="mb-6 lg:mb-0">
                            <div
                                class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">
                                <div class="flex-row items-center lg:flex">
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-5/12 lg:pr-6">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.jpg"
                                            alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                                        <h5 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">
                                            Darren Randolf
                                        </h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Marketing
                                            expert</p>
                                        <ul class="mx-auto flex list-inside justify-center lg:justify-start">
                                            <a href="#!" class="px-2">
                                                <!-- GitHub -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Linkedin -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-3.5 w-3.5 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                                </svg>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="500" data-aos-delay="500" class="mb-6 lg:mb-0">
                            <div
                                class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">
                                <div class="flex-row items-center lg:flex">
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-5/12 lg:pr-6">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/4.jpg"
                                            alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                                        <h5 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">
                                            Jane Doe
                                        </h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Marketing
                                            expert</p>
                                        <ul class="mx-auto flex list-inside justify-center lg:justify-start">
                                            <a href="#!" class="px-2">
                                                <!-- GitHub -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Linkedin -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-3.5 w-3.5 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                                </svg>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="500" data-aos-delay="1000" class="mb-6 lg:mb-0">
                            <div
                                class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800">
                                <div class="flex-row items-center lg:flex">
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-5/12 lg:pr-6">
                                        <img src="{{ asset('assets/img/team/irfan.jpg') }}"
                                            alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                                        <h5 class="mb-2 text-lg font-bold text-gray-900 dark:text-white">
                                            Muhammad Irfan Bin Rohaizad
                                        </h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Training Engineer</p>
                                        <ul class="mx-auto flex list-inside justify-center lg:justify-start">
                                            <a href="#!" class="px-2">
                                                <!-- GitHub -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Twitter -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-4 w-4 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                                </svg>
                                            </a>
                                            <a href="#!" class="px-2">
                                                <!-- Linkedin -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="h-3.5 w-3.5 text-red-600">
                                                    <path fill="currentColor"
                                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                                </svg>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white dark:bg-gray-900 py-12">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                        <h2
                            class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                            In collaboration with:
                        </h2>
                        <div
                            class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                            <a href="#" class="flex justify-center items-center">
                                <svg class="h-auto hover:text-gray-900 dark:hover:text-white"
                                    viewBox="0 0 841.89 595.28" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path class="cls-1"
                                            d="M269.24,278.96h-17.84v49.06h-17.84v-62.44h73.59c10.41,0,15.61,4.46,15.61,13.38v49.06h-17.84v-46.83c0-1.49-.73-2.23-2.19-2.23h-15.65v49.06h-17.84v-49.06Z" />
                                        <path class="cls-1"
                                            d="M331.68,265.58h64.67c10.41,0,15.61,5.2,15.61,15.61v6.69c0,4.46-1.49,7.43-4.46,8.92,2.97,1.49,4.46,4.46,4.46,8.92v6.69c0,10.41-5.2,15.61-15.61,15.61h-64.67v-62.44Zm60.21,24.53c1.49,0,2.23-.74,2.23-2.23v-6.65c0-1.49-.74-2.23-2.23-2.23l-42.37-.04v11.15h42.37Zm-42.37,24.48h42.37c1.49,0,2.23-.74,2.23-2.23v-6.65c0-1.49-.74-2.23-2.23-2.23h-42.37v11.1Z" />
                                        <path class="cls-1"
                                            d="M581.44,265.54v13.42h-26.71v49.06h-17.88l-.04-49.06-26.71,.04v-13.56l71.36,.09Z" />
                                    </g>
                                    <g>
                                        <path d="M236.96,358.36v-11.42h2.17v9.73h9.26v1.69h-11.44Z" />
                                        <path
                                            d="M249.91,358.36v-11.42h11.74v1.69h-9.59v2.85h9.1v1.69h-9.1v3.5h9.59v1.69h-11.74Z" />
                                        <path
                                            d="M278.88,358.36v-8l-5.81,8h-1.77l-5.82-7.98v7.98h-2v-11.42h2.01l6.78,9.33,6.75-9.33h1.85v11.42h-2Z" />
                                        <path
                                            d="M282.98,358.36v-11.42h9.29c.63,0,1.17,.06,1.61,.17,.45,.11,.81,.28,1.09,.49,.28,.21,.48,.47,.61,.78,.13,.31,.19,.65,.19,1.03v1.05c0,.5-.12,.92-.36,1.26-.24,.34-.57,.55-.98,.64,.43,.12,.79,.32,1.07,.61s.42,.71,.42,1.26v1.67c0,.32-.06,.64-.17,.93-.11,.3-.31,.56-.58,.79-.28,.23-.65,.41-1.11,.54-.47,.14-1.05,.2-1.75,.2h-9.33Zm10.64-8.84c0-.31-.1-.54-.29-.68-.19-.14-.55-.21-1.05-.21h-7.14v2.97h7.14c.51,0,.86-.07,1.05-.21,.19-.14,.29-.37,.29-.68v-1.18Zm.15,4.74c0-.36-.14-.61-.41-.75-.27-.15-.62-.22-1.05-.22h-7.17v3.39h7.17c.43,0,.78-.08,1.05-.24,.27-.16,.41-.48,.41-.94v-1.23Z" />
                                        <path
                                            d="M310.48,358.36l-5.89-9.2-5.99,9.2h-2.4l7.59-11.42h1.57l7.54,11.42h-2.43Z" />
                                        <path
                                            d="M317.26,358.36c-2.71,0-4.07-.82-4.07-2.47v-6.49c0-1.64,1.36-2.47,4.07-2.47h8.94v1.69h-8.94c-1.28,0-1.91,.26-1.91,.78v6.49c0,.52,.64,.78,1.91,.78h5.04c1.28,0,1.91-.25,1.91-.75v-3.8h2.16v3.8c0,1.62-1.36,2.43-4.07,2.43h-5.04Z" />
                                        <path
                                            d="M341.02,358.36l-5.89-9.2-5.99,9.2h-2.4l7.59-11.42h1.57l7.54,11.42h-2.43Z" />
                                        <path d="M357.93,358.36v-9.73h-5.99v-1.69h13.97v1.69h-5.82v9.73h-2.16Z" />
                                        <path
                                            d="M367.35,358.36v-11.42h11.74v1.69h-9.59v2.85h9.1v1.69h-9.1v3.5h9.59v1.69h-11.74Z" />
                                        <path
                                            d="M391.11,358.36l-4.31-5.09h-3.71v5.09h-2.16v-11.42h2.16v4.64h3.67l4.3-4.64h2.56l-5.08,5.32,5.06,6.1h-2.48Z" />
                                        <path
                                            d="M408.92,358.36l-12.18-8.89v8.89h-1.88v-11.42h1.87l11.37,8.48v-8.48h1.88v11.42h-1.05Z" />
                                        <path
                                            d="M415.59,358.36c-.65,0-1.2-.07-1.65-.2-.45-.13-.82-.32-1.11-.57s-.49-.53-.62-.87c-.13-.33-.19-.71-.19-1.12v-5.9c0-.41,.06-.78,.19-1.12s.34-.62,.62-.87,.66-.43,1.11-.57c.45-.14,1.01-.2,1.65-.2h7.54c.65,0,1.2,.07,1.65,.2,.46,.13,.82,.32,1.11,.57,.29,.24,.49,.53,.62,.87,.13,.33,.2,.71,.2,1.12v5.9c0,.41-.07,.78-.2,1.12-.13,.34-.34,.62-.62,.87-.29,.24-.66,.43-1.11,.57-.45,.14-1.01,.2-1.65,.2h-7.54Zm8.97-8.68c0-.7-.48-1.05-1.43-1.05h-7.54c-.95,0-1.43,.35-1.43,1.05v5.94c0,.7,.48,1.05,1.43,1.05h7.54c.95,0,1.43-.35,1.43-1.05v-5.94Z" />
                                        <path d="M428.75,358.36v-11.42h2.17v9.73h9.26v1.69h-11.44Z" />
                                        <path
                                            d="M444.89,358.36c-.65,0-1.2-.07-1.66-.2-.45-.13-.82-.32-1.11-.57-.29-.24-.49-.53-.62-.87-.13-.33-.19-.71-.19-1.12v-5.9c0-.41,.06-.78,.19-1.12s.34-.62,.62-.87c.29-.24,.66-.43,1.11-.57,.45-.14,1.01-.2,1.66-.2h7.54c.65,0,1.2,.07,1.65,.2,.45,.13,.82,.32,1.11,.57,.29,.24,.49,.53,.62,.87s.2,.71,.2,1.12v5.9c0,.41-.07,.78-.2,1.12-.13,.34-.34,.62-.62,.87-.29,.24-.66,.43-1.11,.57-.45,.14-1.01,.2-1.65,.2h-7.54Zm8.97-8.68c0-.7-.48-1.05-1.43-1.05h-7.54c-.95,0-1.43,.35-1.43,1.05v5.94c0,.7,.48,1.05,1.43,1.05h7.54c.95,0,1.43-.35,1.43-1.05v-5.94Z" />
                                        <path
                                            d="M462.03,358.36c-2.71,0-4.07-.82-4.07-2.47v-6.49c0-1.64,1.36-2.47,4.07-2.47h8.94v1.69h-8.94c-1.28,0-1.91,.26-1.91,.78v6.49c0,.52,.64,.78,1.91,.78h5.04c1.28,0,1.91-.25,1.91-.75v-3.8h2.16v3.8c0,1.62-1.36,2.43-4.07,2.43h-5.04Z" />
                                        <path d="M473.23,358.36v-11.42h2.16v11.42h-2.16Z" />
                                        <path
                                            d="M477.72,358.36v-1.69h9.93c.95,0,1.43-.35,1.43-1.05v-1.44c0-.7-.48-1.05-1.43-1.05h-6.72c-.65,0-1.2-.07-1.65-.2-.45-.13-.83-.32-1.11-.57-.29-.24-.5-.53-.62-.87-.13-.33-.19-.71-.19-1.12v-.67c0-.41,.07-.78,.19-1.12,.13-.33,.34-.62,.62-.87,.29-.24,.66-.43,1.11-.57,.45-.14,1.01-.2,1.65-.2h9.67v1.69h-9.67c-.95,0-1.43,.35-1.43,1.05v.7c0,.7,.48,1.05,1.43,1.05h6.72c.65,0,1.2,.07,1.65,.2s.83,.32,1.11,.57,.5,.53,.62,.87c.13,.33,.19,.71,.19,1.12v1.41c0,.41-.07,.78-.19,1.12-.13,.34-.34,.62-.62,.87s-.66,.43-1.11,.57c-.45,.14-1.01,.2-1.65,.2h-9.93Z" />
                                        <path
                                            d="M516.5,358.36v-8l-5.81,8h-1.77l-5.82-7.98v7.98h-2v-11.42h2.01l6.78,9.33,6.75-9.33h1.85v11.42h-2Z" />
                                        <path
                                            d="M533.83,358.36l-5.89-9.2-5.99,9.2h-2.4l7.59-11.42h1.57l7.54,11.42h-2.43Z" />
                                        <path d="M537.32,358.36v-11.42h2.17v9.73h9.26v1.69h-11.44Z" />
                                        <path
                                            d="M563.48,358.36l-5.89-9.2-5.99,9.2h-2.4l7.59-11.42h1.57l7.54,11.42h-2.43Z" />
                                        <path
                                            d="M569.3,358.36v-4.64l-7.33-6.78h2.76l5.64,5.22,5.65-5.22h2.73l-7.28,6.78v4.64h-2.16Z" />
                                        <path
                                            d="M579.22,358.36v-1.69h9.93c.95,0,1.43-.35,1.43-1.05v-1.44c0-.7-.48-1.05-1.43-1.05h-6.72c-.65,0-1.2-.07-1.65-.2-.45-.13-.83-.32-1.11-.57-.29-.24-.5-.53-.62-.87-.13-.33-.19-.71-.19-1.12v-.67c0-.41,.07-.78,.19-1.12,.13-.33,.34-.62,.62-.87,.29-.24,.66-.43,1.11-.57,.45-.14,1.01-.2,1.65-.2h9.67v1.69h-9.67c-.95,0-1.43,.35-1.43,1.05v.7c0,.7,.48,1.05,1.43,1.05h6.72c.65,0,1.2,.07,1.65,.2s.83,.32,1.11,.57,.5,.53,.62,.87c.13,.33,.19,.71,.19,1.12v1.41c0,.41-.07,.78-.19,1.12-.13,.34-.34,.62-.62,.87s-.66,.43-1.11,.57c-.45,.14-1.01,.2-1.65,.2h-9.93Z" />
                                        <path d="M594.58,358.36v-11.42h2.16v11.42h-2.16Z" />
                                        <path
                                            d="M612.15,358.36l-5.89-9.2-5.99,9.2h-2.4l7.59-11.42h1.57l7.54,11.42h-2.43Z" />
                                    </g>
                                    <g>
                                        <path
                                            d="M265.5,378.62v-6.93l-5.03,6.93h-1.53l-5.05-6.92v6.92h-1.73v-9.9h1.74l5.88,8.08,5.85-8.08h1.6v9.9h-1.73Z" />
                                        <path
                                            d="M280.52,378.62l-5.1-7.97-5.19,7.97h-2.08l6.58-9.9h1.36l6.54,9.9h-2.11Z" />
                                        <path d="M283.54,378.62v-9.9h1.88v8.44h8.03v1.46h-9.91Z" />
                                        <path
                                            d="M306.23,378.62l-5.1-7.97-5.19,7.97h-2.08l6.58-9.9h1.36l6.54,9.9h-2.11Z" />
                                        <path
                                            d="M311.27,378.62v-4.02l-6.36-5.88h2.39l4.89,4.53,4.89-4.53h2.36l-6.31,5.88v4.02h-1.87Z" />
                                        <path
                                            d="M319.87,378.62v-1.46h8.61c.82,0,1.24-.3,1.24-.91v-1.25c0-.61-.41-.91-1.24-.91h-5.82c-.56,0-1.04-.06-1.43-.18-.39-.12-.71-.28-.96-.49s-.43-.46-.54-.75c-.11-.29-.17-.61-.17-.97v-.58c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75s.57-.38,.96-.49c.39-.12,.87-.18,1.43-.18h8.38v1.46h-8.38c-.82,0-1.24,.31-1.24,.91v.61c0,.61,.41,.91,1.24,.91h5.82c.56,0,1.04,.06,1.43,.18,.39,.12,.71,.28,.96,.49,.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v1.22c0,.36-.06,.68-.17,.97-.11,.29-.29,.54-.54,.75-.25,.21-.57,.38-.96,.49-.39,.12-.87,.18-1.43,.18h-8.61Z" />
                                        <path d="M333.18,378.62v-9.9h1.87v9.9h-1.87Z" />
                                        <path
                                            d="M348.41,378.62l-5.1-7.97-5.19,7.97h-2.08l6.58-9.9h1.36l6.54,9.9h-2.11Z" />
                                        <path
                                            d="M358.46,378.62v-9.9h8.06c.54,0,1.01,.05,1.4,.15,.39,.1,.7,.24,.94,.42,.24,.18,.42,.41,.53,.67,.11,.27,.17,.57,.17,.89v.91c0,.43-.11,.79-.32,1.09-.21,.29-.49,.48-.85,.55,.37,.1,.68,.28,.93,.53,.24,.25,.37,.61,.37,1.09v1.45c0,.28-.05,.55-.15,.81-.1,.26-.27,.49-.51,.68-.24,.2-.56,.35-.96,.47-.4,.12-.91,.18-1.52,.18h-8.09Zm9.22-7.66c0-.27-.08-.47-.25-.59-.17-.12-.47-.18-.91-.18h-6.19v2.57h6.19c.44,0,.75-.06,.91-.18,.17-.12,.25-.32,.25-.59v-1.03Zm.13,4.11c0-.31-.12-.53-.35-.65-.23-.13-.54-.19-.91-.19h-6.22v2.94h6.22c.38,0,.68-.07,.91-.21s.35-.41,.35-.82v-1.07Z" />
                                        <path
                                            d="M374.48,378.62c-.56,0-1.04-.06-1.43-.18s-.71-.28-.96-.49-.43-.46-.54-.75c-.11-.29-.17-.61-.17-.97v-5.12c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75s.57-.38,.96-.49,.87-.18,1.43-.18h6.54c.56,0,1.04,.06,1.43,.18s.71,.28,.96,.49c.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v5.12c0,.36-.06,.68-.17,.97-.11,.29-.29,.54-.54,.75-.25,.21-.57,.38-.96,.49s-.87,.18-1.43,.18h-6.54Zm7.78-7.52c0-.61-.41-.91-1.24-.91h-6.54c-.82,0-1.24,.31-1.24,.91v5.15c0,.61,.41,.91,1.24,.91h6.54c.82,0,1.24-.3,1.24-.91v-5.15Z" />
                                        <path
                                            d="M396.74,378.62l-5.1-7.97-5.19,7.97h-2.08l6.58-9.9h1.36l6.54,9.9h-2.11Z" />
                                        <path
                                            d="M409.17,378.62l-2.32-4.42h-5.22v4.42h-1.87v-9.9h8.41c.56,0,1.04,.06,1.43,.18,.39,.12,.71,.28,.96,.49,.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v.7c0,.64-.19,1.17-.56,1.6s-1,.68-1.88,.77l2.33,4.44h-2Zm.24-7.52c0-.61-.41-.91-1.24-.91h-6.54v2.56h6.54c.83,0,1.24-.3,1.24-.91v-.73Z" />
                                        <path
                                            d="M412.79,378.62v-9.9h9.07c.7,0,1.29,.06,1.76,.18s.84,.3,1.12,.55c.28,.24,.48,.55,.6,.91,.12,.37,.18,.79,.18,1.28v4.15c0,.47-.06,.88-.18,1.23s-.32,.64-.6,.88-.66,.41-1.12,.53-1.05,.18-1.76,.18h-9.07Zm10.86-6.97c0-.28-.03-.52-.08-.7-.06-.19-.15-.34-.29-.45-.14-.11-.32-.19-.55-.24-.23-.05-.52-.07-.86-.07h-7.2v6.97h7.2c.35,0,.64-.02,.86-.07,.23-.05,.41-.12,.55-.22,.14-.1,.23-.24,.29-.42,.06-.18,.08-.4,.08-.66v-4.13Z" />
                                        <path
                                            d="M437.34,378.62c-.56,0-1.04-.06-1.43-.18-.39-.12-.71-.28-.96-.49-.25-.21-.43-.46-.54-.75-.11-.29-.17-.61-.17-.97v-5.12c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75,.25-.21,.57-.38,.96-.49,.39-.12,.87-.18,1.43-.18h6.54c.56,0,1.04,.06,1.43,.18,.39,.12,.71,.28,.96,.49,.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v5.12c0,.36-.06,.68-.17,.97-.11,.29-.29,.54-.54,.75-.25,.21-.57,.38-.96,.49-.39,.12-.87,.18-1.43,.18h-6.54Zm7.78-7.52c0-.61-.41-.91-1.24-.91h-6.54c-.83,0-1.24,.31-1.24,.91v5.15c0,.61,.41,.91,1.24,.91h6.54c.82,0,1.24-.3,1.24-.91v-5.15Z" />
                                        <path
                                            d="M450.61,374.55v4.08h-1.87v-9.9h10.18v1.46h-8.31v2.9h7.75v1.46h-7.75Z" />
                                        <path d="M471.56,378.62v-8.44h-5.19v-1.46h12.11v1.46h-5.05v8.44h-1.87Z" />
                                        <path
                                            d="M479.73,378.62v-9.9h10.18v1.46h-8.31v2.48h7.89v1.46h-7.89v3.04h8.31v1.46h-10.18Z" />
                                        <path
                                            d="M494.54,378.62c-.56,0-1.04-.06-1.43-.18-.39-.12-.71-.28-.96-.49s-.43-.46-.54-.75c-.11-.29-.17-.61-.17-.97v-5.12c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75s.57-.38,.96-.49c.39-.12,.87-.18,1.43-.18h7.97v1.46h-7.97c-.83,0-1.24,.31-1.24,.91v5.15c0,.61,.41,.91,1.24,.91h7.97v1.46h-7.97Z" />
                                        <path
                                            d="M514.06,378.62v-4.5h-8.1v4.5h-1.87v-9.9h1.87v3.94h8.1v-3.94h1.87v9.9h-1.87Z" />
                                        <path
                                            d="M529.95,378.62l-10.56-7.71v7.71h-1.63v-9.9h1.62l9.86,7.35v-7.35h1.63v9.9h-.91Z" />
                                        <path
                                            d="M535.73,378.62c-.56,0-1.04-.06-1.43-.18-.39-.12-.71-.28-.96-.49s-.43-.46-.54-.75c-.11-.29-.17-.61-.17-.97v-5.12c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75s.57-.38,.96-.49c.39-.12,.87-.18,1.43-.18h6.54c.56,0,1.04,.06,1.43,.18,.39,.12,.71,.28,.96,.49,.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v5.12c0,.36-.06,.68-.17,.97-.11,.29-.29,.54-.54,.75-.25,.21-.57,.38-.96,.49-.39,.12-.87,.18-1.43,.18h-6.54Zm7.78-7.52c0-.61-.41-.91-1.24-.91h-6.54c-.83,0-1.24,.31-1.24,.91v5.15c0,.61,.41,.91,1.24,.91h6.54c.82,0,1.24-.3,1.24-.91v-5.15Z" />
                                        <path d="M547.13,378.62v-9.9h1.88v8.44h8.03v1.46h-9.91Z" />
                                        <path
                                            d="M561.12,378.62c-.56,0-1.04-.06-1.43-.18-.39-.12-.71-.28-.96-.49s-.43-.46-.54-.75c-.11-.29-.17-.61-.17-.97v-5.12c0-.36,.06-.68,.17-.97,.11-.29,.29-.54,.54-.75s.57-.38,.96-.49c.39-.12,.87-.18,1.43-.18h6.54c.56,0,1.04,.06,1.43,.18,.39,.12,.71,.28,.96,.49,.25,.21,.43,.46,.54,.75,.11,.29,.17,.61,.17,.97v5.12c0,.36-.06,.68-.17,.97-.11,.29-.29,.54-.54,.75-.25,.21-.57,.38-.96,.49-.39,.12-.87,.18-1.43,.18h-6.54Zm7.78-7.52c0-.61-.41-.91-1.24-.91h-6.54c-.83,0-1.24,.31-1.24,.91v5.15c0,.61,.41,.91,1.24,.91h6.54c.82,0,1.24-.3,1.24-.91v-5.15Z" />
                                        <path
                                            d="M575.98,378.62c-2.35,0-3.53-.71-3.53-2.14v-5.62c0-1.42,1.18-2.14,3.53-2.14h7.75v1.46h-7.75c-1.11,0-1.66,.23-1.66,.68v5.62c0,.45,.55,.67,1.66,.67h4.37c1.11,0,1.66-.21,1.66-.65v-3.29h1.87v3.29c0,1.41-1.18,2.11-3.53,2.11h-4.37Z" />
                                        <path
                                            d="M591.06,378.62v-4.02l-6.36-5.88h2.39l4.89,4.53,4.89-4.53h2.36l-6.31,5.88v4.02h-1.87Z" />
                                    </g>
                                    <path class="cls-6"
                                        d="M490.42,326.6q-2.83,2.25-5.66,4.16-.66,.25-1.5,.25,3.33-2.25,6.58-4.91,.41,.33,.58,.5h0Zm5.16-5.58h0q-2.16,2.67-4.75,5.16-.08-.16-.5-.58,2.99-2.91,5.57-6-.08,.83-.33,1.41h0Zm6.91-34.71h0c.5,1.58,.83,3.33,1.08,4.99q.08,.83,.08,1.66-.5-2.75-1.33-5.74-.08-1.67-.41-3c.25,.67,.41,1.33,.58,2.08h0Zm1.25,7.16h0c.08,.83,.08,1.58,.17,2.41q-.09-.66-.09-1.41,0-.58-.08-1h0Zm.17,3.33h0c0,1.83-.17,3.66-.42,5.41q-.17,1.16-.42,2.33,.17-2.08,.08-4.49,.5-2.75,.67-5.25,.09,1,.09,2h0Zm-.92,8.24h0c0,.25-.08,.58-.16,.84v-.25q.16-.33,.16-.58h0Zm-.33,1.58h0c-.67,2.5-1.59,4.91-2.67,7.24q.33-.83,.58-1.75,1.25-3.16,2.16-5.99-.08,.25-.08,.5h0Zm-2.92,7.83h0c-.83,1.58-1.75,3.08-2.67,4.5-.5,.83-.58,.83-1.08,1.58q.25-.58,.33-1.5,2.16-3.16,3.91-6.41c-.25,1-.16,1-.5,1.83h0Zm-17.15,17.57h0c-1.5,.83-3.08,1.5-4.74,2.17q-.92,.25-1.92,.42,3.33-1.42,6.74-3.25,.92-.08,1.59-.25-.84,.5-1.67,.91h0Zm-17.15,4.66h0c-1.91,.09-3.82,0-5.66-.17q-.91-.16-1.92-.25,2.5,.09,5.33-.17,2.42,.33,4.5,.42-1.17,.09-2.25,.17h0Zm-6.49-.25h0c-.83-.08-1.58-.24-2.33-.33q.42,0,.92,.09,.67,.08,1.41,.24h0Zm-4.41-.83h0c-2.41-.5-4.66-1.33-6.91-2.33q1.33,.5,2.91,.75,2.92,1.08,5.66,1.91-.91-.17-1.66-.33h0Zm-8.58-3.08h0l-.08-.08q-2.58-1.42-5.25-3.16,.83,.25,2.09,.25,3.08,2.08,6.16,3.74-1.67-.33-2.91-.75h0Zm-1.33-.75h0c-1.5-.75-2.92-1.67-4.33-2.74q.08,.08,.25,.16,2,1.41,4.08,2.58h0Zm-18.32-21.06h0c-.17-.5-.33-.91-.5-1.33q-.33-1.42-.41-3,1.16,3.17,2.75,6.41,0,1.33,.17,2.33-1.08-2.25-2-4.41h0Zm-2.58-12.82h0c0-.08,.08-.25,0-.33q.08,.16,0,.25,.08,.08,0,.08h0Zm44.79-41.04h0c.25,0,.41,.08,.58,.08h-.24q-.17-.08-.33-.08h0Zm11.74,3.25h0c.33,.17,.67,.33,1,.5q2.25,1.16,4.49,2.5-1-.25-2.33-.33-3.08-1.92-6.16-3.41,1.66,.25,3,.75h0Zm-24.89-1.08h0q-3.83,1.67-7.74,3.75-1.58-.5-2.75-.67,3.41-1.91,6.83-3.33,1.58,0,3.67,.25h0Zm7.32-1.91h0q-3.25,.58-6.74,1.67-2-.25-3.74-.25,3.24-.91,6.24-1.58,2-.08,4.24,.16h0Zm-28.39,26.31h0q-3.08,4.25-5.5,8.16-.91-3.08-1.5-5.74,2.08-3.66,4.66-7.49,.92,2.33,2.33,5.08h0Zm8.41-9.07h0q-4.17,4.17-7.83,8.41-1.5-2.83-2.42-5,3.16-3.83,6.74-7.49,1.5,1.83,3.5,4.08h0Zm27.05-15.32h0q-3.25,.75-6.99,2.08-2.91-1.25-5.58-2.08,3.58-1.08,6.83-1.75,2.75,.67,5.74,1.75h0Zm5.49-.33h0q-2.25-.08-5,.25-2.99-1.08-5.66-1.75,2.74-.17,5.24-.08,2.58,.58,5.41,1.58h0Zm-45.88,49.87h0q-.83,2.16-1.16,4-1.58-3.33-2.83-6.49,.25-2.16,.75-4.83,1.42,3.58,3.25,7.32h0Zm10.99-15.57h0q-3.75,4.33-6.75,8.33-2.33-4.08-4.08-7.83,2.5-4,5.66-8.32,2.33,3.66,5.16,7.82h0Zm9.99-10.16h0q-4.91,4.75-9.32,9.32-2.92-4.08-5.16-7.66,3.83-4.42,8.24-8.66,2.83,3.25,6.24,6.99h0Zm11.07-9.16h0q-5.08,4-10.24,8.41-3.41-3.75-6.33-6.99,4.66-3.83,9.41-7.33,3.42,2.67,7.16,5.91h0Zm17.07-9.91h0q-3,1.25-6.58,3.08-3.82-2.66-7.32-4.83,3.75-1.41,6.91-2.25,3.5,1.75,6.99,4h0Zm4.58-1h0q-1.75,.25-4.08,.83-3.58-2.17-6.99-3.91,2.74-.33,4.91-.33,3.08,1.5,6.16,3.41h0Zm-46.96,55.53h0q-1.41,1.58-2.33,2.66-2.41-3.25-4.58-6.58,.41-1.66,1.41-3.74,2.5,3.91,5.49,7.66h0Zm13.74-13.48h0q-4.33,4.16-8.08,7.66-3.5-4.41-6.66-8.83,3.16-3.91,7-8.24,3.66,4.66,7.74,9.41h0Zm31.81-28.31h0q-3.91,3.33-8.5,7.24-4.41-4.58-8.66-8.66,4.74-3.41,8.99-6.16,4.08,3.58,8.16,7.57h0Zm6.08-4.91h0q-2.42,1.92-5.5,4.41-4.08-4-8.07-7.5,3.49-2,6.32-3.25,3.75,2.91,7.24,6.33h0Zm3.17-2.33h0q-1.16,.75-2.83,2-3.5-3.33-7.16-6.24,2.25-.75,3.91-1.08,3.16,2.58,6.08,5.33h0Zm1.33-.66h0q-.41,.17-1.16,.58-2.91-2.75-6-5.25,1.25,.09,2.08,.25,2.67,2.08,5.08,4.42h0Zm-40.88,54.61h0q-3.33,2.08-6.08,3.58-3.58-3.16-7.08-6.66,2.25-2.08,5.16-4.66,4,4.08,7.99,7.74h0Zm9.57-6.74h0q-4.75,3.5-8.91,6.41-4.08-3.83-8.07-7.99,3.74-3.41,8.24-7.41,4.33,4.66,8.74,8.99h0Zm29.98-28.72h0q-3.25,3.83-7.33,8.16-3.83-4.83-7.99-9.57,4.41-4,8.24-7.49,3.75,4.41,7.08,8.91h0Zm4.66-6.49h0q-1.75,2.66-4.16,5.83-3.33-4.42-6.99-8.74,2.91-2.75,5.25-4.75,3.08,3.75,5.91,7.66h0Zm1.91-3.83h0q-.58,1.5-1.67,3.5-2.74-3.91-5.91-7.66,1.5-1.41,2.58-2.33,2.66,3.16,5,6.49h0Zm.17-2.08h0q.08,.75-.17,1.83-2.25-3.25-4.83-6.41,.58-.5,.92-.83,2.16,2.66,4.08,5.41h0Zm-43.79,57.53h0q-2.58,.33-4.66,.41-3.08-1.66-6.24-3.83,1.67-.25,3.91-1,3.5,2.42,6.99,4.41h0Zm27.39-15.98h0q-4.83,4.08-9.66,7.66-3.58-3-7.58-6.58,5.16-4.08,10.33-8.58,3.66,4,6.91,7.49h0Zm9.32-9.58h0q-4,4.5-8.58,8.91-3.16-3.49-6.75-7.66,5-4.66,9.58-9.41,3.16,4.33,5.74,8.16h0Zm6.58-9.07h0q-2.58,3.99-5.91,8.32-2.58-3.83-5.75-8.16,3.92-4.33,7.08-8.33,2.57,4.25,4.58,8.16h0Zm3.49-7.24h0q-1.25,3.08-3.08,6.58-1.99-3.91-4.49-8.08,2.25-3.33,3.83-6.08,2.16,3.83,3.74,7.58h0Zm1.08-5.16h0q-.25,2.08-.92,4.66-1.58-3.67-3.66-7.49,.92-2.08,1.41-3.74,1.75,3.33,3.17,6.58h0Zm-.42-3.33h0q.25,1.33,.42,3-1.41-3.25-3.08-6.49,.08-1.25-.09-2.17,1.5,2.83,2.75,5.66h0Zm-39.62,53.36h0q-2.75,.17-5.17,.09-2.75-.75-5.66-1.91,2.17,0,4.83-.25,3.16,1.25,5.99,2.08h0Zm7.4-1.91h0q-3.66,1.16-6.82,1.83-2.91-.83-6.08-2.16,3.25-.83,7-2.16,3.16,1.5,5.91,2.5h0Zm8.75-4.25h0q-4.17,2.25-8.08,4-2.75-1-5.91-2.5,4.17-2.08,8.66-4.83,2.92,1.92,5.33,3.33h0Zm8.99-6.66h0q-4.08,3.33-8.25,6.16-2.41-1.41-5.25-3.41,4.75-3.33,9.41-7.24,2.33,2.49,4.08,4.49h0Zm7.82-8.33h0q-3.33,3.92-7.07,7.66-1.75-2-4.08-4.5,4.33-4.33,8.24-8.66,1.67,3.08,2.91,5.49h0Zm5.41-8.32h0q-2.17,3.75-4.92,7.66-1.16-2.5-2.83-5.58,3.25-4.24,5.75-8.24,1.17,3.33,2,6.16h0Zm2.83-7.33h0q-1.09,3.25-2.58,6.66-.67-2.83-1.92-6.08,1.83-3.58,2.91-6.74,1,3.25,1.59,6.16h0Zm.75-5.66h0q-.17,2.41-.67,5.16-.5-2.91-1.5-6.16,.59-2.67,.83-4.83,.83,3,1.33,5.83h0Zm-29.22,41.46h0q-3.25,.92-6.25,1.58-2.08-.08-4.5-.41,3.25-.58,6.82-1.75,2.17,.41,3.92,.58h0Zm7.66-3.58h0q-3.58,1.91-7.07,3.33-1.75-.09-3.91-.5,3.83-1.67,7.91-3.92,1.67,.75,3.08,1.09h0Zm7.41-5.5h0q-3.33,2.75-6.83,5.08-1.33-.34-2.99-1,4.08-2.83,7.99-5.99,1.08,1.17,1.83,1.92h0Zm6.41-6.83h0q-2.75,3.25-5.74,6.33-.84-.83-1.83-2.08,3.58-3.58,6.74-7.32,.59,1.75,.83,3.08h0Zm4.5-7.16h0q-1.83,3.24-4.08,6.58-.17-1.33-.75-3.16,2.66-3.75,4.75-7.41,.16,2.16,.08,4h0Zm2.5-6.75h0q-.83,3-2.16,6.16,0-1.83-.17-4.08,1.5-3.42,2.5-6.58,0,2.42-.17,4.5h0Z" />
                                    <path class="cls-6"
                                        d="M580.39,326.91c8.91-2.6,15.82-7.86,20.11-16.53,4.76-9.6,2.86-18.84-1.77-27.71-9.16-17.52-23.76-29.82-39.93-40.43-22.9-15.02-47.87-25.14-74.5-31.87,8.08,1.41,16.27,2.38,24.23,4.31,30.19,7.31,58.16,19.48,82.43,39.26,10.27,8.38,19.67,17.69,25.06,30.07,7.14,16.41,3.3,29.37-13.61,37.33-6.88,3.23-14.59,3.51-22.02,5.56-.14-.54,.13,.55,0,0Z" />
                                    <path class="cls-5"
                                        d="M436.74,223.41c1.26-.19,2.24-.2,3.71-.35,41.62-4.2,78.43,9.01,112.89,30.87,.23,.15,.3,.55,.37,.69-10.61-4.35-21.18-9.15-32.09-13.03-19.83-7.03-40.33-11.14-61.41-9.35-9.11,.78-18.61,2.76-26.88,6.54-13.03,5.95-17.82,18.14-12.12,32.83,.72,1.87,1.61,3.68,2.68,6.09-21.52-22.44-20.67-45.23,10.68-53.86" />
                                    <path class="cls-2"
                                        d="M458.04,189.93c.98-.16,1.77-.16,2.94-.29,32.96-3.33,62.13,7.14,89.41,24.45,.19,.11,.24,.43,.3,.54-8.41-3.44-16.79-7.25-25.42-10.31-15.71-5.58-31.95-8.83-48.65-7.41-7.22,.62-14.74,2.19-21.29,5.18-10.33,4.71-14.1,14.37-9.6,26,.58,1.48,1.28,2.91,2.13,4.83-17.05-17.79-16.36-35.83,8.46-42.67" />
                                    <line class="cls-4" x1="235.91" y1="363.28" x2="614.58"
                                        y2="363.28" />
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <svg class="h-16 hover:text-gray-900 dark:hover:text-white"
                                    viewBox="0 0 236.82 174.26" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <polygon class="cls-2"
                                                points="114.36 112.17 69.07 66.87 68.07 65.87 66.66 65.87 47.36 65.87 46.36 65.87 46.36 66.87 46.36 110.87 46.36 111.87 47.36 111.87 66.66 111.87 114.36 159.58 115.37 160.58 115.37 159.17 115.37 114.58 115.37 113.17 114.36 112.17" />
                                            <polygon class="cls-2"
                                                points="188.87 65.87 169.57 65.87 168.16 65.87 167.16 66.87 121.86 112.17 120.86 113.17 120.86 114.58 120.86 159.17 120.86 160.58 121.86 159.58 169.57 111.87 188.87 111.87 189.86 111.87 189.86 110.87 189.86 66.87 189.86 65.87 188.87 65.87" />
                                        </g>
                                        <g>
                                            <ellipse class="cls-3" cx="118.11" cy="40.75" rx="38.87"
                                                ry="38.25" />
                                            <circle class="cls-1" cx="118.11" cy="40.75" r="30.25" />
                                        </g>
                                    </g>
                                    <g>
                                        <path
                                            d="M0,166.15c.56-.1,1.36-.17,2.47-.17s1.93,.22,2.47,.65c.52,.41,.86,1.08,.86,1.87s-.26,1.46-.74,1.92c-.62,.59-1.55,.85-2.63,.85-.24,0-.46-.01-.62-.04v2.89H0v-7.98Zm1.81,3.67c.16,.04,.35,.05,.61,.05,.97,0,1.57-.49,1.57-1.32,0-.74-.52-1.19-1.43-1.19-.37,0-.62,.04-.76,.07v2.39Z" />
                                        <path
                                            d="M11.78,170.71h-2.97v1.92h3.32v1.5H6.97v-8.08h4.99v1.5h-3.15v1.68h2.97v1.49Z" />
                                        <path
                                            d="M20.22,171.03c-.04-.97-.07-2.15-.07-3.32h-.04c-.25,1.03-.59,2.18-.9,3.13l-.98,3.15h-1.43l-.86-3.12c-.26-.96-.54-2.11-.73-3.17h-.02c-.05,1.09-.08,2.34-.14,3.35l-.14,3.07h-1.69l.52-8.08h2.43l.79,2.7c.25,.92,.5,1.94,.68,2.89h.04c.23-.94,.5-2,.77-2.9l.86-2.69h2.39l.44,8.08h-1.79l-.12-3.09Z" />
                                        <path
                                            d="M23.53,166.15c.48-.1,1.45-.17,2.36-.17,1.12,0,1.8,.11,2.39,.46,.56,.3,.97,.85,.97,1.58s-.42,1.39-1.33,1.73v.02c.92,.25,1.61,.95,1.61,1.99,0,.73-.34,1.31-.84,1.71-.59,.47-1.57,.73-3.18,.73-.9,0-1.57-.06-1.98-.12v-7.94Zm1.81,3.09h.6c.96,0,1.48-.4,1.48-1s-.47-.94-1.29-.94c-.4,0-.62,.02-.78,.05v1.88Zm0,3.59c.18,.02,.4,.02,.71,.02,.83,0,1.56-.32,1.56-1.16s-.73-1.14-1.64-1.14h-.62v2.28Z" />
                                        <path
                                            d="M32.61,172.05l-.58,2.08h-1.89l2.47-8.08h2.4l2.51,8.08h-1.97l-.62-2.08h-2.31Zm2.05-1.37l-.5-1.71c-.14-.48-.29-1.08-.41-1.56h-.02c-.12,.48-.24,1.09-.37,1.56l-.48,1.71h1.79Z" />
                                        <path
                                            d="M38.6,174.12v-8.08h2.13l1.68,2.96c.48,.85,.96,1.86,1.32,2.77h.04c-.12-1.07-.16-2.16-.16-3.38v-2.35h1.68v8.08h-1.92l-1.73-3.12c-.48-.86-1.01-1.91-1.4-2.85h-.04c.05,1.08,.07,2.22,.07,3.54v2.43h-1.68Z" />
                                        <path
                                            d="M53.64,173.75c-.56,.19-1.63,.46-2.7,.46-1.48,0-2.54-.37-3.29-1.09-.74-.7-1.15-1.75-1.14-2.94,.01-2.69,1.97-4.22,4.62-4.22,1.04,0,1.85,.2,2.24,.4l-.38,1.46c-.44-.19-1-.35-1.88-.35-1.52,0-2.67,.86-2.67,2.61s1.04,2.65,2.54,2.65c.42,0,.76-.05,.9-.12v-1.69h-1.25v-1.43h3.01v4.26Z" />
                                        <path
                                            d="M56.89,166.04v4.65c0,1.39,.53,2.1,1.46,2.1s1.49-.67,1.49-2.1v-4.65h1.82v4.53c0,2.49-1.26,3.68-3.37,3.68s-3.24-1.13-3.24-3.71v-4.51h1.83Z" />
                                        <path
                                            d="M63.25,174.12v-8.08h2.13l1.68,2.96c.48,.85,.96,1.86,1.32,2.77h.04c-.12-1.07-.16-2.16-.16-3.38v-2.35h1.68v8.08h-1.92l-1.73-3.12c-.48-.86-1.01-1.91-1.4-2.85h-.04c.05,1.08,.07,2.22,.07,3.54v2.43h-1.68Z" />
                                        <path
                                            d="M73.41,172.05l-.58,2.08h-1.89l2.47-8.08h2.4l2.51,8.08h-1.97l-.62-2.08h-2.31Zm2.05-1.37l-.5-1.71c-.14-.48-.29-1.08-.41-1.56h-.02c-.12,.48-.24,1.09-.37,1.56l-.48,1.71h1.79Z" />
                                        <path
                                            d="M79.4,174.12v-8.08h2.13l1.68,2.96c.48,.85,.96,1.86,1.32,2.77h.04c-.12-1.07-.16-2.16-.16-3.38v-2.35h1.68v8.08h-1.92l-1.73-3.12c-.48-.86-1.01-1.91-1.4-2.85h-.04c.05,1.08,.07,2.22,.07,3.54v2.43h-1.68Z" />
                                        <path
                                            d="M90.17,172.24c.49,.25,1.25,.5,2.03,.5,.84,0,1.28-.35,1.28-.88s-.38-.79-1.35-1.14c-1.34-.47-2.22-1.21-2.22-2.39,0-1.38,1.15-2.43,3.06-2.43,.91,0,1.58,.19,2.06,.41l-.41,1.48c-.32-.16-.9-.38-1.69-.38s-1.18,.36-1.18,.78c0,.52,.46,.74,1.5,1.14,1.43,.53,2.1,1.27,2.1,2.41,0,1.36-1.04,2.52-3.26,2.52-.92,0-1.83-.25-2.29-.5l.37-1.51Z" />
                                        <path
                                            d="M98.41,166.04v4.65c0,1.39,.53,2.1,1.46,2.1s1.49-.67,1.49-2.1v-4.65h1.82v4.53c0,2.49-1.26,3.68-3.37,3.68s-3.24-1.13-3.24-3.71v-4.51h1.83Z" />
                                        <path
                                            d="M111.61,171.03c-.04-.97-.07-2.15-.07-3.32h-.04c-.25,1.03-.59,2.18-.9,3.13l-.98,3.15h-1.43l-.86-3.12c-.26-.96-.54-2.11-.73-3.17h-.02c-.05,1.09-.08,2.34-.14,3.35l-.14,3.07h-1.69l.52-8.08h2.44l.79,2.7c.25,.92,.5,1.94,.68,2.89h.04c.23-.94,.5-2,.77-2.9l.86-2.69h2.39l.44,8.08h-1.79l-.12-3.09Z" />
                                        <path
                                            d="M114.92,166.15c.48-.1,1.45-.17,2.36-.17,1.12,0,1.8,.11,2.39,.46,.56,.3,.97,.85,.97,1.58s-.42,1.39-1.33,1.73v.02c.92,.25,1.61,.95,1.61,1.99,0,.73-.34,1.31-.84,1.71-.59,.47-1.57,.73-3.18,.73-.9,0-1.57-.06-1.98-.12v-7.94Zm1.81,3.09h.6c.96,0,1.48-.4,1.48-1s-.47-.94-1.3-.94c-.4,0-.62,.02-.78,.05v1.88Zm0,3.59c.18,.02,.4,.02,.71,.02,.83,0,1.56-.32,1.56-1.16s-.73-1.14-1.64-1.14h-.62v2.28Z" />
                                        <path
                                            d="M126.98,170.71h-2.97v1.92h3.32v1.5h-5.16v-8.08h4.99v1.5h-3.15v1.68h2.97v1.49Z" />
                                        <path
                                            d="M128.58,166.15c.59-.1,1.46-.17,2.43-.17,1.2,0,2.04,.18,2.61,.64,.48,.38,.74,.95,.74,1.69,0,1.03-.73,1.74-1.43,1.99v.04c.56,.23,.87,.77,1.08,1.51,.25,.91,.5,1.97,.66,2.28h-1.87c-.13-.24-.32-.89-.56-1.88-.22-1.01-.56-1.28-1.31-1.3h-.55v3.18h-1.81v-7.98Zm1.81,3.48h.72c.91,0,1.45-.46,1.45-1.16,0-.74-.5-1.12-1.34-1.13-.44,0-.7,.04-.83,.06v2.23Z" />
                                        <path
                                            d="M144.95,171.03c-.04-.97-.07-2.15-.07-3.32h-.04c-.25,1.03-.59,2.18-.9,3.13l-.98,3.15h-1.43l-.86-3.12c-.26-.96-.54-2.11-.73-3.17h-.02c-.05,1.09-.08,2.34-.14,3.35l-.14,3.07h-1.69l.52-8.08h2.44l.79,2.7c.25,.92,.5,1.94,.68,2.89h.04c.23-.94,.5-2,.77-2.9l.86-2.69h2.39l.44,8.08h-1.79l-.12-3.09Z" />
                                        <path
                                            d="M150.12,172.05l-.58,2.08h-1.89l2.47-8.08h2.4l2.51,8.08h-1.97l-.62-2.08h-2.31Zm2.05-1.37l-.5-1.71c-.14-.48-.29-1.08-.41-1.56h-.02c-.12,.48-.24,1.09-.37,1.56l-.48,1.71h1.79Z" />
                                        <path
                                            d="M156.11,174.12v-8.08h2.13l1.68,2.96c.48,.85,.96,1.86,1.32,2.77h.04c-.12-1.07-.16-2.16-.16-3.38v-2.35h1.68v8.08h-1.92l-1.73-3.12c-.48-.86-1.01-1.91-1.4-2.85h-.04c.05,1.08,.07,2.22,.07,3.54v2.43h-1.68Z" />
                                        <path
                                            d="M166.21,166.04v4.65c0,1.39,.53,2.1,1.46,2.1s1.49-.67,1.49-2.1v-4.65h1.82v4.53c0,2.49-1.26,3.68-3.37,3.68s-3.24-1.13-3.24-3.71v-4.51h1.83Z" />
                                        <path
                                            d="M172.63,172.24c.49,.25,1.25,.5,2.03,.5,.84,0,1.28-.35,1.28-.88s-.38-.79-1.36-1.14c-1.34-.47-2.22-1.21-2.22-2.39,0-1.38,1.15-2.43,3.06-2.43,.91,0,1.58,.19,2.06,.41l-.41,1.48c-.32-.16-.9-.38-1.69-.38s-1.18,.36-1.18,.78c0,.52,.46,.74,1.5,1.14,1.43,.53,2.1,1.27,2.1,2.41,0,1.36-1.04,2.52-3.26,2.52-.92,0-1.83-.25-2.29-.5l.37-1.51Z" />
                                        <path d="M180.89,166.04v8.08h-1.83v-8.08h1.83Z" />
                                        <path
                                            d="M184.35,172.05l-.58,2.08h-1.89l2.47-8.08h2.4l2.51,8.08h-1.97l-.62-2.08h-2.31Zm2.05-1.37l-.5-1.71c-.14-.48-.29-1.08-.41-1.56h-.02c-.12,.48-.24,1.09-.37,1.56l-.48,1.71h1.79Z" />
                                        <path
                                            d="M192.77,166.15c.48-.1,1.45-.17,2.36-.17,1.12,0,1.8,.11,2.39,.46,.56,.3,.97,.85,.97,1.58s-.42,1.39-1.33,1.73v.02c.92,.25,1.61,.95,1.61,1.99,0,.73-.34,1.31-.84,1.71-.59,.47-1.57,.73-3.18,.73-.9,0-1.57-.06-1.98-.12v-7.94Zm1.81,3.09h.6c.96,0,1.48-.4,1.48-1s-.47-.94-1.3-.94c-.4,0-.62,.02-.78,.05v1.88Zm0,3.59c.18,.02,.4,.02,.71,.02,.83,0,1.56-.32,1.56-1.16s-.73-1.14-1.64-1.14h-.62v2.28Z" />
                                        <path
                                            d="M204.82,170.71h-2.97v1.92h3.32v1.5h-5.16v-8.08h4.99v1.5h-3.15v1.68h2.97v1.49Z" />
                                        <path
                                            d="M206.42,166.15c.59-.1,1.46-.17,2.43-.17,1.2,0,2.04,.18,2.61,.64,.48,.38,.74,.95,.74,1.69,0,1.03-.73,1.74-1.43,1.99v.04c.56,.23,.87,.77,1.08,1.51,.25,.91,.5,1.97,.66,2.28h-1.87c-.13-.24-.32-.89-.56-1.88-.22-1.01-.56-1.28-1.31-1.3h-.55v3.18h-1.81v-7.98Zm1.81,3.48h.72c.91,0,1.45-.46,1.45-1.16,0-.74-.5-1.12-1.34-1.13-.44,0-.7,.04-.83,.06v2.23Z" />
                                        <path
                                            d="M215.37,166.04v3.11h3.01v-3.11h1.82v8.08h-1.82v-3.38h-3.01v3.38h-1.83v-8.08h1.83Z" />
                                        <path
                                            d="M223.69,172.05l-.58,2.08h-1.89l2.47-8.08h2.4l2.51,8.08h-1.97l-.62-2.08h-2.31Zm2.05-1.37l-.5-1.71c-.14-.48-.29-1.08-.41-1.56h-.02c-.12,.48-.24,1.09-.37,1.56l-.48,1.71h1.79Z" />
                                        <path
                                            d="M229.68,166.15c.67-.11,1.55-.17,2.47-.17,1.54,0,2.53,.28,3.31,.86,.84,.62,1.37,1.62,1.37,3.05,0,1.55-.56,2.61-1.34,3.27-.85,.71-2.15,1.04-3.73,1.04-.95,0-1.62-.06-2.07-.12v-7.94Zm1.83,6.6c.16,.04,.41,.04,.64,.04,1.65,.01,2.73-.9,2.73-2.83,.01-1.68-.97-2.57-2.54-2.57-.41,0-.67,.04-.83,.07v5.29Z" />
                                    </g>
                                </svg>
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <svg class="h-auto hover:text-gray-900 dark:hover:text-white"
                                    viewBox="0 0 444.15 70.02" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="cls-2"
                                        d="M151.32,50.25c0,.9-.29,1.63-.91,2.2-.6,.55-1.41,.83-2.4,.83h-11.91v-3.04h11.91v-5.93h-8.89c-1,0-1.8-.29-2.41-.86-.6-.55-.89-1.29-.89-2.18v-4.66c0-.84,.33-1.57,.96-2.15,.64-.59,1.42-.88,2.35-.88h11.05v3.03h-11.05v4.66h8.89c.96,0,1.76,.29,2.37,.87,.63,.56,.94,1.29,.94,2.17" />
                                    <path class="cls-2"
                                        d="M170.23,50.25c0,.9-.31,1.63-.91,2.2-.62,.55-1.41,.83-2.4,.83h-10.01c-.97,0-1.76-.28-2.38-.83-.62-.58-.93-1.3-.93-2.2v-12.24h3.31v12.24h10.01v-12.24h3.31" />
                                    <path class="cls-2"
                                        d="M187.77,44.14h-3.3v-3.08h-8.6v12.21h-3.29v-15.26h11.89c2.19,0,3.3,1.02,3.3,3.06" />
                                    <path class="cls-2"
                                        d="M206.52,50.25c0,.9-.31,1.63-.93,2.2-.6,.55-1.39,.83-2.38,.83h-10.03c-.96,0-1.75-.28-2.37-.83-.63-.58-.95-1.3-.95-2.2v-12.24h3.31v12.24h10.03v-12.24h3.31" />
                                    <path class="cls-2"
                                        d="M225.71,53.28h-3.3v-12.21h-10.03v12.21h-3.31v-19.69h3.31v4.42h10.03c2.2,0,3.3,1.01,3.3,3.06" />
                                    <path class="cls-2"
                                        d="M231.56,47.18h10.02v3.06h-10.02m13.34-9.17c0-.9-.31-1.62-.93-2.19-.61-.58-1.4-.87-2.38-.87h-13.34v3.06h13.34v3.08h-10.02c-.96,0-1.76,.29-2.37,.86-.63,.58-.95,1.3-.95,2.17v3.06c0,.88,.32,1.6,.96,2.19,.62,.56,1.41,.85,2.35,.85h13.34v-12.21Z" />
                                    <path class="cls-2"
                                        d="M263.19,53.28h-3.31v-12.21h-9.18v12.21h-3.3v-15.27h12.48c2.2,0,3.31,1.01,3.31,3.06" />
                                    <path class="cls-2"
                                        d="M271.98,55.31c0,.86-.33,1.59-.96,2.17-.63,.59-1.43,.88-2.37,.88h-3.31v-3.04h3.31v-17.3h3.32" />
                                    <path class="cls-2"
                                        d="M277.85,47.18h10.02v3.06h-10.02m13.32-9.17c0-.9-.3-1.62-.93-2.19-.6-.58-1.39-.87-2.37-.87h-13.34v3.06h13.34v3.08h-10.02c-.98,0-1.76,.29-2.38,.86-.62,.58-.94,1.3-.94,2.17v3.06c0,.88,.32,1.6,.96,2.19,.6,.56,1.39,.85,2.36,.85h13.32v-12.21Z" />
                                    <polyline class="cls-2"
                                        points="309.55 38.01 300.39 59.42 297.03 59.42 299.54 53.25 292.92 38.01 296.36 38.01 301.22 50.16 306.05 38.01" />
                                    <path class="cls-2"
                                        d="M314.55,47.18h10.04v3.06h-10.04m13.34-9.17c0-.9-.31-1.62-.93-2.19-.63-.58-1.41-.87-2.37-.87h-13.33v3.06h13.33v3.08h-10.04c-.96,0-1.76,.29-2.37,.86-.62,.58-.92,1.3-.92,2.17v3.06c0,.88,.31,1.6,.94,2.19,.61,.56,1.42,.85,2.36,.85h13.34v-12.21Z" />
                                    <polyline class="cls-2"
                                        points="349.86 36.2 343.15 36.2 343.15 52.85 339.86 52.85 339.86 36.2 333.25 36.2 333.25 33.16 349.86 33.16" />
                                    <path class="cls-2"
                                        d="M355.16,40.63h10.04v3.09h-10.04m13.34-3.09c0-.88-.31-1.61-.93-2.18-.61-.57-1.4-.86-2.37-.86h-10.04c-1,0-1.82,.28-2.39,.83-.62,.54-.9,1.29-.9,2.22v9.18c0,.9,.31,1.63,.93,2.2,.63,.54,1.4,.84,2.36,.84h12.47v-3.05h-12.47v-3.05h10.04c1.01,0,1.79-.28,2.41-.83,.59-.56,.9-1.3,.9-2.2v-3.09Z" />
                                    <path class="cls-2"
                                        d="M386.8,52.85h-3.32v-12.23h-9.17v12.23h-3.31v-15.27h12.48c2.19,0,3.32,1.02,3.32,3.05" />
                                    <path class="cls-2"
                                        d="M392.32,46.75h10.04v3.05h-10.04m13.34-9.18c0-.88-.31-1.61-.93-2.18-.6-.57-1.41-.86-2.37-.86h-13.34v3.05h13.34v3.09h-10.04c-.97,0-1.75,.29-2.36,.86-.63,.57-.94,1.31-.94,2.18v3.05c0,.89,.32,1.62,.95,2.18,.62,.57,1.42,.87,2.35,.87h13.34v-12.23Z" />
                                    <path class="cls-2"
                                        d="M411.57,40.63h10.02v9.17h-10.02m13.33-12.22h-13.33c-.99,0-1.78,.28-2.39,.83-.61,.57-.92,1.31-.92,2.21v9.27c0,.82,.33,1.53,.98,2.1,.66,.56,1.44,.86,2.33,.86h10.02v2.03h-13.36v3.05h13.36c2.19,0,3.31-1.02,3.31-3.05v-17.3Z" />
                                    <path class="cls-2"
                                        d="M430.82,46.75h10.02v3.05h-10.02m13.33-9.18c0-.88-.3-1.61-.93-2.18-.6-.57-1.41-.86-2.37-.86h-13.33v3.05h13.33v3.09h-10.02c-.98,0-1.76,.29-2.36,.86-.63,.57-.95,1.31-.95,2.18v3.05c0,.89,.32,1.62,.95,2.18,.62,.57,1.41,.87,2.36,.87h13.33v-12.23Z" />
                                    <path class="cls-1"
                                        d="M41.57,28.86C41.57,12.92,69.46,0,103.86,0c20.08,0,37.94,4.41,49.33,11.26-10.98-2.75-24.14-4.35-38.31-4.35-38.19,0-69.13,11.61-69.13,25.95,0,10.71,17.21,19.88,41.81,23.87-26.49-3.33-45.99-14.53-45.99-27.88" />
                                    <path class="cls-1"
                                        d="M101.97,40.06c0-6.63-6.26-12.74-16.81-17.62,24.11,4.66,40.02,12.6,40.02,21.63,0,14.33-40.19,25.95-89.74,25.95-12.59,0-24.57-.75-35.44-2.1,6.74,.64,13.83,1.01,21.13,1.01,44.66,0,80.84-12.93,80.84-28.87" />
                                </svg>
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <svg class="h-auto hover:text-gray-900 dark:hover:text-white"
                                    viewBox="0 0 187.09 52.31" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="cls-1"
                                        d="M42.07,0H4.78S.27-.26,0,4.78V25.35s.31,4.51,4.78,4.51h2.87s3.1-1.25,3.1,3.53c0,0-.53,3.9,2.79,6.02,0,0,3.72,2.26,6.37-1.46l11.68-18.18s1.81-2.79-2.17-2.79h-3.98s-3.14,.26-1.41-2.79l2.66-6.64-10.75,11.95s-1.69,3.05,2.07,2.79h4.83s1.99,.56,0,3.4l-5.58,8.54s-1.46,2.55-1.73-1.24v-3.13s-.18-4.51-4.16-4.51H7.25s-2.47,.75-2.47-4.03V7.38s-.85-2.6,3-2.6h31.28c3.85,0,3,2.6,3,2.6v13.94c0,4.78-2.47,4.03-2.47,4.03h-4.12c-3.98,0-4.16,4.51-4.16,4.51v8.76s.49,2.33-3.43,2.41h-.32c-.17,0-.35,0-.54-.02v.02H13.08c-1.21,0-2.19,.98-2.19,2.19s.98,2.19,2.19,2.19H29.89l.57,.02c.42,.02,.8,0,1.16-.02h.57c.4,0,.77-.11,1.09-.29,3.24-1.02,2.82-4.1,2.82-4.1v-7.3l-.02-.31c0-4.78,3.1-3.53,3.1-3.53h2.87c4.46,0,4.78-4.51,4.78-4.51V4.78C46.58-.26,42.07,0,42.07,0h0Z" />
                                    <path class="cls-1"
                                        d="M28.54,52.31c1.2,0,2.17-.97,2.17-2.17s-.97-2.17-2.17-2.17h-10.82c-1.2,0-2.17,.97-2.17,2.17s.97,2.17,2.17,2.17h10.82Z" />
                                    <polygon class="cls-2"
                                        points="55.6 18.22 64.38 18.22 63.79 22.45 61.51 22.33 60.26 31.23 56.08 31.23 57.33 22.33 55.01 22.45 55.6 18.22 55.6 18.22" />
                                    <polygon class="cls-2"
                                        points="65.42 18.22 73.15 18.22 72.65 21.78 69.13 21.78 68.95 23.02 72.17 23.02 71.7 26.41 68.48 26.41 68.3 27.68 71.95 27.68 71.45 31.23 63.6 31.23 65.42 18.22 65.42 18.22" />
                                    <path class="cls-2"
                                        d="M74.91,18.22h4.02l2.74,7.22h.12c-.02-1.09-.04-2.21,.11-3.32l.55-3.9h4l-1.82,13.01h-4l-2.72-6.83h-.12c.01,.9,.02,1.74-.1,2.61l-.59,4.23h-4l1.82-13.01h0Z" />
                                    <path class="cls-2"
                                        d="M91.58,26.53l1.32-3.98h.15c0,.55,0,1.12,.04,1.68l.17,2.3h-1.68Zm-1.18,3.09h3.16l.16,1.62h4.42l-2.28-13.01h-4.62l-5.81,13.01h4.42l.56-1.62h0Z" />
                                    <path class="cls-2"
                                        d="M112.24,23.57c-.33,2.13-.58,3.9-2.16,5.55-1.43,1.5-3.42,2.31-5.2,2.31-3.51,0-6-2.45-5.42-6.62,.59-4.24,3.71-6.79,7.32-6.79,2,0,4.58,1.12,5.17,3.35l-4.13,1.61c-.23-.65-.78-.99-1.45-.99-1.49,0-2.52,1.44-2.74,3.01-.2,1.44,.41,2.77,1.76,2.77,.66,0,1.54-.34,1.85-1.12h-1.89l.43-3.08h6.45Z" />
                                    <path class="cls-2"
                                        d="M117.72,26.53l1.32-3.98h.15c0,.55,0,1.12,.04,1.68l.17,2.3h-1.68Zm-1.18,3.09h3.16l.16,1.62h4.42l-2.28-13.01h-4.62l-5.82,13.01h4.42l.56-1.62h0Z" />
                                    <path class="cls-2"
                                        d="M56.92,33.52h4.02l2.74,7.22h.12c-.02-1.09-.04-2.21,.11-3.31l.55-3.9h4l-1.82,13.02h-4l-2.72-6.84h-.12c.01,.9,.02,1.74-.1,2.61l-.59,4.23h-4l1.82-13.02h0Z" />
                                    <path class="cls-2"
                                        d="M73.59,41.84l1.32-3.97h.15c0,.55,0,1.12,.04,1.68l.17,2.3h-1.68Zm-1.18,3.08h3.16l.15,1.62h4.42l-2.28-13.02h-4.62l-5.81,13.02h4.42l.56-1.62h0Z" />
                                    <path class="cls-2"
                                        d="M82.36,41.88l.19,.19c.66,.65,1.48,1.19,2.44,1.19,.41,0,1.1-.19,1.18-.78,.08-.58-.46-.64-.83-.72l-.81-.17c-1.59-.33-2.81-1.41-2.52-3.45,.43-3.09,3.16-4.81,5.66-4.81,1.31,0,2.46,.36,3.48,1.14l-1.59,3.33c-.64-.55-1.38-.98-2.28-.98-.37,0-.93,.16-1,.69-.07,.48,.45,.55,.75,.64l.91,.24c1.7,.45,2.83,1.52,2.52,3.72-.43,3.1-3.14,4.64-5.63,4.64-1.45,0-3.06-.45-4.26-1.19l1.79-3.67h0Z" />
                                    <polygon class="cls-2"
                                        points="92.97 33.52 97.15 33.52 95.33 46.54 91.16 46.54 92.97 33.52 92.97 33.52" />
                                    <path class="cls-2"
                                        d="M104.46,37.6c1.33,0,1.99,1.15,1.8,2.53-.21,1.48-1.23,2.5-2.5,2.5s-2.01-1.01-1.8-2.5c.19-1.38,1.18-2.53,2.51-2.53h0Zm.6-4.28c-3.49,0-6.73,2.66-7.3,6.74-.58,4.17,1.92,6.67,5.43,6.67s6.71-2.5,7.29-6.67c.57-4.08-1.92-6.74-5.42-6.74h0Z" />
                                    <path class="cls-2"
                                        d="M112.81,33.52h4.02l2.75,7.22h.12c-.02-1.09-.04-2.21,.11-3.31l.55-3.9h4l-1.82,13.02h-4l-2.72-6.84h-.12c.01,.9,.02,1.74-.11,2.61l-.59,4.23h-4l1.82-13.02h0Z" />
                                    <path class="cls-2"
                                        d="M129.47,41.84l1.32-3.97h.15c0,.55,0,1.12,.04,1.68l.17,2.3h-1.68Zm-1.18,3.08h3.16l.16,1.62h4.42l-2.28-13.02h-4.62l-5.82,13.02h4.42l.56-1.62h0Z" />
                                    <polygon class="cls-2"
                                        points="138.73 33.52 142.9 33.52 141.67 42.36 145.18 42.36 144.59 46.54 136.91 46.54 138.73 33.52 138.73 33.52" />
                                    <path class="cls-2"
                                        d="M152.36,42.41l.14-.99h.16c.33,0,.75-.04,.67,.48-.07,.48-.44,.52-.77,.52h-.2Zm-2.69,4.33h3.06c1.08,0,2.34-.49,2.54-1.94,.12-.84-.23-1.4-.87-1.67v-.06c.58-.2,.94-.8,1.02-1.41,.23-1.62-.95-1.94-2.15-1.94h-2.62l-.98,7.02h0Zm2.49-2.85h.22c.36,0,.93,0,.84,.58-.08,.58-.61,.59-.98,.59h-.25l.16-1.17h0Z" />
                                    <polygon class="cls-2"
                                        points="156.67 39.73 160.83 39.73 160.56 41.64 158.66 41.64 158.57 42.32 160.3 42.32 160.05 44.14 158.31 44.14 158.22 44.83 160.18 44.83 159.91 46.75 155.68 46.75 156.67 39.73 156.67 39.73" />
                                    <path class="cls-2"
                                        d="M163.77,41.64h.17c.39,0,.71,.06,.64,.6-.07,.52-.45,.59-.82,.59h-.16l.17-1.19h0Zm-2.91,5.1h2.2l.31-2.25h.04l.67,2.25h2.6l-1.03-2.28c-.09-.21-.22-.32-.32-.42v-.05c.89-.32,1.32-.76,1.46-1.83,.25-1.77-.84-2.44-2.24-2.44h-2.72l-.98,7.02h0Z" />
                                    <polygon class="cls-2"
                                        points="168.06 39.73 170.22 39.73 169.89 42.09 171.27 42.09 171.6 39.73 173.77 39.73 172.79 46.75 170.62 46.75 170.96 44.31 169.58 44.31 169.24 46.75 167.07 46.75 168.06 39.73 168.06 39.73" />
                                    <path class="cls-2"
                                        d="M176.57,44.21l.71-2.14h.08c0,.3,0,.61,.02,.9l.09,1.24h-.9Zm-.64,1.67h1.7l.08,.87h2.38l-1.23-7.02h-2.49l-3.14,7.02h2.38l.3-.87h0Z" />
                                    <path class="cls-2"
                                        d="M183.51,41.93h.14c.83,0,1.27,.42,1.13,1.4-.13,.92-.76,1.31-1.51,1.31h-.14l.38-2.71h0Zm-2.93,4.82h2.85c1.82,0,3.3-1.32,3.59-3.4,.36-2.58-1.09-3.61-3.17-3.61h-2.29l-.98,7.02h0Z" />
                                </svg>
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <svg class="h-auto hover:text-gray-900 dark:hover:text-white"
                                    viewBox="0 0 444.15 70.02" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="cls-2"
                                        d="M151.32,50.25c0,.9-.29,1.63-.91,2.2-.6,.55-1.41,.83-2.4,.83h-11.91v-3.04h11.91v-5.93h-8.89c-1,0-1.8-.29-2.41-.86-.6-.55-.89-1.29-.89-2.18v-4.66c0-.84,.33-1.57,.96-2.15,.64-.59,1.42-.88,2.35-.88h11.05v3.03h-11.05v4.66h8.89c.96,0,1.76,.29,2.37,.87,.63,.56,.94,1.29,.94,2.17" />
                                    <path class="cls-2"
                                        d="M170.23,50.25c0,.9-.31,1.63-.91,2.2-.62,.55-1.41,.83-2.4,.83h-10.01c-.97,0-1.76-.28-2.38-.83-.62-.58-.93-1.3-.93-2.2v-12.24h3.31v12.24h10.01v-12.24h3.31" />
                                    <path class="cls-2"
                                        d="M187.77,44.14h-3.3v-3.08h-8.6v12.21h-3.29v-15.26h11.89c2.19,0,3.3,1.02,3.3,3.06" />
                                    <path class="cls-2"
                                        d="M206.52,50.25c0,.9-.31,1.63-.93,2.2-.6,.55-1.39,.83-2.38,.83h-10.03c-.96,0-1.75-.28-2.37-.83-.63-.58-.95-1.3-.95-2.2v-12.24h3.31v12.24h10.03v-12.24h3.31" />
                                    <path class="cls-2"
                                        d="M225.71,53.28h-3.3v-12.21h-10.03v12.21h-3.31v-19.69h3.31v4.42h10.03c2.2,0,3.3,1.01,3.3,3.06" />
                                    <path class="cls-2"
                                        d="M231.56,47.18h10.02v3.06h-10.02m13.34-9.17c0-.9-.31-1.62-.93-2.19-.61-.58-1.4-.87-2.38-.87h-13.34v3.06h13.34v3.08h-10.02c-.96,0-1.76,.29-2.37,.86-.63,.58-.95,1.3-.95,2.17v3.06c0,.88,.32,1.6,.96,2.19,.62,.56,1.41,.85,2.35,.85h13.34v-12.21Z" />
                                    <path class="cls-2"
                                        d="M263.19,53.28h-3.31v-12.21h-9.18v12.21h-3.3v-15.27h12.48c2.2,0,3.31,1.01,3.31,3.06" />
                                    <path class="cls-2"
                                        d="M271.98,55.31c0,.86-.33,1.59-.96,2.17-.63,.59-1.43,.88-2.37,.88h-3.31v-3.04h3.31v-17.3h3.32" />
                                    <path class="cls-2"
                                        d="M277.85,47.18h10.02v3.06h-10.02m13.32-9.17c0-.9-.3-1.62-.93-2.19-.6-.58-1.39-.87-2.37-.87h-13.34v3.06h13.34v3.08h-10.02c-.98,0-1.76,.29-2.38,.86-.62,.58-.94,1.3-.94,2.17v3.06c0,.88,.32,1.6,.96,2.19,.6,.56,1.39,.85,2.36,.85h13.32v-12.21Z" />
                                    <polyline class="cls-2"
                                        points="309.55 38.01 300.39 59.42 297.03 59.42 299.54 53.25 292.92 38.01 296.36 38.01 301.22 50.16 306.05 38.01" />
                                    <path class="cls-2"
                                        d="M314.55,47.18h10.04v3.06h-10.04m13.34-9.17c0-.9-.31-1.62-.93-2.19-.63-.58-1.41-.87-2.37-.87h-13.33v3.06h13.33v3.08h-10.04c-.96,0-1.76,.29-2.37,.86-.62,.58-.92,1.3-.92,2.17v3.06c0,.88,.31,1.6,.94,2.19,.61,.56,1.42,.85,2.36,.85h13.34v-12.21Z" />
                                    <polyline class="cls-2"
                                        points="349.86 36.2 343.15 36.2 343.15 52.85 339.86 52.85 339.86 36.2 333.25 36.2 333.25 33.16 349.86 33.16" />
                                    <path class="cls-2"
                                        d="M355.16,40.63h10.04v3.09h-10.04m13.34-3.09c0-.88-.31-1.61-.93-2.18-.61-.57-1.4-.86-2.37-.86h-10.04c-1,0-1.82,.28-2.39,.83-.62,.54-.9,1.29-.9,2.22v9.18c0,.9,.31,1.63,.93,2.2,.63,.54,1.4,.84,2.36,.84h12.47v-3.05h-12.47v-3.05h10.04c1.01,0,1.79-.28,2.41-.83,.59-.56,.9-1.3,.9-2.2v-3.09Z" />
                                    <path class="cls-2"
                                        d="M386.8,52.85h-3.32v-12.23h-9.17v12.23h-3.31v-15.27h12.48c2.19,0,3.32,1.02,3.32,3.05" />
                                    <path class="cls-2"
                                        d="M392.32,46.75h10.04v3.05h-10.04m13.34-9.18c0-.88-.31-1.61-.93-2.18-.6-.57-1.41-.86-2.37-.86h-13.34v3.05h13.34v3.09h-10.04c-.97,0-1.75,.29-2.36,.86-.63,.57-.94,1.31-.94,2.18v3.05c0,.89,.32,1.62,.95,2.18,.62,.57,1.42,.87,2.35,.87h13.34v-12.23Z" />
                                    <path class="cls-2"
                                        d="M411.57,40.63h10.02v9.17h-10.02m13.33-12.22h-13.33c-.99,0-1.78,.28-2.39,.83-.61,.57-.92,1.31-.92,2.21v9.27c0,.82,.33,1.53,.98,2.1,.66,.56,1.44,.86,2.33,.86h10.02v2.03h-13.36v3.05h13.36c2.19,0,3.31-1.02,3.31-3.05v-17.3Z" />
                                    <path class="cls-2"
                                        d="M430.82,46.75h10.02v3.05h-10.02m13.33-9.18c0-.88-.3-1.61-.93-2.18-.6-.57-1.41-.86-2.37-.86h-13.33v3.05h13.33v3.09h-10.02c-.98,0-1.76,.29-2.36,.86-.63,.57-.95,1.31-.95,2.18v3.05c0,.89,.32,1.62,.95,2.18,.62,.57,1.41,.87,2.36,.87h13.33v-12.23Z" />
                                    <path class="cls-1"
                                        d="M41.57,28.86C41.57,12.92,69.46,0,103.86,0c20.08,0,37.94,4.41,49.33,11.26-10.98-2.75-24.14-4.35-38.31-4.35-38.19,0-69.13,11.61-69.13,25.95,0,10.71,17.21,19.88,41.81,23.87-26.49-3.33-45.99-14.53-45.99-27.88" />
                                    <path class="cls-1"
                                        d="M101.97,40.06c0-6.63-6.26-12.74-16.81-17.62,24.11,4.66,40.02,12.6,40.02,21.63,0,14.33-40.19,25.95-89.74,25.95-12.59,0-24.57-.75-35.44-2.1,6.74,.64,13.83,1.01,21.13,1.01,44.66,0,80.84-12.93,80.84-28.87" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="{{ asset('assets/js/script.js') }}"></script>

        @push('scripts')
            <script>
                const text =
                    "Empowering Innovation Through Electrical Engineering Excellence. Elevate Your Career with Expert-Led Certification Classes.";
                const typingSpeed = 30; // Adjust this value to control typing speed in milliseconds

                let index = 0;

                function typeText() {
                    if (index < text.length) {
                        document.getElementById("typing-text").innerHTML += text.charAt(index);
                        index++;
                        setTimeout(typeText, typingSpeed);
                    }
                }

                document.addEventListener("DOMContentLoaded", function() {
                    setTimeout(typeText, 1000);
                });
            </script>

        </div>
    </body>



    <footer class="bg-white dark:bg-gray-900 p-3">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <div>
                        {{-- <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a> --}}
                        <svg id="logo-54" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 169.15 40">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: red;
                                    }
                                </style>
                            </defs>
                            <path class="cls-1"
                                d="M51.18,28h11.95v-3.6h-7.7V10.84h-4.25V28Zm19.03-2.4c-1.7,0-2.59-1.49-2.59-3.72s.89-3.74,2.59-3.74,2.62,1.51,2.62,3.74-.91,3.72-2.62,3.72Zm.02,2.78c3.96,0,6.55-2.81,6.55-6.5s-2.59-6.5-6.55-6.5-6.58,2.81-6.58,6.5,2.64,6.5,6.58,6.5Zm13.41,3.86c1.82,0,3.43-.41,4.51-1.37,.98-.89,1.63-2.23,1.63-4.08V15.71h-3.74v1.32h-.05c-.72-1.03-1.82-1.68-3.46-1.68-3.05,0-5.16,2.54-5.16,6.14s2.57,5.83,5.33,5.83c1.49,0,2.42-.6,3.14-1.42h.1v1.22c0,1.49-.7,2.35-2.35,2.35-1.3,0-1.94-.55-2.16-1.2h-3.79c.38,2.57,2.62,3.96,6,3.96Zm-.02-7.82c-1.46,0-2.42-1.2-2.42-3.05s.96-3.07,2.42-3.07c1.63,0,2.5,1.39,2.5,3.05s-.79,3.07-2.5,3.07Zm13.87,1.18c-1.7,0-2.59-1.49-2.59-3.72s.89-3.74,2.59-3.74,2.62,1.51,2.62,3.74-.91,3.72-2.62,3.72Zm.02,2.78c3.96,0,6.55-2.81,6.55-6.5s-2.59-6.5-6.55-6.5-6.58,2.81-6.58,6.5,2.64,6.5,6.58,6.5Zm7.69-.38h3.91V15.71h-3.91v12.29Zm0-13.99h3.91v-3.17h-3.91v3.17Zm5.61,18.05h3.91v-5.33h.05c.77,1.03,1.9,1.66,3.48,1.66,3.22,0,5.35-2.54,5.35-6.53,0-3.7-1.99-6.5-5.26-6.5-1.68,0-2.88,.74-3.72,1.85h-.07v-1.49h-3.74v16.34Zm6.43-6.7c-1.68,0-2.64-1.37-2.64-3.36s.86-3.5,2.57-3.5,2.47,1.39,2.47,3.5-.91,3.36-2.4,3.36Zm12.73,3.02c3.22,0,5.59-1.39,5.59-4.08,0-3.14-2.54-3.7-4.7-4.06-1.56-.29-2.95-.41-2.95-1.27,0-.77,.74-1.13,1.7-1.13,1.08,0,1.82,.34,1.97,1.44h3.6c-.19-2.42-2.06-3.94-5.54-3.94-2.9,0-5.3,1.34-5.3,3.94,0,2.88,2.28,3.46,4.42,3.82,1.63,.29,3.12,.41,3.12,1.51,0,.79-.74,1.22-1.92,1.22-1.3,0-2.11-.6-2.26-1.82h-3.7c.12,2.71,2.38,4.37,5.98,4.37Zm10.91-.02c1.7,0,2.78-.67,3.67-1.87h.07v1.51h3.74V15.71h-3.91v6.86c0,1.46-.82,2.47-2.16,2.47-1.25,0-1.85-.74-1.85-2.09v-7.25h-3.89v8.06c0,2.74,1.49,4.58,4.32,4.58Zm9.19-.36h3.91v-6.89c0-1.46,.72-2.5,1.94-2.5s1.73,.77,1.73,2.09v7.3h3.91v-6.89c0-1.46,.7-2.5,1.94-2.5,1.18,0,1.73,.77,1.73,2.09v7.3h3.91v-7.99c0-2.76-1.39-4.66-4.18-4.66-1.58,0-2.9,.67-3.86,2.16h-.05c-.62-1.32-1.85-2.16-3.46-2.16-1.78,0-2.95,.84-3.72,2.11h-.07v-1.75h-3.74v12.29ZM20,0C8.95,0,0,8.95,0,20s8.95,20,20,20,20-8.95,20-20S31.05,0,20,0Zm8.81,22.21l-13.35,9.51c-.96,.68-2,.04-1.7-1.04l2.46-8.74,5.58-1.97h-6.85v.03h-3.51c-1.12,0-1.28-1.47-.24-2.21l13.35-9.51c.96-.68,2-.04,1.7,1.04l-3.01,10.68h5.33c1.12,0,1.28,1.47,.25,2.21Z" />
                        </svg>
                        <div class="mt-6">
                            <p class="text-gray-500 dark:text-gray-400">For general Inquiries</p>
                            <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">admin@myms.co</h2>
                        </div>
                    </div>

                </div>



                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://loremflickr.com/2500/1600/funny" class="hover:underline">Engineering</a>
                            </li>
                            <li>
                                <a href="https://loremflickr.com/2500/1600/funny" class="hover:underline">Academy</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://loremflickr.com/2500/1600/funny" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://loremflickr.com/2500/1600/funny" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                        href="https://flowbite.com/" class="hover:underline">myms.co™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    </html>
