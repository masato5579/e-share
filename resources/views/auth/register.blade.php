<div>
    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required />
            </div>

            <!-- Already Registered-->
            <div>
                <a href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

</div>
