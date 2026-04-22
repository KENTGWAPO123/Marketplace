<section>
    <header>
        <h2 class="title is-4">
            {{ __('Profile Information') }}
        </h2>
        <p class="subtitle is-6">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6">
        @csrf
        @method('patch')

        <div class="field">
            <label class="label" for="name">{{ __('Name') }}</label>
            <div class="control">
                <input id="name" name="name" type="text" class="input" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            </div>
            <x-input-error class="help is-danger" :messages="$errors->get('name')" />
        </div>

        <div class="field mt-4">
            <label class="label" for="email">{{ __('Email') }}</label>
            <div class="control">
                <input id="email" name="email" type="email" class="input" value="{{ old('email', $user->email) }}" required autocomplete="username" />
            </div>
            <x-input-error class="help is-danger" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="is-size-7 has-text-dark">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="button is-text is-small">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="help is-success mt-2">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="field is-grouped mt-5">
            <div class="control">
                <button class="button is-primary">{{ __('Save') }}</button>
            </div>

            @if (session('status') === 'profile-updated')
                <div class="control">
                    <p class="help is-success">{{ __('Saved.') }}</p>
                </div>
            @endif
        </div>
    </form>
</section>
