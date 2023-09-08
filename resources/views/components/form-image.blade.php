@props(['label', 'name'])

<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <td colspan="2" class="px-6 py-4">
        <span class="mb-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ $label }}
        </span>
        <input type="file" id="{{ $name }}" name="{{ $name }}" class="">
    </td>
</tr>
