<x-app-layout>
    <x-slot name="header">
        Profile
    </x-slot>

    <div class="columns is-centered is-multiline">
        <div class="column is-8">
            <div class="box mb-5">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="box mb-5">
                @include('profile.partials.update-password-form')
            </div>

            <div class="box has-background-danger-light">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
