<x-layout-auth>
    <form method="POST"action="{{ route('login.submit') }}">
        @csrf

        <label for="email">{{ __('Email') }}:</label><br>
        <input type="email" id="email" name="email" placeholder="email@post.xx"><br>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong><br>
            </span>
        @enderror

        <label for="password">{{ __('Password') }}:</label><br>
        <input type="password" id="password" name="password"><br>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong><br>
            </span>
        @enderror

        @if (Route::has('password'))
            <a href="{{ route('password') }}">
                {{ __('Password Reset') }} ?
            </a><br>
        @endif

        <input type="submit" value="{{ __('Login') }}">
        @if (Route::has('registration'))
            <a href="{{ route('registration') }}">
                {{ __('Password Registration') }} ?
            </a>
        @endif
    </form>
</x-layout-auth>