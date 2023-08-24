<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert />
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Create New Staff
                </h2>
                <form method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data">
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

                            <x-form-radio label="Staff Status" name="staff_status"
                                :options="['Permanent Staff', 'Contract Staff', 'Internship']" />
                            <x-form-date label="Start Date Working" name="start_date_working" />
                            <x-form-text label="IC Number" name="ic_number" />
                            <x-form-number label="Age" name="age" />
                            <x-form-radio label="Gender" name="gender" :options="['Male', 'Female']" />
                            <x-form-text label="Contact" name="contact" />

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Address
                                </th>

                                <td class="px-6 py-4">
                                    <textarea name="address" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Address"></textarea>
                                </td>
                            </tr>

                            <x-form-date label="Date of Birth" name="dob" />
                            <x-form-text label="Place of Birth" name="pob" />
                            <x-form-text label="Position" name="position" />
                            <x-form-text label="Marital Status" name="marital_status" />
                            <x-form-text label="Spouse Name" name="spouse_name" />
                            <x-form-text label="Spouse Contact" name="spouse_contact" />
                            <x-form-text label="Spouse Position" name="spouse_position" />
                            <x-form-text label="Spouse Company" name="spouse_company" />
                            <x-form-text label="Emergency Contact" name="emergency_contact" />
                            <x-form-text label="Emergency Contact Relationship" name="emergency_contact_relationship" />
                            <x-form-text label="Education" name="education" />
                            <x-form-text label="Vehicle Registration" name="vehicle_registration" />
                            <x-form-text label="Vehicle Type" name="vehicle_type" />
                            <x-form-text label="Vehicle Model" name="vehicle_model" />
                            <x-form-image label="Front IC" name="front_ic" />
                            <x-form-image label="Back IC" name="back_ic" />

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