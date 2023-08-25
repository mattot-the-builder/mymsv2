<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leave Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert />
            <a href="{{ route('leave-request.create') }}" type="button"
                class="mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add New Leave Request
            </a>

            <div class="flex justify-between">
                <x-search route="leave-request.search" placeholder="leave request" />
                <x-export-excel route="leave-request.export.excel" />
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('id')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Staff
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('reasons', 'Reasons')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('start_date', 'Start Date')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('end_date', 'End Date')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('total_leave', 'Total Leave')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('status', 'Status')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($leave_requests as $leave_request)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium dark:text-white">
                                    {{ $leave_request->id }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    {{ App\Models\Staff::find($leave_request->staff_id)->user->name }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    {{ $leave_request->reasons }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    {{ $leave_request->start_date }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    {{ $leave_request->end_date }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    {{ $leave_request->total_leave }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium ">
                                    <x-status-badge status="{{ $leave_request->status }}" />
                                </th>
                                <td class="px-6 py-4 ">
                                    <x-action-accept routeName="leave-request.accept" id="{{ $leave_request->id }}" />
                                    <x-action-reject routeName="leave-request.reject" id="{{ $leave_request->id }}" />
                                    <x-action-view routeName="leave-request.show" id="{{ $leave_request->id }}" />
                                    <x-action-delete routeName="leave-request.destroy" id="{{ $leave_request->id }}" />
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination m-4">
                        {{ $leave_requests->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>