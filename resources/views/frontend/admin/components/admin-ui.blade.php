<div class="grid grid-cols-4 gap-4 p-2 bg-gray-100 mb-10">
  <!-- Class Routine -->
  <a href="{{ route('admin-image-post.index') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <i class="fa-regular fa-pen-to-square text-xl"></i>
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> নতুন বার্তা </p>
    </div>
  </a>
  <!-- Users List -->
  <a href="{{ route('admin.user') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/user-group.png') }}" alt="Users Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> Users </p>
    </div>
  </a>
  <!-- Message List -->
  <a href="{{ route('admin.message') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/message.png') }}" alt="Message Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> বার্তা </p>
    </div>
  </a>
  <!-- Class Routine -->
  <a href="{{ route('admin-create-routine.index') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/class_routine.png') }}" alt="Routine Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ক্লাস রুটিন </p>
    </div>
  </a>
    
    <!-- Result Sheet -->
    <a href="{{ route('admin.add.result') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-indigo-200">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/exam.png') }}" alt="Exam Result Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> রেজাল্ট সিট </p>
        </div>
    </a>

    <!-- Student Salary -->
    <a href="{{ route('admin.payments') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/finance.svg') }}" alt="Student Salary Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> পেমেন্ট </p>
        </div>
    </a>

    <!-- Some roles about coaching -->
    {{-- <a href="{{ route('admin.students.warning') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-yellow-100">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/warning.png') }}" alt="Roles Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> কিছু সতর্কবাণী </p>
        </div>
    </a> --}}
  
  <!-- Homework -->
  <a href="{{ route('admin.homework') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-teal-200">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/homework.png') }}" alt="Home Work Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> হোমওয়ার্ক </p>
      </div>
  </a>

    <!-- Some memories of coaching past -->
    <a href="{{ route('admin-memorize.index') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/memorize.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> কিছু স্মৃতি </p>
        </div>
    </a>
<!-- Notice All for Admin -->
    <a href="{{ route('admin.notice') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/notice_board.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> নোটিস </p>
        </div>
    </a>
    <!-- Students information -->
  <a href="{{ route('admin.number') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-gray-300">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/phone_number.png') }}" alt="Students info Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ফোন  </p>
      </div>
</a>
   <!-- Students information -->
  <a href="{{ route('admin-student-list.index') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-gray-300">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/students_info.png') }}" alt="Students info Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center">শিক্ষার্থী</p>
      </div>
</a>
<!-- Regular Attendances -->
<a href="{{ route('admin.attendance.list') }}" class="text-blue-500 hover:text-blue-700">
  <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-lime-200">
      <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
        <!-- Replace with an SVG or Icon -->
        <img src="{{ asset('frontend/images/attendance-icon.svg') }}" alt="Attendances Icon">
      </div>
      <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center">হাজিরা</p>
  </div>
</a>
   <!-- Absent permission -->
   <a href="{{ route('admin-leave-list.index') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-lime-200">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/leave.png') }}" alt="Absent Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ছুটির আবেদন </p>
    </div>
</a>
  
  </div>