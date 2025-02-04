<x-frontend-admin-app-layout>
    <div class="container mx-auto p-4">
      <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">All Students Admission Information</h2>
        @if($StudentsInfo->isNotEmpty())
        @foreach ($StudentsInfo as $student)
        <div class="flex justify-center items-center bg-gray-100 my-3">
         <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-6">
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
            <button class="text-lg bg-yellow-600 ms-4 p-2 rounded-lg font-medium text-white">
            <a href="{{ route('admin-student-list.edit', $student->id) }}">Edit</a>
            </button>
          </div>
          <!-- Delete Button -->
          <form action="{{ route('admin-student-list.destroy', $student->id) }}" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit" 
                    onclick="return confirm('Are you sure you want to delete this student?')"
                    class="bg-red-500 p-2 text-white">
                Delete
            </button>
           </form>
         </div>
       </div>
        @endforeach
      @else
         <p class="text-center text-2xl text-red-600">No Admission information found for you</p>
      @endif
    </div>
</x-frontend-admin-app-layout>