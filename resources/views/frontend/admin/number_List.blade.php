<x-frontend-admin-app-layout>
    <div class="container mx-auto p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-200 shadow-lg rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">#</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Name</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Phone</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Class</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Father</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example Row -->
                @if($Numbers->isNotEmpty())
                    @foreach ($Numbers as $number)
                    <tr>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900">1</td>
                        <td class="py-4 px-6 text-sm text-gray-600">{{ $number->name }}</td>
                        <td class="py-4 px-6 text-sm text-red-600">{{ $number->phone }} </td>
                        <td class="py-4 px-6 text-sm text-gray-600">{{ $number->class }}</td>
                        <td class="py-4 px-6 text-sm text-gray-600">{{ $number->father_name }}</td>
                    </tr>
                    @endforeach
                @else
                    <p class="text-center text-2xl text-red-700"> No Data Found</p>
                @endif
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    
</x-frontend-admin-app-layout>