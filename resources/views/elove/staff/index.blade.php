<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert />

            <a href="{{ route('staff.create') }}" type="button"
                class="mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add New Staff
            </a>

            <x-search route="staff.search" placeholder="staff" />
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Staff Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Profile Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($staffs as $staff)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $staff->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $staff->user->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $staff->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $staff->staff_status }}
                                </td>
                                <td class="px-6 py-4">
                                    <x-profile-status :status="$staff->is_approved" />
                                </td>
                                <td class="px-6 py-4">
                                    <x-action-accept routeName="staff.accept" id="{{ $staff->id }}" />
                                    <x-action-reject routeName="staff.reject" id="{{ $staff->id }}" />
                                    <x-action-view routeName="staff.show" id="{{ $staff->id }}" />
                                    <x-action-delete routeName="staff.destroy" id="{{ $staff->id }}" />
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination m-4">
                        {{ $staffs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>