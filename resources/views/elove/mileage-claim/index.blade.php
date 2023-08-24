<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mileage Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert />
            <x-new-claim-button routeName="mileage-claim.create" />


            <div class="flex justify-between">
                <x-search route="mileage-claim.search" placeholder="mileage claim" />
                <x-export-excel route="mileage-claim.export.excel" />
            </div>

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
                                    Name
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
                            @foreach ($mileage_claims as $mileage_claim)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $mileage_claim->id }}
                                </th>

                                <td class="px-6 py-4">
                                    {{ App\Models\Staff::find($mileage_claim->staff_id)->user->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $mileage_claim->trip_name }}
                                </td>
                                <td class="px-6 py-4">
                                    RM {{ $mileage_claim->total_claim }}
                                </td>
                                <td class="px-6 py-4 ">
                                    <x-status-badge status="{{ $mileage_claim->status }}" />
                                </td>

                                <td class="px-6 py-4 ">
                                    <x-action-accept routeName="mileage-claim.accept" id="{{ $mileage_claim->id }}" />
                                    <x-action-reject routeName="mileage-claim.reject" id="{{ $mileage_claim->id }}" />
                                    <x-action-view routeName="mileage-claim.show" id="{{ $mileage_claim->id }}" />
                                    <x-action-delete routeName="mileage-claim.destroy" id="{{ $mileage_claim->id }}" />
                                </td>




                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination m-4">
                        {{ $mileage_claims->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>