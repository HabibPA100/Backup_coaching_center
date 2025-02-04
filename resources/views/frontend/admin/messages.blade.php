<x-frontend-admin-app-layout>
    <div class="container mx-auto p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-200 shadow-lg rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">#</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Name</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Email</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Message</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold tracking-wider border-b border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example Row -->
                @if($Messages->isNotEmpty())
                    @foreach ($Messages as $message)
                    <tr>
                        <td class="py-4 px-6 text-sm font-medium text-gray-900">1</td>
                        <td class="py-4 px-6 text-sm text-gray-600">{{ $message->name }}</td>
                        <td class="py-4 px-6 text-sm text-red-600"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a> </td>
                        <td class="py-4 px-6 text-sm text-gray-600">{{ $message->message }}</td>
                        <td class="py-4 px-6 text-sm">
                            <!-- Delete Button -->
                        <form action="{{ route('message.destroy', $message->id) }}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Are you sure you want to delete this message?')"
                                    class="w-full bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                                Delete
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <p class="text-center text-2xl text-red-700"> No Message Found</p>
                @endif
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    
</x-frontend-admin-app-layout>