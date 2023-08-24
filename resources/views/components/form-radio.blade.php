@props(['label', 'name', 'options' => []])

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $label }}
    </th>
    <td class="px-6 py-4">
        @foreach ($options as $option)
        <div class="flex items-center mb-4">
            <input id="default-radio-1" type="radio" value="{{ $option }}" name="{{ $name }}"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                {{ $option }}
            </label>
        </div>
        @endforeach
    </td>
</tr>