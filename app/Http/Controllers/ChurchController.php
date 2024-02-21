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

    public function createView(){
        return view('churchCreate');
    }

    public function create(Request $request)
    {
        $church = new Church;
        $church->identification = $request->input('Identification');
        $church->name = $request->input('name');
        $church->location = $request->input('location');
        $church->phone = $request->input('phone');
        $church->email = $request->input('email');
        $church->save();
        return redirect()->route('church.create');

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
