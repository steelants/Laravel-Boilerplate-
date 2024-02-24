<x-layout-auth>
    <form method="POST"action="{{ route('register.submit') }}">
        @csrf

        <label for="name">{{ __('Name') }}:</label><br>
        <input type="text" id="name" name="name" placeholder="JohnDoe"><br>
        @error('name')
            <spasn class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong><br>
            </span>
        @enderror

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

        <label for="password_confirmation">{{ __('Confirm Password') }}:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"><br>
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong><br>
            </span>
        @enderror

        <input type="submit" value="{{ __('Register') }}">
    </form>
</x-layout-auth>