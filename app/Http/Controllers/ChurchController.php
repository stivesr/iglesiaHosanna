<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Church;

class ChurchController extends Controller
{

    public function home()
    {
        return view('churchHome'); 
    }

}
