<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Registration') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert />

            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 text-gray-500 dark:text-gray-400">
                <h2 class="mb-6 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Register New Course
                </h2>
                <form action="{{ route('student-registration.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="mb-6">
                        <label for="ic_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            IC Number
                        </label>
                        <input type="text" name="ic_number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="IC Number" required>
                    </div>

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Name
                        </label>
                        <input type="text" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Name" required>
                    </div>

                    <div class="mb-6">
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Contact
                        </label>
                        <input type="text" name="contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="011-0101010" required>
                    </div>


                    <div class="mb-6">
                        <label for="company_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Company Name
                        </label>
                        <input type="text" name="company_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Company Name" required>
                    </div>

                    <div class="mb-6">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Address
                        </label>
                        <textarea id="address" rows="4" name="address"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Address"></textarea>
                    </div>


                    <div class="mb-6">
                        <label for="is_sponsored" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Sponsorship
                        </label>
                        <select name="is_sponsored"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="competency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Competency
                        </label>
                        <select name="competency"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">Level 1</option>
                            <option value="2">Level 2</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Position
                        </label>

                        <input type="text" name="position"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="position" required>
                    </div>


                    @livewire('course-list')

                    <x-reset-button />
                    <button type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Register
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
