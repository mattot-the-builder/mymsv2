<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mileage Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert />
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Create New Claim
                </h2>
                <form method="POST" action="{{ route('mileage-claim.store') }}" enctype="multipart/form-data">
                    @csrf
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

                            <x-form-date label="Trip Date" name="trip_date" />
                            <x-form-text label="Trip Name" name="trip_name" />
                            <x-form-text label="Starting Location" name="starting_location" />
                            <x-form-text label="Destination" name="destination" />
                            <x-form-number label="Mileage" name="mileage" />
                            <x-form-number label="Fuel Cost" name="fuel_cost" />
                            <x-form-image label="Attachment" name="attachment" />

                        </tbody>

                        <tfoot>
                            <tr class="font-semibold text-gray-900 dark:text-white">
                                <th scope="row" class="px-6 py-3 text-base"></th>
                                <td class="px-6 py-3">
                                    <x-reset-button />
                                    <x-submit-button />
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>