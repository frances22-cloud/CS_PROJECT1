
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
      <h1 style="color:blue; text-align:center; font-size:30px;">WELCOME TO LOGIN</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>




<!--<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>FranDen Dietries</title>
  <link href="/home/css/login.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="align">
  <div class="grid">
    <form  method="POST" class="form login" action="{{ route('login') }}">
    @csrf
      <div class="form_field">
        <label><i class="fa fa-user" style="color: #606468;"></i></label>
        <input type="text" name="email" class="form_input" placeholder="Username" required>
      </div>
      <div class="form_field">
        <label><i class="fa fa-lock" style="color: #606468;"></i></label>
        <input type="password" name="password" class="form_input" placeholder="Password" required>
      </div>
      <div class="form_field">
        <button class="submitButton" type="submit">Submit</button>
      </div>
    </form>
    <p class="text--center">Not a member? <a href="https://www.web-leb.com/code">Register</a></p>
  </div>
</body>
</html>-->
