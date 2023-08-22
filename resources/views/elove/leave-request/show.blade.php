<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leave Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Leave Request #{{ $leave_request->id }}
                </h2>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Item
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Attribute
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <x-show-item label="Id" :value="$leave_request->id" />
                        <x-show-item label="Staff Id" :value="$leave_request->staff_id" />
                        <x-show-item label="Start Date" :value="$leave_request->start_date" />
                        <x-show-item label="End Date" :value="$leave_request->end_date" />
                        <x-show-item label="Total Days" :value="$leave_request->total_leave" />
                        <x-show-item label="Reasons" :value="$leave_request->reasons" />
                        <x-show-item label="Attachment" value="N/A" />
                        <x-show-item label="Claim Status" :value="$leave_request->status" />
                        <x-show-item label="Created at" :value="$leave_request->created_at->diffForHumans()" />


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>