<section>
    <header>
        <h2 class="title is-4">
            {{ __('Update Password') }}
        </h2>
        <p class="subtitle is-6">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6">
        @csrf
        @method('put')

        <div class="field">
            <label class="label" for="current_password">{{ __('Current Password') }}</label>
            <div class="control">
                <input id="current_password" name="current_password" type="password" class="input" autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="help is-danger" />
        </div>

        <div class="field mt-4">
            <label class="label" for="password">{{ __('New Password') }}</label>
            <div class="control">
                <input id="password" name="password" type="password" class="input" autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="help is-danger" />
        </div>

        <div class="field mt-4">
            <label class="label" for="password_confirmation">{{ __('Confirm Password') }}</label>
            <div class="control">
                <input id="password_confirmation" name="password_confirmation" type="password" class="input" autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="help is-danger" />
        </div>

        <div class="field is-grouped mt-5">
            <div class="control">
                <button class="button is-primary">{{ __('Save') }}</button>
            </div>

            @if (session('status') === 'password-updated')
                <div class="control">
                    <p class="help is-success">{{ __('Saved.') }}</p>
                </div>
            @endif
        </div>
    </form>
</section>
