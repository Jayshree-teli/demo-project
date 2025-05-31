@extends('layouts.main')


@push('title')
<title>Dashoboard </title>
@endpush
@section('content')


<h1>Welcome to Your Dashboard,  {{ auth()->check() ? auth()->user()->name : 'Guest' }}!</h1>

    

    <a href="{{ route('logout') }}">Logout</a>

@endsection