<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="help is-danger" />
        </div>

        <!-- Email Address -->
        <div class="field mt-4">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="help is-danger" />
        </div>

        <!-- Role Selection -->
        <div class="field mt-4">
            <label class="label" for="role">I want to be a:</label>
            <div class="control">
                <div class="select is-fullwidth">
                    <select id="role" name="role" required>
                        <option value="buyer" {{ old('role') == 'buyer' ? 'selected' : '' }}>Buyer</option>
                        <option value="seller" {{ old('role') == 'seller' ? 'selected' : '' }}>Seller</option>
                    </select>
                </div>
            </div>
            <x-input-error :messages="$errors->get('role')" class="help is-danger" />
        </div>

        <!-- Password -->
        <div class="field mt-4">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input id="password" class="input" type="password" name="password" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="help is-danger" />
        </div>

        <!-- Confirm Password -->
        <div class="field mt-4">
            <label class="label" for="password_confirmation">Confirm Password</label>
            <div class="control">
                <input id="password_confirmation" class="input" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="help is-danger" />
        </div>

        <div class="level mt-5">
            <div class="level-left">
                <a class="is-size-7 has-text-link" href="{{ route('login') }}">
                    Already registered?
                </a>
            </div>
            <div class="level-right">
                <button class="button is-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
</x-guest-layout>
