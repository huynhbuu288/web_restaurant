<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservation extends Controller
{
    public function reservation(){
        return view('pages.reservation');
    }
}
