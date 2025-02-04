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
    <div class="py-12">
        <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-6">
      <h2 class="text-2xl font-bold text-gray-800 text-center">যোগাযোগ করুন</h2>
      <p class="text-lg md:text-xl lg:text-2xl text-red-500 text-center mb-6">আপনার যে কোনো প্রশ্নের জন্য আমাদের সাথে যোগাযোগ করুন।</p>

      <!-- ফোন নাম্বার -->
      <div class="mb-4">
        <label for="phone" class="block text-lg md:text-xl lg:text-2xl font-medium text-gray-700">ফোন নাম্বার</label>
        <a href="tel:+8801741-257011" class="block text-blue-600 text-lg md:text-xl lg:text-2xl hover:underline mt-1">+8801741-257011</a>
      </div>

      <!-- ইমেইল -->
      <div class="mb-4">
        <label for="email" class="block text-lg md:text-xl lg:text-2xl font-medium text-gray-700">ইমেইল</label>
        <a href="mailto:backupcoachingcenter@gmail.com" class="block text-blue-600 text-lg md:text-xl lg:text-2xl hover:underline mt-1">backupcoachingcenter@gmail.com</a>
      </div>

      <!-- ফর্ম -->
      <form class="space-y-4" action="{{ route('submit.message') }}" method="POST">
        @csrf
        <div>
            <label for="name" class="block text-lg md:text-xl lg:text-2xl font-medium text-gray-700">আপনার নাম</label>
            <input
                type="text"
                id="name"
                name="name"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                placeholder="আপনার নাম লিখুন"
                required
            />
        </div>
        <div>
            <label for="email" class="block text-lg md:text-xl lg:text-2xl font-medium text-gray-700">আপনার ইমেইল</label>
            <input
                type="email"
                id="email"
                name="email"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                placeholder="আপনার ইমেইল লিখুন"
                required
            />
        </div>
        <div>
            <label for="message" class="block text-lg md:text-xl lg:text-2xl font-medium text-gray-700">মেসেজ</label>
            <textarea
                id="message"
                name="message"
                rows="4"
                class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                placeholder="আপনার মেসেজ লিখুন..."
                required
            ></textarea>
        </div>
        <button
            type="submit"
            class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
            মেসেজ পাঠান
        </button>
    </form>
    
    </div>
  </div>
    </div>
 
</x-app-layout>
