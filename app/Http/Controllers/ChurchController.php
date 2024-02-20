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
    public function create(Request $request)
    {
<<<<<<< HEAD
        $church = new Church;
        $church->identification = $request->input('Identification');
        $church->name = $request->input('name');
        $church->location = $request->input('location');
        $church->phone = $request->input('phone');
        $church->email = $request->input('email');
        $church->save();
       return redirect()->route('/churchHome');
        //return redirect()->route('confirmacion')->with('success', 'Los datos se han guardado correctamente.');
        
=======
        return view('churchCreate'); 
>>>>>>> 7b67ad357c7121925286c29d3f3b0797131bc320
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
