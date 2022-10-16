<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Testimoni');
    }
}
