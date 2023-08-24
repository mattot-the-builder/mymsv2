@props(['status'])

@if ($status == 1)
<span
    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
    Approved
</span>
@elseif ($status == 0)
<span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
    Not Approved
</span>
@endif