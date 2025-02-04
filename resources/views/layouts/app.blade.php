<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.meta_tag')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="font-family: 'Lora', Bangla, sans-serif;">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
             <!-- welcome massage to user -->
             @isset($welcome)
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center" style="font-family: 'Lora', serif;">
                      {{ $welcome }}
                    </div>
            @endisset
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <div>
                
            </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer>
                @include('frontend.components.footer')
                @include('frontend.components.footer_nav')
            </footer>
        </div>
        @include('layouts.java_script')
    </body>
</html>
