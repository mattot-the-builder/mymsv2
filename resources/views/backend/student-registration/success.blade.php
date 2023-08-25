<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Payment Success') }}
        </h2>
    </x-slot>

    <div class="py-12 px-3">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-500 dark:text-gray-400">
                <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                    Thank you for registering with us 🚀
                </h1>

                <p class="mt-3 text-gray-500 dark:text-gray-400 leading-relaxed">
                    The order confirmation has been sent to your email address.
                </p>



                <div class="mt-6 mr-12">
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                        Course Registered
                    </p>
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        {{ __('Course Name') }}
                    </h1>
                </div>

                <div class="mt-6 mr-12">
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                        Total Amount
                    </p>
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        RM {{ __('50.00') }}
                    </h1>
                </div>

                <a href="{{ route('dashboard') }}" type="button"
                    class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Dashboard
                </a>
            </div>

        </div>


    </div>
</x-app-layout>