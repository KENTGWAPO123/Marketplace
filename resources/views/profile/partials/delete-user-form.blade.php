<section class="space-y-6" x-data="{ confirmingUserDeletion: false }">
    <header>
        <h2 class="title is-4 has-text-danger">
            {{ __('Delete Account') }}
        </h2>
        <p class="subtitle is-6">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button class="button is-danger mt-4" @click="confirmingUserDeletion = true">
        {{ __('Delete Account') }}
    </button>

    <div class="modal" :class="{ 'is-active': confirmingUserDeletion }">
        <div class="modal-background" @click="confirmingUserDeletion = false"></div>
        <div class="modal-card">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <header class="modal-card-head">
                    <p class="modal-card-title">{{ __('Are you sure you want to delete your account?') }}</p>
                    <button type="button" class="delete" aria-label="close" @click="confirmingUserDeletion = false"></button>
                </header>
                <section class="modal-card-body">
                    <p class="mb-4">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="field">
                        <label class="label" for="password">{{ __('Password') }}</label>
                        <div class="control">
                            <input id="password" name="password" type="password" class="input" placeholder="{{ __('Password') }}" />
                        </div>
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="help is-danger" />
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-danger">{{ __('Delete Account') }}</button>
                    <button type="button" class="button" @click="confirmingUserDeletion = false">{{ __('Cancel') }}</button>
                </footer>
            </form>
        </div>
    </div>
</section>
