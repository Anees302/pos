@extends('layouts.auth')

@section('heading')

<h2 class="fw-bold mb-2 text-uppercase">Register</h2>
  @endsection

@section('content')
<form action="{{ route('register') }}" method="POST">
@csrf
    <div   class="form-outline form-white mb-4 mt-5">
    <input placeholder="Enter name" value="{{ old('name') }}" type="text" name="name" id="name" class="form-control form-control-lg" />
    @error('name')
    <div class="text-danger">  {{ $message }} </div>
    @enderror
</div>


<div class="form-outline form-white mb-4 ">
    <input placeholder="Enter email" value="{{ old('email') }}" name="email" type="email" id="email" class="form-control form-control-lg" />
    @error('email')
    <div class="text-danger">  {{ $message }} </div>
    @enderror</div>


<div class="form-outline form-white mb-4 ">
  <input placeholder="Enter password" name="password" type="password" id="password" class="form-control form-control-lg" />
  @error('password')
  <div class="text-danger">  {{ $message }} </div>
  @enderror</div>

@component('components.auth-button',['text'=>'Register'])

@endcomponent
<div>
    <p class="mb-0 mt-3">Already have an acount? <a href="{{ route('showLogin') }}" class="text-white-50 fw-bold">Login</a>
    </p>
</div>
</form>

@endsection
