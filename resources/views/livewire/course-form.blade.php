{{-- <div class="px-6 py-6 lg:px-8">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Add New Course
    </h2>
    <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Course Name
        </label>
        <input type="text" name="name" id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Course Name" required wire:model="name">
    </div>
    <div>

        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Course Contents</h2>

        <ol class="max-w-md space-y-1 text-gray-500 list-decimal list-inside dark:text-gray-400">

            @foreach($contents as $content)
            <li>
                <span class="font-semibold text-gray-900 dark:text-white">{{ $content }}<span>
            </li>
            @endforeach
        </ol>


        <input type="text" name="contents" id="contents"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Course content" required wire:model="content">

        <button type="button" wire:click="addContent"
            class="mr-5 font-medium text-blue-600 dark:text-blue-500 hover:underline">Add</button>

    </div>

    <div>
        <label for="started_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Started At
        </label>
        <input type="datetime-local" name="started_at" id="started_at"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full md:w-1/2 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Started At" required wire:model="started_at">
    </div>

    <div>
        <label for="ended_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Ended At
        </label>
        <input type="datetime-local" name="ended_at" id="ended_at"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full md:w-1/2 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Ended At" required wire:model="ended_at">
    </div>

    <div>
        <label for="fee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Fee
        </label>
        <input type="number" name="fee" id="fee"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full md:w-1/2 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Fee" required wire:model="fee">
    </div>

    <button type="button" wire:click="store"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Submit
    </button>
    <x-reset-button />
</div> --}}

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Course Name
            </th>
            <td class="px-6 py-4">
                <input type="number"
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

                    @foreach($contents as $content)
                    <li>
                        <span class="text-gray-900 dark:text-white">{{ $content }}<span>
                    </li>
                    @endforeach
                </ol>

                <input type="text" name="content"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Content" required wire:model="content">
                <button type="button" wire:click="addContent"
                    class="mr-5 font-medium text-blue-600 dark:text-blue-500 hover:underline">Add</button>
            </td>
        </tr>

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Date
            </th>
            <td class="px-6 py-4">
                <input type="date" wire:model="date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </td>
        </tr>

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Started At
            </th>
            <td class="px-6 py-4">
                <input type="time" wire:model="started_at"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </td>
        </tr>

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Ended At
            </th>
            <td class="px-6 py-4">
                <input type="time" wire:model="ended_at"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </td>
        </tr>

        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Fee
            </th>
            <td class="px-6 py-4">
                <input type="number" name="fee"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required wire:model="fee">
            </td>
        </tr>

    </tbody>

    <tfoot>
        <tr class="font-semibold text-gray-900 dark:text-white">
            <th scope="row" class="px-6 py-3 text-base"></th>
            <td class="px-6 py-3">
                <x-reset-button />

                <button type="button" wire:click="store"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Submit
                </button>

            </td>
        </tr>
    </tfoot>

</table>