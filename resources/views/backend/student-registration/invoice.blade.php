<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Registration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert />

            <div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto ">
                <h1 class="font-bold text-2xl my-4 text-center text-blue-600">MYMS</h1>
                <hr class="mb-2">
                <div class="flex justify-between mb-6">
                    <h1 class="text-lg font-bold">Invoice</h1>
                    <div class="text-gray-700">
                        <div>Date: {{ $invoice->created_at->format('d-m-Y') }}</div>
                        <div>Invoice #: e/{{ $invoice->id }}</div>
                    </div>
                </div>
                <div class="mb-8">
                    <h2 class="text-lg font-bold mb-4">Bill To:</h2>
                    <div class="text-gray-700 mb-2">{{ $invoice->user->name }}</div>
                </div>
                <table class="w-full mb-8">
                    <thead>
                        <tr>
                            <th class="text-left font-bold text-gray-700">Description</th>
                            <th class="text-right font-bold text-gray-700">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left text-gray-700">
                                {{ $invoice->studentRegistration->course->name }}</td>
                            <td class="text-right text-gray-700">RM {{ $invoice->id }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-left font-bold text-gray-700">Total</td>
                            <td class="text-right text-gray-700">RM {{ $invoice->id }}</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="text-gray-700 mb-2">Thank you for your business!</div>
                {{-- <div class="text-gray-700 text-sm">Please remit payment within 30 days.</div> --}}
            </div>

            <div class="py-8 flex justify-center">

            <a href="{{ route('student-registration.checkout', $invoice->id) }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed
                to Payment</a>
            </div>

        </div>
    </div>

    </div>
</x-app-layout>
