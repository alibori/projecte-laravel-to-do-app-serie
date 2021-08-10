@extends('layouts.guest')

@section('title', __('Login'))

@section('content')
    <div class="block mx-auto mt-5 pl-2 pr-2 max-w-md">
        <a href="{{route('home')}}">
            <img class="block mx-auto mt-8 mb-5" src="{{asset('images/to-do-app-logo.png')}}" alt=" logo">
        </a>

        <form action="{{route('login')}}" method="post">
            @csrf
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

            <input class="btn-green" type="submit" value="{{__('Login')}}">
        </form>
        <p class="text-right">{{__('You don\'t have an account yet?')}} <a href="{{route('register')}}">{{__('Register')}}</a></p>
    </div>
@endsection
