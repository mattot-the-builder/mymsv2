<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expense Claim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Expense Claim #{{ $expense_claim->id }}
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
                        <x-show-item label="Id" :value="$expense_claim->id" />
                        <x-show-item label="Staff Id" :value="$expense_claim->staff_id" />
                        <x-show-item label="Staff Name"
                            value="{{ App\Models\Staff::find($expense_claim->staff_id)->user->name }}" />
                        <x-show-item label="Total Claim" :value="$expense_claim->total_claim" />
                        <x-show-item label="Claim Status" :value="$expense_claim->status" />
                        <x-show-item label="Created at" :value="$expense_claim->created_at->diffForHumans()" />
                        <x-show-item label="Last Updated" :value="$expense_claim->updated_at->diffForHumans()" />
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Expense Item
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
                                Receipt
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach (App\Models\ExpenseClaim::find($expense_claim->id)->items as $expense_item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $expense_item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $expense_item->details }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $expense_item->date }}
                            </td>
                            <td class="px-6 py-4">
                                <img class="h-20 max-w-full" src="{{ $expense_item->receipt }}" alt="img" />
                            </td>
                            <td class="px-6 py-4">
                                RM {{ $expense_item->amount }}
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