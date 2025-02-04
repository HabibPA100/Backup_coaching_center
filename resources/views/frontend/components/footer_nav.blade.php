<div class="bg-[#d83cdd] fixed bottom-0 left-0 w-full flex justify-around text-white z-50">
   <div class="w-2/12 px-2 mt-1">
     <a href="{{ route('dashboard') }}" class="text-decoration-none">
       <div class="home-box text-center text-white">
         <i class="fa-solid fa-house smFooter text-lg"></i>
         {{-- <p class="text-lg md:text-xl lg:text-2xl text-center">হোম</p> --}}
       </div>
     </a>
   </div>
   <div class="w-2/12 px-2 mt-1">
     <a href="{{ route('contact') }}" class="text-decoration-none link">
      <div class="home-box flex flex-col items-center justify-center text-center">
        <i class="fa-solid fa-address-book text-lg"></i>
        {{-- <p class="text-lg md:text-xl lg:text-2xl text-center"> যোগাযোগ </p> --}}
      </div>
     </a>
   </div>
   <div class="w-2/12 px-2">
     <a href="{{ route('pay') }}" class="text-decoration-none link">
       <div class="home-box flex flex-col items-center justify-center text-center">
         <img
           src="{{ asset('frontend/images/profile/round_payment.png') }}"
           alt="Pay Now"
           class="w-10"
         />
         {{-- <p class="text-lg md:text-xl lg:text-2xl text-center">পে</p> --}}
       </div>
     </a>
   </div>
   <div class="w-2/12 px-2 mt-1">
     <a href="{{ route('admission') }}" class="text-decoration-none link">
       <div class="home-box text-center">
         <i class="fa-solid fa-pen-to-square text-lg"></i>
         {{-- <p class="text-lg md:text-xl lg:text-2xl text-center">ভর্তি</p> --}}
       </div>
     </a>
   </div>
   <div class="w-2/12 px-2 mt-1">
     <a href="{{ route('profile.edit') }}" class="text-decoration-none link">
       <div class="home-box text-center">
        <i class="fa-solid fa-user text-lg"></i>
         {{-- <p class="text-lg md:text-xl lg:text-2xl text-center">প্রোফাইল</p> --}}
       </div>
     </a>
   </div>
 </div>
 