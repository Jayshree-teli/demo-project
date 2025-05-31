@extends('layouts.main')


@push('title')
<title>Register </title>
@endpush
@section('content')
<div class="container my-5">
   <div class="row justify-content-center">
     <div class="col-md-6">
  <h2 class="text-center mb-4">Sign Up</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="border p-4 rounded shadow-sm bg-light">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

        <p>Already signed up? <a href="{{ route('login') }}">Go to Login</a></p>
    </form>
</div>
</div>

</div>

@endsection