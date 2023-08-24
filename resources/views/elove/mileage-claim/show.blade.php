<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mileage Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Mileage Claim #{{ $mileage_claim->id }}
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

                        <x-show-item label="Id" :value="$mileage_claim->id" />
                        <x-show-item label="Staff Id" :value="$mileage_claim->staff_id" />
                        <x-show-item label="Trip Date" :value="$mileage_claim->trip_date" />
                        <x-show-item label="Trip Name" :value="$mileage_claim->trip_name" />
                        <x-show-item label="Starting Location" :value="$mileage_claim->starting_location" />
                        <x-show-item label="Destination" :value="$mileage_claim->destination" />
                        <x-show-item label="Mileage" :value="$mileage_claim->mileage" />
                        <x-show-item label="Fuel Cost" :value="$mileage_claim->total_claim" />
                        <x-show-image label="Attachment" :value="$mileage_claim->attachment" />
                        <x-show-item label="Claim Status" :value="$mileage_claim->status" />
                        <x-show-item label="Created at" :value="$mileage_claim->created_at->diffForHumans()" />

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>