<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChurchController extends Controller
{

    public function home()
    {
        return view('churchHome'); 
    }
    public function create()
    {
        // LOGICA METER LOS DATOS EN LA BASE DE DATOS
        return view('/churchCreate'); 
    }

    public function read()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
