<x-frontend-admin-app-layout>
     <!-- show up massage-->
 <div class="container mx-auto py-6 px-4">
    <h1 class="text-3xl font-bold mb-6">Submitted Messages</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($messages as $message)
        <div class="bg-white shadow-md rounded-lg p-6 border">
            <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $message->name }}</h2>
            <p class="text-gray-600 mb-2"><strong>Email:</strong> {{ $message->email }}</p>
            <p class="text-gray-700"><strong>Message:</strong> {{ $message->message }}</p>
            <p class="text-gray-500 text-sm mt-4">{{ $message->created_at->format('F j, Y, g:i a') }}</p>
        </div>
        @empty
        <p class="text-gray-600">No messages to display.</p>
        @endforelse
    </div>
</div>
</x-frontend-admin-app-layout>

