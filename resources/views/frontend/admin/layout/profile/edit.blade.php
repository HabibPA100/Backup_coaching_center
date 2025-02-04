<x-frontend-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-family: 'Lora', serif;">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12" style="font-family: 'Lora', serif;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('frontend.admin.layout.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('frontend.admin.layout.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('frontend.admin.layout.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-frontend-admin-app-layout>
