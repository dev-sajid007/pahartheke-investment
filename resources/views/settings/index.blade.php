@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between items-center mb-6">

        <h2 class="text-2xl font-bold">General Settings</h2>

        @if($settings->count() == 0)
            <a href="{{ route('settings.create') }}" 
               class="bg-blue-500 text-black border border-black px-4 py-2 rounded hover:bg-blue-600 transition">
               Add New
            </a>
        @endif

          <!-- Settings Table -->
    <div class="overflow-x-auto border border-gray-200 rounded">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Logo</th>
                    <th class="px-4 py-2 text-left">Site Name</th>
                    <th class="px-4 py-2 text-left">Details</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Phone</th>
                    <th class="px-4 py-2 text-left">Address</th>
                    <th class="px-4 py-2 text-left">Facebook</th>
                    <th class="px-4 py-2 text-left">Instagram</th>
                    <th class="px-4 py-2 text-left">WhatsApp</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($settings as $setting)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">
                        @if($setting->logo)
                            <img src="{{ asset('storage/'.$setting->logo) }}" alt="logo" class="w-16 h-16 object-cover rounded">
                        @else
                            <span class="text-gray-400">N/A</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $setting->site_name ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->details ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->email ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->phone ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->address ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->facebook ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->instagram ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $setting->whatsapp ?? 'N/A' }}</td>
                    <td class="px-4 py-2 flex space-x-2 whitespace-nowrap">
                        <a href="{{ route('settings.edit', $setting->id) }}" 
                           class="bg-yellow-500 text-black px-3 py-1 rounded hover:bg-yellow-600 transition">
                           Edit
                        </a>
                        <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline-block">
                         @csrf
                         @method('DELETE')
                              <button type="submit" class=" text-black px-3 py-1 rounded hover:bg-gray-800 transition">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10" class="text-center py-4 text-gray-500">No settings found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    </div>
</div>


    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded shadow">
            {{ session('success') }}
        </div>
    @endif

  
</div>
@endsection
