<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trialController extends Controller
{
    public function trial(){
        return view('patientFiles\sample');
    }
}
