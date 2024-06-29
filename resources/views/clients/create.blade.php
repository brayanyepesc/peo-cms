<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-weight-bold text-xl text-gray-800">
                {{ __('Clients') }}
            </h2>
            <a href="{{ route('clients') }}" class="bg-violet-500 p-1 text-white rounded">
                Come back
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('clients.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <div>
                                <label for="b_name" class="block text-sm font-medium text-gray-700">Business Name</label>
                                <input type="text" name="b_name" id="b_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" name="password" id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="pay_period" class="block text-sm font-medium text-gray-700">Pay Period</label>
                                <select name="pay_period" id="pay_period" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    <option value="7">7 Days</option>
                                    <option value="14">14 Days</option>
                                </select>
                            </div>
                            <div>
                                <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                                <input type="text" name="contact" id="contact" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                            <div>
                                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                                <input type="text" name="website" id="website" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div class="col-span-1 sm:col-span-2 lg:col-span-3">
                                <button type="submit" class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded w-full">
                                    Create Client
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
