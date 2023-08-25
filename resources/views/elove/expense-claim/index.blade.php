<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expense Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert />
            <x-new-claim-button routeName="expense-claim.create" />

            <div class="flex justify-between">
                <x-search route="expense-claim.search" placeholder="expense claim" />
                <x-export-excel route="expense-claim.export.excel" />

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

                            @foreach ($expense_claims as $expense_claim)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $expense_claim->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ App\Models\Staff::find($expense_claim->staff_id)->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    RM {{ $expense_claim->total_claim }}
                                </td>
                                <td class="px-6 py-4 ">
                                    <x-status-badge :status="$expense_claim->status" />
                                </td>
                                <td class="px-6 py-4">

                                    <x-action-accept routeName="expense-claim.accept" id="{{ $expense_claim->id }}" />
                                    <x-action-reject routeName="expense-claim.reject" id="{{ $expense_claim->id }}" />
                                    <x-action-view routeName="expense-claim.show" id="{{ $expense_claim->id }}" />
                                    <x-action-delete routeName="expense-claim.destroy" id="{{ $expense_claim->id }}" />
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination m-4">
                        {{ $expense_claims->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>