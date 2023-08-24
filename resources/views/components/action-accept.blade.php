{{-- @props(['routeName', 'id'])

<a href="{{ route($routeName, $id) }}"
    class="mr-5 font-medium text-green-600 dark:text-green-500 hover:underline">Accept</a> --}}

@props(['routeName', 'id'])
<a href="{{ route($routeName, $id) }}"
    class="mr-5 font-medium text-green-600 dark:text-green-500 hover:underline">Accept</a>