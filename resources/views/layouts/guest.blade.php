<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.meta_tag')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <img src="{{ asset('frontend/images/profile/profile.jpg') }}" alt="Cover">
            </div>
            <div> 
                <a href="{{ url('/') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <div class="my-8">
                <a href="https://linko.page/foysalislam2006figmailcom" class="text-center text-white font-bold my-5 bg-red-500 rounded-md p-4">MD Foysal Islam</a>
            </div>
        </div>
    </body>
</html>
