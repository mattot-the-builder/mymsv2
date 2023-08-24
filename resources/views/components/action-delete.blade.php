@props(['routeName', 'id'])
<a href="{{ route($routeName, $id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>