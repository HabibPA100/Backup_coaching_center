<x-app-layout>
    <x-slot name="header">
        <img 
            src="{{ asset('frontend/images/profile/cover.webp') }}" 
            alt="A beautiful example image" 
            class="rounded-lg shadow-md w-full max-w-md mx-auto"
            />
    </x-slot>
    <x-slot name="welcome">
        Welcome back <span class="text-3xl"> &#128075; </span> <span class="text-red-700"> <p class="text-3xl"> &hearts; &hearts; {{ Auth::user()->name }} &hearts; &hearts; </p> </span> 
    </x-slot>
    <div class="py-12 w-full max-w-2xl mx-auto">
        <!-- Address Section -->
        <div class="bg-gradient-to-r from-green-600 to-green-800 text-white rounded-lg shadow-lg p-6 text-center hover:scale-105 transition-transform duration-300">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">আমাদের ঠিকানা</h2>
            <p class="text-lg md:text-2xl lg:text-3xl mb-6">ফুকরা বাজার, কাশিয়ানী, গোপালগঞ্জ, ঢাকা</p>
        </div>
    
        <!-- Map Section -->
        <div class="mt-8">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.5052810008283!2d89.77053769999999!3d23.151751599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffc67be7328ca1%3A0x82ae2471685ffa04!2sFukra%20High%20School!5e0!3m2!1sen!2sbd!4v1736316695567!5m2!1sen!2sbd" 
                class="w-full h-72 md:h-96 rounded-lg shadow-md border-0" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    
</x-app-layout>
