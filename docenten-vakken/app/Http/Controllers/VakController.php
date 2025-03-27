<?php

namespace App\Http\Controllers;

use App\Models\Vak;

class VakController extends Controller
{
    public function index()
    {
        $vakken = Vak::with('docent')->orderBy('naam')->get();
        return view('vakken.index', compact('vakken'));
    }
}

