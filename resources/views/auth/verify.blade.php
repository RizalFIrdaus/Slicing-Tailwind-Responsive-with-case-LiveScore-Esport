@extends('layouts.auth.app')

@section('content')

<div style="background-image: url({{ asset('assets/img/auth/bg.jpg') }}) "
    class="bg-cover bg-no-repeat min-h-screen justify-center items-center flex">
    <div class=" w-[500px] bg-slate-50 p-10 rounded-xl shadow-2xl">
        <p class="text-2xl  font-bold">Verify Your Email Address</p>
        <p class="text-md font-light my-5 text-justify">A fresh verification link has been sent to your email address. Before proceeding, please check your email for a verification link.</p>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="font-semibold py-2 px-6 bg-[#fee74c] hover:bg-slate-600 hover:text-white">Send Email Verification</button>.
        </form>
    </div>

</div>

@endsection
