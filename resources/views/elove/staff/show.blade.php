<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight p-6">
                    Staff #{{ $staff->id }}
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

                        <x-show-item label="Id" :value="$staff->id" />
                        <x-show-item label="User Id" :value="$staff->user_id" />
                        <x-show-item label="Staff Status" :value="$staff->staff_status" />
                        <x-show-item label="Start Date Working" :value="$staff->start_date_working" />
                        <x-show-item label="Name" value="{{ App\Models\User::find($staff->user_id)->name }}" />
                        <x-show-item label="IC Number" :value="$staff->ic_number" />
                        <x-show-item label="Age" :value="$staff->age" />
                        <x-show-item label="Gender" :value="$staff->gender" />
                        <x-show-item label="Contact" :value="$staff->contact" />
                        <x-show-item label="Address" :value="$staff->address" />
                        <x-show-item label="Date of Birth" :value="$staff->dob" />
                        <x-show-item label="Place of Birth" :value="$staff->pob" />
                        <x-show-item label="Position" :value="$staff->position" />
                        <x-show-item label="Marital Status" :value="$staff->marital_status" />
                        <x-show-item label="Spouse Name" :value="$staff->spouse_name" />
                        <x-show-item label="Spouse Contact" :value="$staff->spouse_contact" />
                        <x-show-item label="Spouse Position" :value="$staff->spouse_position" />
                        <x-show-item label="Spouse Company" :value="$staff->spouse_company" />
                        <x-show-item label="Emergency Contact" :value="$staff->emergency_contact" />
                        <x-show-item label="Emergency Contact Relationship"
                            :value="$staff->emergency_contact_relationship" />
                        <x-show-item label="Education" :value="$staff->education" />
                        <x-show-item label="Vehicle Registration" :value="$staff->vehicle_registration" />
                        <x-show-item label="Vehicle Type" :value="$staff->vehicle_type" />
                        <x-show-item label="Vehicle Model" :value="$staff->vehicle_model" />
                        <x-show-item label="Status" :value="$staff->is_approved" />

                        <x-show-item label="Created at" :value="$staff->created_at->diffForHumans()" />

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>