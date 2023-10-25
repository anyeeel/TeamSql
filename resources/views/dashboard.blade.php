<x-app-layout>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-4">Welcome, {{ Auth::user()->name }}!</h3>

                    
<!-- ... Previous code ... -->

<!-- CRUD Table -->
<div class="mt-4">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    File
                </th>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Title
                </th>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Number
                </th>
                <th class="px-6 py-3 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @isset($items)
                @foreach($items as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <!-- Display the file, replace with your file data -->
                            {{ $item->file }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <!-- Display the title -->
                            {{ $item->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap">
                            <!-- Display the number -->
                            {{ $item->number }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">

                            <!-- Download Icon -->
                            <a href="{{ route('items.download', $item->id) }}" class="text-green-600 hover:text-green-900 ml-2" title="Download">
                                <i class="fas fa-download"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            @endisset

            <!-- Sample Data Row -->
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <!-- Sample file data -->
                    SampleFile.pdf
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <!-- Sample title data -->
                    Laptop For Every Student
                </td>
                <td class="px-6 py-4 whitespace-no-wrap">
                    <!-- Sample number data -->
                    Memorandum No. 102
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <!-- Sample actions, you can customize as needed -->

                    <a href="#" class="text-green-600 hover:text-green-900 ml-2" title="Download">
                        <i class="fas fa-download"></i>
                    </a>
                   
                </td>
            </tr>
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>