<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content_data;

class ShowController extends Controller
{
    public function show ()
    {
        $table=Content_data::all();
        return view ('button.button', compact('table'));
    }
} 
