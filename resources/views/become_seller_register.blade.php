@extends('layouts.main')


@push('title')
<title>become_seller </title>
@endpush
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center mb-4">Become a Seller</h3>

            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('seller.register') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Address</label>
                    <textarea name="address" class="form-control" rows="2" required></textarea>
                </div>

                <div class="mb-3">
                    <label>State</label>
                    <!-- <pre>{{ print_r($states, true) }}</pre> -->

                    <select name="state_id" id="state" class="form-select" required>
                        <option value="">Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>City</label>
                    <select name="city_id" id="city" class="form-select" required>
                        <option value="">Select City</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Pincode</label>
                    <input type="text" name="pincode" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Shop Name</label>
                    <input type="text" name="shop_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Shop Type</label>
                    <select name="shop_type" class="form-select" required>
                        <option value="mobile">Mobile</option>
                        <option value="fashion">Fashion</option>
                        <option value="electronics">Electronics</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Shop Image</label>
                    <input type="file" name="shop_image" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Shop Logo</label>
                    <input type="file" name="shop_logo" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register as Seller</button>
            </form>
        </div>
    </div>
</div>

<!-- Script for dynamic city loading -->
<script>
    document.getElementById('state').addEventListener('change', function () {
        var stateId = this.value;
        fetch('/get-cities/' + stateId)
            .then(response => response.json())
            .then(data => {
                var citySelect = document.getElementById('city');
                citySelect.innerHTML = '<option value="">Select City</option>';
                data.forEach(function(city) {
                    var option = document.createElement('option');
                    option.value = city.id;
                    option.text = city.name;
                    citySelect.appendChild(option);
                });
            });
    });
</script>

@endsection