<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <form action="{{ $course ? route('course.update', $course->id) : route('course.store') }}" method="POST">
        @csrf

        @if ($course)
           @method('PATCH')
       @endif

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Item
                </th>
                <th scope="col" class="px-6 py-3">
                    Attribute
                </th>
            </tr>
        </thead>

        <tbody>

        @if ($course)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Course ID
                </th>
                <td class="px-6 py-4">
                    <input type="number" name="id" value="{{ $course->id }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required readonly>
                </td>
            </tr>
        @endif

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Course Name
                </th>
                <td class="px-6 py-4">
                    <input type="text" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required wire:model="name">
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Contents
                </th>
                <td class="px-6 py-4">
                    <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400 my-2">
                        <input type="hidden" name="contents" value="{{ json_encode($contents) }}" />
                        @foreach($contents as $content)
                        <li>
                            <span class="text-gray-900 dark:text-white">{{ str_replace(['[', ']', '"'], '', $content) }}<span>
                        </li>
                        @endforeach
                    </ol>

                    <input type="text" name="content"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Content" wire:model="content">
                    <button type="button" wire:click="addContent"
                        class="mr-5 font-medium text-blue-600 dark:text-blue-500 hover:underline">Add</button>
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Date
                </th>
                <td class="px-6 py-4">
                    <input type="date" wire:model="date" name="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Started At
                </th>
                <td class="px-6 py-4">
                    <input type="time" wire:model="started_at" name="started_at"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Ended At
                </th>
                <td class="px-6 py-4">
                    <input type="time" wire:model="ended_at" name="ended_at"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Fee
                </th>
                <td class="px-6 py-4">
                    <input type="number" name="fee" name="fee"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required wire:model="fee">
                </td>
            </tr>

        </tbody>

        <tfoot>
            <tr class="font-semibold text-gray-900 dark:text-white">
                <td class="px-6 py-3" colspan="2">
                    <x-reset-button />

                    @if ($course)
                    <button type="button" wire:click="update"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Update
                    </button>
                    @else
                    <x-submit-button />
                    @endif
                </td>
            </tr>
        </tfoot>

    </form>
</table>
