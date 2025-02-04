<x-frontend-admin-app-layout>
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Routine Management</h1>
            
            <!-- Add New Routine Form -->
            <form action="{{ route('admin-create-routine.store') }}" method="POST" class="mb-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="day" class="block text-sm font-medium text-gray-700">Day</label>
                        <input type="text" name="day" id="day" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('day') border-red-500 @enderror" placeholder="Enter day" value="{{ old('day') }}">
                        @error('day')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                        <input type="text" name="period" id="period" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('period') border-red-500 @enderror" placeholder="Enter period" value="{{ old('period') }}">
                        @error('period')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                        <input type="text" name="class" id="class" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('class') border-red-500 @enderror" placeholder="Enter class" value="{{ old('class') }}">
                        @error('class')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('subject') border-red-500 @enderror" placeholder="Enter subject" value="{{ old('subject') }}">
                        @error('subject')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Add Routine</button>
                </div>
            </form>

            <!-- Routine Table -->
            <table class="min-w-full bg-white border border-gray-200 rounded-md">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Day</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Period</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Class</th>
                        <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Subject</th>
                        <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($NewRoutine as $routine)
                        <tr>
                            <td class="py-2 px-4 border-b text-gray-700">{{ $routine->day }}</td>
                            <td class="py-2 px-4 border-b text-gray-700">{{ $routine->period }}</td>
                            <td class="py-2 px-4 border-b text-gray-700">{{ $routine->class }}</td>
                            <td class="py-2 px-4 border-b text-gray-700">{{ $routine->subject }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('admin-create-routine.edit', $routine->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('admin-create-routine.destroy', $routine->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2" onclick="return confirm('Are you sure you want to delete this routine?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-frontend-admin-app-layout>
