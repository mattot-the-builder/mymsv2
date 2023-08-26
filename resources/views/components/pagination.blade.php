@props(['items'])
{{ dd($items->lastPage()) }}

<nav aria-label="Page navigation example">
    <ul class="inline-flex -space-x-px text-base h-10">
        <li>
            <a href="#"
                class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
        </li>

        @for ($page = 1; $page <= $items['lastPage']; $page++) <li>
            <a href="{{ $currentUrl .'?page='. $page }}"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                {{ $page }}
            </a>
            </li>
            @endfor
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next
                </a>
            </li>
    </ul>
</nav>

{{-- $paginationData = [
'currentPage' => $items->currentPage(),
'lastPage' => $items->lastPage(),
'perPage' => $items->perPage(),
'total' => $items->total(),
]; --}}