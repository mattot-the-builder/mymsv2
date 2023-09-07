<div>
    <div class="mb-6">
        <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
            Course</label>
        <select name="course_id" wire:model="course_id" wire:change='getCourse' class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Select Course</option>
            @foreach (App\Models\Course::all() as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
        </select>

        <label for="details" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">
            Registration free : RM {{ $fee }} <br>
            Date : {{ $date }} <br>
            Time : {{ $started_at . ' - ' . $ended_at }} <br>
        </label>

    </div>

    <input type="number" value="{{ $fee }}" name="amount" hidden>

</div>