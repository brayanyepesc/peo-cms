<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-weight-bold text-xl text-gray-800">
                {{ __('Clients') }}
            </h2>
            <a href="{{ route('clients.create') }}" class="bg-violet-500 p-1 text-white rounded">
                Add Client
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($clients->isEmpty())
                        <p class="text-center text-violet-500">No clients found</p>
                    @else
                        <ul class="w-full">
                            <li class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-7 gap-4 py-2 font-bold border-b bg-violet-500 p-1 rounded text-white">
                                <div>Id</div>
                                <div>Business Name</div>
                                <div class="hidden sm:block">Email</div>
                                <div class="hidden md:block">Pay Period</div>
                                <div class="hidden md:block">Contact</div>
                                <div class="hidden lg:block">Website</div>
                                <div>Actions</div>
                            </li>
                            @foreach ($clients as $client)
                                <li class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-7 gap-4 py-2 border-b p-1">
                                    <div>{{ $client->id }}</div>
                                    <div>{{ $client->b_name }}</div>
                                    <div class="hidden sm:block">{{ $client->email }}</div>
                                    <div class="hidden md:block">{{ $client->pay_period }}</div>
                                    <div class="hidden md:block">{{ $client->contact }}</div>
                                    <div class="hidden lg:block">{{ $client->website }}</div>
                                    <div>
                                        <a href="{{ route('clients.show', $client->id) }}" class="bg-violet-500 p-1 text-white rounded">Details</a>
                                        
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
