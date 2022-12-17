@extends('layouts.auth.app')
@section('title' ,'Register')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div style="background-image: url({{ asset('assets/img/auth/bg.jpg') }}) "
    class="bg-cover bg-no-repeat min-h-screen justify-center items-center flex">
    <div class=" w-[500px] bg-slate-50 p-10 rounded-xl shadow-2xl">
        <div class="flex items-center">
            <img src="{{ asset('logo.svg') }}" class="mr-4">
            <p class="text-2xl font-bold">Live Score</p>
        </div>
        <div class="mt-4">
            <p class="text-xl font-semibold">Register</p>
            <p class="text-sm font-light mt-2">Connect with us to growth together!</p>
        </div>
        <form class="mt-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium @error('name') text-red-500 @enderror" >Your Name</label>
                <input type="text" id="name"
                    class="@error('name') border-red-500 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="max 8 characters" name="name" required value="{{ old('name') }}">
                    @error('name')
                        <span class="text-red-600" role="alert">
                            <p class="font-bold text-sm">{{ $message }}</p>
                        </span>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium @error('email') text-red-500 @enderror" >Your email</label>
                <input type="text" id="email"
                    class="@error('email') border-red-500 @enderror bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="name@flowbite.com" name="email" required value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-600" role="alert">
                            <p class="font-bold text-sm">{{ $message }}</p>
                        </span>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium  @error('password') text-red-500 @enderror ">Your password</label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border @error('email') border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
                    @error('password')
                        <span class="text-red-600" role="alert">
                            <p class="font-bold text-sm">{{ $message }}</p>
                        </span>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="password-confirm" class="block mb-2 text-sm font-medium  @error('password') text-red-500 @enderror ">Confirmation Password</label>
                <input type="password" id="password-confirm" name="password_confirmation"
                    class="bg-gray-50 border @error('email') border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    required>
            </div>
            <div class="flex items-start mb-6">
                <a class="ml-4 text-sm text-slate-600 underline " href="{{ url('login') }}">Already have account</a>
            </div>
            <button type="submit"
                class="text-slate-600 bg-[#fee74c] shadow-md hover:bg-slate-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                <i class="fa-solid fa-right-to-bracket"></i>
                Register
            </button>
        </form>
    </div>


</div>
@endsection
