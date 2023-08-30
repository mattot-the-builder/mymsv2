<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    </script>
</head>

<body class="font-sans antialiased overflow-x-hidden">
    <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="p-6 mx-auto">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('assets/js/script.js') }}"></script>
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
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">myms.co™</a>. All Rights Reserved.
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