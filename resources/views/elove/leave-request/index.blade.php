<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leave Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert />
            <x-new-claim-button routeName="leave-request.create" />
            <x-search route="leave-request.search" placeholder="leave request" />

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Staff
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Reasons
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Start Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    End Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Leave
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
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