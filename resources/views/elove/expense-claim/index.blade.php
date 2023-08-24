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
            <x-search route="expense-claim.search" placeholder="expense claim" />

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