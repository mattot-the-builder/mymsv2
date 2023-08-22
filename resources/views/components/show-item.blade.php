@props(['label', 'value'])

@if ($label == 'Claim Status')
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $label }}
    </th>
    <td class="px-6 py-4">
        <x-status-badge :status="$value" />
    </td>
</tr>
@else
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        {{ $label }}
    </th>
    <td class="px-6 py-4">
        {{ $value }}
    </td>
</tr>
@endif