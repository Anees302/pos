@extends('layouts.auth')


 @section('heading')
   <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
 @endsection

@section('content')
<form action="{{ route('login') }}" method="POST">

@if ($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
@endif

    @csrf
    <div class="form-outline form-white mb-4 mt-5">
            <input name="email" placeholder="Enter email" type="email" id="typeEmailX" class="form-control form-control-lg" />
            @error('email')
            <div class="text-danger">  {{ $message }} </div>
            @enderror
        </div>

    <div class="form-outline form-white mb-4">
            <input placeholder="Enter password" name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
            @error('password')
            <div class="text-danger">  {{ $message }} </div>
            @enderror
        </div>
@component('components.auth-button',['text'=>'Login'])

@endcomponent
    <div>
            <p class="mb-0 mt-3">Don't have an account? <a href="{{ route('create') }}" class="text-white-50 fw-bold">Sign Up</a>
            </p>
    </div>
</form>
@endsection











