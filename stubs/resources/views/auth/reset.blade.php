<x-layout-auth>
    <form method="POST"action="{{ isset($token) ? route('password.update') : route('password.email') }}">
        @csrf

        @if (isset($token))
            <input type="hidden" name="token" value="{{ $token }}">

            <label for="email">{{ __('Email') }}:</label><br>
            <input type="email" id="email" name="email" placeholder="email@post.xx" value="{{ $email }}"><br>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong><br>
                </span>
            @enderror

            <label for="password">{{ __('Password') }}:</label><br>
            <input type="password" id="password" name="password" value="{{ $password ?? old('password') }}"><br>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong><br>
                </span>
            @enderror

            <label for="password_confirmation">{{ __('Confirm Password') }}:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation"
                value="{{ $password_confirmation ?? old('password_confirmation') }}"><br>
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong><br>
                </span>
            @enderror
        @else
            <label for="email">{{ __('Email') }}:</label><br>
            <input type="email" id="email" name="email" placeholder="email@post.xx"
                value="{{ old('email') }}"><br>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong><br>
                </span>
            @enderror
        @endif

        <input type="submit" value="{{ __('Send Password Reset Link') }}">
    </form>
</x-layout-auth>