<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registration') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-500 dark:text-gray-400">
                <h2 class="mb-6 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Register New Course
                </h2>
                <form action="{{ route('student-registration.checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-6">
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Contact
                        </label>
                        <input type="text" name="contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="011-0101010" required>
                    </div>
                    <div class="mb-6">
                        <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Course</label>
                        <select name="course"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="payment_method"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment
                            Method</label>
                        <select name="payment_method"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>FPX</option>
                            <option>Transfer</option>
                        </select>
                    </div>
                    <label for="registration_fee" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">
                        Registration free : {{ __('RM 50') }}
                    </label>
                    <input type="number" hidden value="50.00" name="amount">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed
                        to Payment</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>