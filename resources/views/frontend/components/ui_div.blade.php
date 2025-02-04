<div class="grid grid-cols-4 gap-4 p-2 bg-gray-100 mb-10">
   <!-- Notice Board Paper --> 
   <a href="{{ route('notice.board') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-yellow-100">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/notice_board.png') }}" alt="Notice Board Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> নোটিস </p>
    </div>
  </a>
  <!-- Admission Paper -->
    <a href="{{ route('admission') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-50">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/admission.png') }}" alt="Admission Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ভর্তির ফরম </p>
        </div>
    </a>
  <!-- Class Routine -->
  <a href="{{ route('routine') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/class_routine.png') }}" alt="Routine Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ক্লাস রুটিন </p>
    </div>
  </a>
  <!-- Source Address -->
  <a href="https://drive.google.com/drive/folders/14X2Ki1n8wy9R2EqcGFDGObDGR-jsQeIY?usp=sharing" class="text-blue-500 hover:text-blue-700" target="_blank">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md">
        <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/source.png') }}" alt="Coaching Address Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> সূত্র </p>
    </div>
  </a>
  <!-- Some information about coaching -->
  <a href="{{ route('some.info') }}" class="text-blue-500 hover:text-blue-700">
    <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-slate-200">
        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
          <!-- Replace with an SVG or Icon -->
          <img src="{{ asset('frontend/images/about.png') }}" alt="Coaching Icon">
        </div>
        <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> কিছু তথ্য </p>
    </div>
  </a>
    <!-- Result Sheet -->
    <a href="{{ route('result') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-indigo-200">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/exam.png') }}" alt="Exam Result Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> রেজাল্ট সিট </p>
        </div>
    </a>
    
    <!-- Student Salary -->
    <a href="{{ route('pay') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-green-100">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/finance.svg') }}" alt="Student Salary Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> পেমেন্ট </p>
        </div>
    </a>
  
    <!-- Regular Attendances -->
    <a href="{{ route('attendance') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-lime-200">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/attendance-icon.svg') }}" alt="Attendances Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> হাজিরা  </p>
        </div>
    </a>
  <!-- Absent permission -->
  <a href="{{ route('take.leave') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-lime-200">
          <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/leave.png') }}" alt="Absent Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ছুটির আবেদন </p>
      </div>
  </a>
    <!-- Students information -->
    <a href="{{ route('students.info') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-gray-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/students_info.png') }}" alt="Students info Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> শিক্ষার্থী তথ্য  </p>
          </div>
    </a>
    <!-- Coaching Address -->
    <a href="{{ route('address') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/google-maps.png') }}" alt="Coaching Address Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ঠিকানা </p>
      </div>
  </a>
  
  <!-- Homework -->
  <a href="{{ route('home.work') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-teal-200">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/homework.png') }}" alt="Home Work Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> হোমওয়ার্ক </p>
      </div>
  </a>
    <!-- Some roles about coaching -->
    <a href="{{ route('some.warning') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-yellow-100">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/warning.png') }}" alt="Roles Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> কিছু সতর্কবাণী </p>
        </div>
    </a>
       <!--Quran -->
       <a href="https://www.islamicnet.com/quran.php" class="text-blue-500 hover:text-blue-700" target="_blank">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/quran.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> Read Quran  </p>
        </div>
    </a>
     <!-- CV of teacher -->
     <a href="{{ route('teacher.cv') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-fuchsia-200">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/teacher_cv.png') }}" alt="Teacher CV Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> শিক্ষকের বায়োডাটা </p>
      </div>
  </a>
 
  <!-- Contacts -->
  <a href="{{ route('contact') }}" class="text-blue-500 hover:text-blue-700">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-blue-200">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/contact-book-color-icon.svg') }}" alt="Contacts Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> যোগাযোগ তথ্য</p>
      </div>
  </a>
  <!-- Live Chat -->
  <a href="https://wa.me/01741257011" class="text-blue-500 hover:text-blue-700" target="_blank">
      <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-teal-200">
          <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
            <!-- Replace with an SVG or Icon -->
            <img src="{{ asset('frontend/images/live_chate.png') }}" alt="Home Work Icon">
          </div>
          <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> লাইভ চ্যাট </p>
      </div>
  </a>

    <!-- Some memories of coaching past -->
    <a href="{{ route('memorize') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/memorize.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> কিছু স্মৃতি </p>
        </div>
    </a>
    <!--YouTube -->
    <a href="https://youtube.com/@ronokteachingmethod?si=X85_OkXnu610RRfs" class="text-blue-500 hover:text-blue-700" target="_blank">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/youtube.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> YouTube </p>
        </div>
    </a>
    <!--Library -->
    <a href="https://www.ebanglalibrary.com/" class="text-blue-500 hover:text-blue-700" target="_blank" >
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/library.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> লাইব্রেরি  </p>
        </div>
    </a>
    <!--Islamic things -->
    <a href="https://nari.alkawsar.com/bn/topics/1/" class="text-blue-500 hover:text-blue-700" target="_blank">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/islamic_things.webp') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> ইসলামিক কিছু জিনিস  </p>
        </div>
    </a>
    <!--Online Exam -->
    <a href="" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/online_exam.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> অনলাইন পরীক্ষার </p>
        </div>
    </a>
    <!--Zoom Online Class -->
    <a href="" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/online_class.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> অনলাইন ক্লাস </p>
        </div>
    </a>
    <!-- Certificate Download -->
    <a href="" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/certificate.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> সার্টিফিকেট ডাউনলোড </p>
        </div>
    </a>
    <!-- Uqti -->
    <a href="https://medium.com/@idanisur/%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%95-%E0%A6%89%E0%A6%95%E0%A7%8D%E0%A6%A4%E0%A6%BF-islamic-quotes-2653bb38a53c" class="text-blue-500 hover:text-blue-700" target="_blank">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/uqti.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> উক্তি </p>
        </div>
    </a>
    <!--Donor -->
    <a href="https://linko.page/foysalislam2006figmailcom" class="text-blue-500 hover:text-blue-700" target="_blank">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/donar1.png') }}" alt="Memories Icon" class="w-full h-full object-cover">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> Donor </p>
        </div>
    </a>
    <!--ETC -->
    <a href="{{ route('etc') }}" class="text-blue-500 hover:text-blue-700">
        <div class="flex flex-col items-center bg-white shadow-md p-2 rounded-md hover:bg-red-300">
            <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center">
              <!-- Replace with an SVG or Icon -->
              <img src="{{ asset('frontend/images/etc.png') }}" alt="Memories Icon">
            </div>
            <p class="mt-3 text-sm md:text-xl lg:text-2xl text-black text-center"> অন্যান্য </p>
        </div>
    </a>
    
  </div>
  