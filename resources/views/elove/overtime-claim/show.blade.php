<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overtime Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Overtime Claim #{{ $overtime_claim->id }}
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
                        <x-show-item label="Id" :value="$overtime_claim->id" />
                        <x-show-item label="Staff Id" :value="$overtime_claim->staff_id" />
                        <x-show-item label="Staff Name"
                            value="{{ App\Models\Staff::find($overtime_claim->staff_id)->user->name }}" />
                        <x-show-item label="Total Hours" :value="$overtime_claim->total_hours" />
                        <x-show-item label="OT Code" :value="$overtime_claim->ot_code" />
                        <x-show-item label="Total Claim" :value="$overtime_claim->total_claim" />
                        <x-show-item label="Claim Status" :value="$overtime_claim->status" />
                        <x-show-item label="Created at" :value="$overtime_claim->created_at->diffForHumans()" />
                        <x-show-item label="Last Updated" :value="$overtime_claim->updated_at->diffForHumans()" />
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Overtime Item
                </h2>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Details
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Start Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                End Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Hour
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach (App\Models\OvertimeClaim::find($overtime_claim->id)->items as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->details }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->start_time }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->end_time }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->total_hour }}
                            </td>

                        </tr>

                        @endforeach
                        {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $expense_item->id }}
                            </th>
                            <td class="px-6 py-4">
                                RM {{ $expense_item->total_claim }}
                            </td>


                        </tr> --}}

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>