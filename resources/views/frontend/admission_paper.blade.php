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
    <div class="py-12 flex items-center justify-center min-h-screen" style="font-family: 'Lora', serif;">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Student Registration Form</h1>
            <form action="{{ route('student.store') }}" method="POST">
              @csrf
              <!-- Personal Information -->
              <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Student Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="father_name" class="block text-sm font-medium text-gray-700">Father's Name</label>
                <input type="text" id="father_name" name="father_name" value="{{ old('father_name') }}" placeholder="Enter your father's name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="mother_name" class="block text-sm font-medium text-gray-700">Mother's Name</label>
                <input type="text" id="mother_name" name="mother_name" value="{{ old('mother_name') }}"  placeholder="Enter your mother's name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
              <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
              <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender" value="{{ old('gender') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
        
              <!-- Educational Information -->
              <div class="mb-4">
                <label for="class" class="block text-sm font-medium text-gray-700">Current Class</label>
                <select id="class" name="class" value="{{ old('class') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                  <option value="six">Class 6</option>
                  <option value="seven">Class 7</option>
                  <option value="eight">Class 8</option>
                  <option value="nine">Class 9</option>
                  <option value="ten">Class 10</option>
                  <option value="enter_1y">Class 11</option>
                  <option value="enter_2y">Class 12</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="school" class="block text-sm font-medium text-gray-700">School Name</label>
                <input type="text" id="school" name="school" value="{{ old('school') }}" placeholder="Enter your school name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required >
              </div>
              <div class="mb-4">
                <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects to Study</label>
                <input type="text" id="subjects" value="{{ old('subjects') }}" name="subjects" placeholder="e.g., Math, English, Chemistry" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
              </div>
        
              <!-- Submit Button -->
              <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                  Submit Registration
                </button>
              </div>
            </form>
          </div>
    </div>
<div class="text-center text-2xl text-white bg-indigo-500">
      ভর্তি ইনফরমেশন
</div>
   @if($NewStudent->isNotEmpty())
     @foreach ($NewStudent as $student)
     <div class="flex justify-center items-center bg-gray-100 my-3">
      <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Your Admission Information</h2>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Student Name: <span class="font-semibold text-black"> {{ $student->name }} </span> </p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Father's Name:<span class="font-semibold text-black"> {{ $student->father_name }} </span></p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Mother's Name: <span class="font-semibold text-black"> {{ $student->mother_name }} </span> </p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Date of Birth: <span class="font-semibold text-black"> {{ $student->dob }} </span></p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Gender: <span class="font-semibold text-black"> {{ $student->gender }} </span></p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Phone Number: <span class="font-semibold text-black"> {{ $student->phone }} </span> </p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Current Class: <span class="font-semibold text-black"> {{ $student->class }} </span> </p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">School Name: <span class="font-semibold text-black"> {{ $student->school }} </span> </p>
        </div>
        <div class="mb-4">
          <p class="text-sm font-medium text-gray-600">Subjects to Study: <span class="font-semibold text-black"> {{ $student->subjects }} </span> </p>
        </div>
        <div class="flex justify-end mt-4">
          <button class="text-lg bg-black p-2 rounded-lg font-medium text-white">
              {{ $student->status }}
          </button>
        </div>
      </div>
    </div>
     @endforeach
   @else
      <p class="text-center text-2xl text-red-600">No Admission information found for you</p>
   @endif
</x-app-layout>
