<div class="px-6 py-6 lg:px-8">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Add New Course
    </h2>
    <form class="space-y-6" method="POST" action="{{ route('course.store') }}">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Course Name
            </label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Course Name" required>
        </div>

        @livewire('course-content')
        <x-submit-button />
        <x-reset-button />
    </form>
</div>