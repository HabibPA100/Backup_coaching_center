<x-frontend-admin-app-layout>
    <!-- Show your home work from here-->
    <div class="text-xl md:text-3xl text-red-600 bg-green-400 text-center my-3">
        All Homework Is Below
    </div>
    <div class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @if($homeworks->isNotEmpty())
            @foreach ($homeworks as $homework) 
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2 truncate">{{ $homework->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $homework->description }}</p>
                    <p class="text-sm text-gray-500"> Submitted by: <span class="font-medium">{{ Auth::user()->name }}</span></p>
                    @if ($homework->file_path)
                        <a href="{{ asset('storage/' . $homework->file_path) }}" target="_blank" 
                           aria-label="Download file for {{ $homework->title }}"
                           class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold py-2 px-4 rounded hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                            Download File
                        </a>
                    @endif

                    <!-- Delete Button -->
                    <form action="{{ route('homework.destroy', $homework->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                onclick="return confirm('Are you sure you want to delete this homework?')"
                                class="w-full bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                            Delete
                        </button>
                    </form>
                </div>
            @endforeach
        @else
            <div class="text-center text-2xl text-red-950">
                No Homework Found. Please check back later
            </div>
        @endif
    </div>
</x-frontend-admin-app-layout>
