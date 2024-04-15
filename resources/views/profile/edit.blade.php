<x-section.main class="flex justify-center from-orange-500 via-purple-600 to-black">
    <div class="flex flex-col flex-wrap justify-center space-y-4">
        @include('components.flash')
        <x-section.card class="border-black bg-white">
            @include('profile.partials.update-profile-information-form')
        </x-section.card>
        <x-section.card class="border-black bg-white">
            @include('profile.partials.update-profilepic')
        </x-section.card>
        <x-section.card class="border-black bg-white">
            @include('profile.partials.update-password-form')
        </x-section.card>
        <x-section.card class="border-black bg-white">
            @include('profile.partials.delete-user-form')
        </x-section.card>
    </div>
</x-section.main>
