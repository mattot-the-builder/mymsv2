<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overtime Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert />
            <x-new-claim-button routeName="overtime-claim.create" />
            <x-search route="overtime-claim.search" placeholder="overtime claim" />

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
                                    Total Hours
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    OT Code
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Claim
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
                            @foreach ($overtime_claims as $overtime_claim)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $overtime_claim->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ App\Models\Staff::find($overtime_claim->staff_id)->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $overtime_claim->total_hours }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $overtime_claim->ot_code }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $overtime_claim->total_claim }}
                                </td>
                                <td class="px-6 py-4 ">
                                    <x-status-badge status="{{ $overtime_claim->status }}" />
                                </td>
                                <td class="px-6 py-4 ">
                                    <x-action-accept routeName="overtime-claim.accept" id="{{ $overtime_claim->id }}" />
                                    <x-action-reject routeName="overtime-claim.reject" id="{{ $overtime_claim->id }}" />
                                    <x-action-view routeName="overtime-claim.show" id="{{ $overtime_claim->id }}" />
                                    <x-action-delete routeName="overtime-claim.destroy"
                                        id="{{ $overtime_claim->id }}" />
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination m-4">
                        {{ $overtime_claims->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>