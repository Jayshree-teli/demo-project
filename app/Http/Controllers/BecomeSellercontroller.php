<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class BecomeSellercontroller extends Controller
{
    //
     public function showForm()
    {
        // $states = State::all();
          $states = \App\Models\State::all();
        return view('become_seller_register', compact('states'));
    }

    // Handle form submission
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:sellers,email',
            'phone'        => 'required|string|max:15',
            'password'     => 'required|string|min:6|confirmed',
            'address'      => 'required|string',
            'state_id'     => 'required|exists:states,id',
            'city_id'      => 'required|exists:cities,id',
            'pincode'      => 'required|string|max:10',
            'shop_name'    => 'required|string|max:255',
            'shop_type'    => 'required|in:mobile,fashion,electronics',
            'shop_image'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'shop_logo'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

   
           $state = State::findOrFail($request->state_id);
    $city = City::findOrFail($request->city_id);
        // Store image and logo
        $shopImagePath = $request->file('shop_image')->store('uploads/shop_images', 'public');
        $shopLogoPath  = $request->file('shop_logo')->store('uploads/shop_logos', 'public');

        // Save seller to DB
        Seller::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'password'    => Hash::make($request->password),
            'address'     => $request->address,
            // 'state'    => $request->state_id,
            // 'city'     => $request->city_id,
             'state'       => $state->name,  // ✅ Save state name, not ID
        'city'        => $city->name,   // ✅ Save city name, not ID
            'pincode'     => $request->pincode,
            'shop_name'   => $request->shop_name,
            'shop_type'   => $request->shop_type,
            'shop_image'  => $shopImagePath,
            'shop_logo'   => $shopLogoPath,
        ]);

        return redirect()->route('seller.form')->with('success', 'Seller registered successfully!');
    }

    // Get cities by state (for AJAX)
    public function getCities($state_id)
    {
        $cities = City::where('state_id', $state_id)->get();
        return response()->json($cities);
    }
}
