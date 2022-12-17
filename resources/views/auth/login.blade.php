@extends('layouts.auth.app')
@section('title' ,'Login')
@section('content')
<div style="background-image: url({{ asset('assets/img/auth/bg.jpg') }}) "
    class="bg-cover bg-no-repeat min-h-screen justify-center items-center flex">
    <div class=" w-[500px] bg-slate-50 p-10 rounded-xl shadow-2xl">
        <div class="flex items-center">
            <img src="{{ asset('logo.svg') }}" class="mr-4">
            <p class="text-2xl font-bold">Live Score</p>
        </div>
        <div class="mt-4">
            <p class="text-xl font-semibold">Login</p>
            <p class="text-sm font-light mt-2">See your growth and get consulting support !</p>
        </div>
        <div class="mt-4 flex justify-center">
            <a
                href="{{route('google.redirect')}}"
                class="py-3 px-8 bg-[#fee74c] hover:bg-slate-600 hover:text-white shadow-lg text-slate-600 rounded-xl text-sm flex items-center">
                <i class="fa-brands fa-google mr-2 text-2xl"></i>
                Sign in with Google
            </a>
        </div>
        <form class="mt-4" method="POST" action="{{ route('login') }}">
            @csrf
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
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 bg-gray-50 rounded border text-[#fee74c] border-gray-300"
                        >
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                    me</label>
                <a class="ml-4 text-sm text-slate-600 underline " href="{{ url('register') }}">Signup ?</a>
            </div>
            <button type="submit"
                class="text-slate-600 bg-[#fee74c] shadow-md hover:bg-slate-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
            </button>
        </form>
    </div>


</div>

@endsection