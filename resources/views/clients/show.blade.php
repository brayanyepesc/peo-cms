<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-weight-bold text-xl text-gray-800">
                {{ __('Client Details') }}
            </h2>
            <a href="{{ route('clients') }}" class="bg-violet-500 p-1 text-white rounded">
                Come back
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-bold">Business Name</p>
                            <p>{{ $client->b_name }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Email</p>
                            <p>{{ $client->email }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Pay Period</p>
                            <p>{{ $client->pay_period }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Contact</p>
                            <p>{{ $client->contact }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Website</p>
                            <p>{{ $client->website }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
                <div class="p-6 flex justify-end gap-2">
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 p-1 text-white rounded">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
