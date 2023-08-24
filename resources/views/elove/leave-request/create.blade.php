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
                    Create New Leave Request
                </h2>
                <form method="POST" action="{{ route('leave-request.store') }}" enctype="multipart/form-data">
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

                            <x-form-date label="Start Date" name="start_date" />
                            <x-form-date label="End Date" name="end_date" />
                            <x-show-item label="Total Leave" value="0" />

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Reasons
                                </th>

                                <td class="px-6 py-4">
                                    <textarea name="reasons" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Reasons for leave request"></textarea>
                                </td>
                            </tr>

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