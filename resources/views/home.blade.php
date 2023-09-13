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

                <section class="bg-white dark:bg-gray-900 pb-12">
                    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                        <h2
                            class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                            In collaboration with:
                        </h2>
                        <div
                            class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                            <a href="#" class="flex justify-center items-center">
                                <img src="{{ asset('assets/img/logo/hrdf.svg') }}" alt="">
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <img src="{{ asset('assets/img/logo/mbot.svg') }}" alt="">
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <img src="{{ asset('assets/img/logo/tnb.svg') }}" alt="">
                            </a>
                            <a href="#" class="flex justify-center items-center">
                                <img src="{{ asset('assets/img/logo/st.svg') }}" alt="">
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
