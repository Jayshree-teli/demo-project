<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function detail($slug, $id)
    {
        // Here you would typically fetch the category details from the database
        // using the $id and return a view with that data.
        
        // For demonstration purposes, let's just return a view with the slug and id.
        return view('category');
    }
}
