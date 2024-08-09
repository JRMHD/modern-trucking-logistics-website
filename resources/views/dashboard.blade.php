<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('Welcome to Your Truck4you Dashboard!') }}
                    </h3>
                    <p class="text-gray-600 mb-6">Here you can access important documents, view recent updates, and
                        manage your account.</p>

                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-gray-700 mb-3">Recent Updates</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li>New routing optimization feature available</li>
                            <li>Updated fuel efficiency guidelines</li>
                            <li>Upcoming maintenance schedule posted</li>
                        </ul>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-gray-700 mb-3">Important Documents</h4>
                        <p class="text-gray-600 mb-4">Access and download essential forms and documents for your
                            operations.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- W9 Form -->
                            <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                                <div>
                                    <h5 class="font-semibold text-gray-700">W9 Form</h5>
                                    <p class="text-sm text-gray-600">August 2023 - Required for tax purposes</p>
                                </div>
                                <a href="{{ asset('aug 2023 w9.pdf') }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out"
                                    download>
                                    Download
                                </a>
                            </div>

                            <!-- Operating Authority MC Number -->
                            <div class="bg-gray-100 rounded-lg p-4 flex items-center justify-between">
                                <div>
                                    <h5 class="font-semibold text-gray-700">Operating Authority MC Number</h5>
                                    <p class="text-sm text-gray-600">Current Version - Keep on hand for inspections</p>
                                </div>
                                <a href="{{ asset('Operating_Authority_MC_number.pdf') }}"
                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out"
                                    download>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-semibold text-gray-700 mb-3">Quick Links</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <a href="contact-us"
                                class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">Route
                                Planner</a>
                            <a href="contact-us"
                                class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">Fuel
                                Log</a>
                            <a href="contact-us"
                                class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">Maintenance
                                Schedule</a>
                            <a href="contact-us"
                                class="text-blue-500 hover:text-blue-600 transition duration-300 ease-in-out">Support
                                Center</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
