@props(['status'])

@if ($status == 1)
<label class="relative inline-flex items-center mb-4 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer" checked>
    <div
        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
    </div>
    <span class="ml-3 text-sm font-medium text-green-900 dark:text-green-300">Approved</span>
</label>
@else
<label class="relative inline-flex items-center mb-4 cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer">
    <div
        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
    </div>
    <span class="ml-3 text-sm font-medium text-red-900 dark:text-red-300">Not approved</span>
</label>
@endif