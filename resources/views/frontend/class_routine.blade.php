<x-app-layout>
    <x-slot name="header">
        <img 
            src="{{ asset('frontend/images/profile/cover.webp') }}" 
            alt="A beautiful example image" 
            class="rounded-lg shadow-md w-full max-w-md mx-auto"
            />
    </x-slot>
    <x-slot name="welcome">
        Welcome <span class="text-3xl"> &#128075; </span> <span class="text-red-700"> <p class="text-3xl"> &hearts; &hearts; {{ Auth::user()->name }} &hearts; &hearts; </p> </span> 
    </x-slot>
   <!-- রুটিন টেবিল -->
<div class="container mx-auto my-8 p-4 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">সাপ্তাহিক ক্লাস রুটিন</h2>
    <!-- Routine Table -->
    <table class="min-w-full bg-white border border-gray-200 rounded-md">
      <thead>
          <tr class="bg-gray-100">
              <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Day</th>
              <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Period</th>
              <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Class</th>
              <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Subject</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($NewRoutine as $routine)
              <tr>
                  <td class="py-2 px-4 border-b text-gray-700">{{ $routine->day }}</td>
                  <td class="py-2 px-4 border-b text-gray-700">{{ $routine->period }}</td>
                  <td class="py-2 px-4 border-b text-gray-700">{{ $routine->class }}</td>
                  <td class="py-2 px-4 border-b text-gray-700">{{ $routine->subject }}</td>
              </tr>
          @endforeach
      </tbody>
  </table>
    </div>
  </div>
  
  
</x-app-layout>
