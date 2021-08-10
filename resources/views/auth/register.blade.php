@extends('layouts.guest')

@section('title', __('Register'))

@section('content')
    <div class="block mx-auto mt-5 pl-2 pr-2 max-w-md">
        <a href="{{route('home')}}">
            <img class="block mx-auto mt-8 mb-5" src="{{asset('images/to-do-app-logo.png')}}" alt=" logo">
        </a>

        <form action="{{route('register')}}" method="post">
            @csrf
            <label for="name">{{__('Name')}}</label>
            @error('name')
                <span class="form-error">{{__($message)}}</span>
            @enderror
            <input class="mb-4" type="text" name="name" required>

            <label for="email">{{__('Email')}}</label>
            @error('email')
            <span class="form-error">{{__($message)}}</span>
            @enderror
            <input class="mb-4" type="email" name="email" required>

            <label for="password">{{__('Password')}}</label>
            @error('password')
            <span class="form-error">{{__($message)}}</span>
            @enderror
            <input type="password" name="password" required>

            <label for="password_confirmation">{{__('Password confirmation')}}</label>
            @error('password_confirmation')
                <span class="form-error">{{__($message)}}</span>
            @enderror
            <input type="password" name="password_confirmation" required>

            <input class="btn-green" type="submit" value="{{__('Register')}}">
        </form>
        <p class="text-right">{{__('Do you have an account?')}} <a href="{{route('login')}}">{{__('Login')}}</a></p>
    </div>
@endsection
