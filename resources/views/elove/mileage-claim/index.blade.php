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


            <div class="flex flex-wrap justify-between">
                <x-search route="mileage-claim.search" placeholder="mileage claim" />
                <x-export-excel route="mileage-claim.export.excel" />
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

                                        @sortablelink('trip_name', 'Trip Name')

                                        <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-start">

                                        @sortablelink('total_claim', 'Total Claim')

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
                    <div class="relative overflow-x-auto flex flex-wrap justify-between">
                        <div class="m-4">
                            <span class="text-sm text-gray-700 dark:text-gray-400">
                                Showing <span class="font-semibold text-gray-900 dark:text-white">{{
                                    $mileage_claims->firstItem()
                                    }}</span> to <span class="font-semibold text-gray-900 dark:text-white">{{
                                    $mileage_claims->lastItem() }}</span> of <span
                                    class="font-semibold text-gray-900 dark:text-white">{{ $mileage_claims->total()
                                    }}</span>
                                Entries
                            </span>
                        </div>
                        <div class="m-4">

                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-base h-10">
                                    <li>

                                        <a href="{{ $mileage_claims->previousPageUrl() }}"
                                            class="flex items-center justify-center px-4 h-10 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                                            </svg>Previous</a>
                                    </li>


                                    @for ($page = 1; $page <= $mileage_claims->lastPage(); $page++) <li>
                                            <a href="{{ url()->current() .'?page='. $page }}"
                                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                {{ $page }}
                                            </a>
                                        </li>
                                        @endfor
                                        <li>
                                            <a href="{{ $mileage_claims->nextPageUrl()  }}"
                                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next
                                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                </svg></a>
                                        </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>