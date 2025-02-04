<x-app-layout>
    
    <form action="{{ route('homework.submit') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4 p-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Homework Title:</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                required 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Enter the title"
            >
        </div>
        <div class="mb-4 p-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea 
                name="description" 
                id="description" 
                rows="4" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                placeholder="Enter a brief description (optional)"
            ></textarea>
        </div>
        <div class="mb-4 p-4">
            <label for="file" class="block text-gray-700 text-sm font-bold mb-2">Upload File:</label>
            <input 
                type="file" 
                name="file" 
                id="file" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            >
        </div>
        <div class="flex items-center justify-end p-2">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Submit
            </button>
        </div>
        
    </form>
<!-- Show Error Or success-->
@if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Show your home work from here-->
<div class="text-xl md:text-3xl text-red-600 bg-green-400 text-center my-3">
    Your All Homework Is Bellow 
</div>
<div class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($homeworks as $homework) 
        <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $homework->title }}</h3>
            <p class="text-gray-600 mb-4">{{ $homework->description }}</p>
            <p class="text-sm text-gray-500"> Submitted by: <span class="font-medium">{{ Auth::user()->name }}</span></p>
            @if ($homework->file_path)
                <a href="{{ asset('storage/' . $homework->file_path) }}" target="_blank" 
                   class="mt-4 inline-block bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold py-2 px-4 rounded hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Download File
                </a>
            @endif
            {{-- <!-- Delete Button -->
            <form action="{{ route('homework.destroy', $homework->id) }}" method="POST" class="mt-4">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        onclick="return confirm('Are you sure you want to delete this homework?')"
                        class="w-full bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                    Delete
                </button>
            </form> --}}
        </div>
    @endforeach
</div>
    
</x-app-layout>