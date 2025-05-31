@extends('layouts.main')


@push('title')
<title>category Page </title>
@endpush
@section('content')
  <h1>Welcome, Admin!</h1>
    
    <p>You are logged in as an admin user.</p>

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @endsection