<!-- admin/login.blade.php -->
@extends('layouts.main')


@push('title')
<title>Admin Login </title>
@endpush
@section('content')
<div class="container my-5">
   <div class="row justify-content-center">
     <div class="col-md-6">
      <h2 class="text-center mb-4">Login</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color:red;" class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login.submit') }}" class="border p-4 rounded shadow-sm bg-light">
        @csrf
        <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" name="email" required class="form-control"><br>
</div>

<div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" name="password" required class="form-control"><br>
</div>
        <button type="submit">Login</button>
    </form>
<!-- <form action="{{ route('admin.login.submit') }}" method="POST" class="border p-4 rounded shadow-sm bg-light">
    @csrf
   <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" name="email" required class="form-control"><br>
</div>
<div class="mb-3">
   <label class="form-label">Password:</label>
    <input type="password" name="password" placeholder="Password" required>
    </div>
    <button type="submit">Login</button>
</form> -->
</div>
</div>
</div>

@if($errors->any())
    <p>{{ $errors->first() }}</p>
@endif

@endsection