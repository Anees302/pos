@extends('layouts.auth')
@section('heading')
<h2>
    Wellcome {{ $name }}
</h2>
@endsection
@section('content')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection

