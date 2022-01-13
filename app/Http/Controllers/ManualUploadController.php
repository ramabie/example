<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualUploadController extends Controller
{
    public function index()
    {
        return view('manual-upload');
    }

    public function store(Request $request)
    {
        // ddd($request);

        return $request->file('imageName')->store('photos');
    }
}
