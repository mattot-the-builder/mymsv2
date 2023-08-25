<div class="px-6 py-6 lg:px-8">
    <h3 class=" mb-4 text-xl font-medium text-gray-900 dark:text-white">Add New Course</h3>
    <form class="space-y-6" method="POST" action="{{ route('course.store') }}">
        <pre>{{ route('course.store') }}</pre>
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Course Name
            </label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Course Name" required>
        </div>
        <div>
            <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Course Details
            </label>
            <textarea name="details" id="details" placeholder="Type course details here"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required></textarea>
        </div>
        {{-- <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add Course
        </button> --}}
        <button type="reset">reset</button>
        <button type="submit">add</button>
    </form>
</div>