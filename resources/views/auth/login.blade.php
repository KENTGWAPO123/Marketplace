<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="help is-danger" />
        </div>

        <!-- Password -->
        <div class="field mt-4">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input id="password" class="input" type="password" name="password" required autocomplete="current-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="help is-danger" />
        </div>

        <!-- Remember Me -->
        <div class="field mt-4">
            <label class="checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                Remember me
            </label>
        </div>

        <div class="level mt-5">
            <div class="level-left">
                @if (Route::has('password.request'))
                    <a class="is-size-7 has-text-link" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>
            <div class="level-right">
                <button class="button is-primary">
                    Log in
                </button>
            </div>
        </div>
    </form>
</x-guest-layout>
