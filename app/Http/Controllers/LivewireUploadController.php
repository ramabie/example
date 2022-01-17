<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireUploadController extends Controller
{
    public function index()
    {
        return view('upload-livewire');
    }
}
