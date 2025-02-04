<x-frontend-admin-app-layout>
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Routine</h1>
    
            <!-- Edit Routine Form -->
            <form action="{{ route('admin-create-routine.update', $routine->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="day" class="block text-sm font-medium text-gray-700">Day</label>
                        <input type="text" name="day" id="day" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('day', $routine->day) }}" placeholder="Enter day">
                    </div>
    
                    <div>
                        <label for="period" class="block text-sm font-medium text-gray-700">Period</label>
                        <input type="text" name="period" id="period" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('period', $routine->period) }}" placeholder="Enter period">
                    </div>
    
                    <div>
                        <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                        <input type="text" name="class" id="class" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('class', $routine->class) }}" placeholder="Enter class">
                    </div>
    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('subject', $routine->subject) }}" placeholder="Enter subject">
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Update Routine</button>
                    <a href="{{ route('admin-create-routine.index') }}" class="ml-2 px-4 py-2 bg-gray-500 text-white rounded-md shadow hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </x-frontend-admin-app-layout>
    