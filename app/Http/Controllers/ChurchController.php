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

    public function readView(){

        $churches = Church::all();

        return view('churchRead', ['churches' => $churches]);
    }

    public function updateView($idChurch)
    {
        $church = Church::where('idChurch', $idChurch)->first();

        return view('churchUpdate', ['church' => $church]);
    }

    public function edited(Request $request, $idChurch)
    {
        
        $church = Church::where('idChurch', $idChurch)->first();
        $church->identification = $request->input('Identification');
        $church->name = $request->input('name');
        $church->location = $request->input('location');
        $church->phone = $request->input('phone');
        $church->email = $request->input('email');
        $church->update();

        session()->flash('status', 'Church updated successfully');

        return to_route('church.read');

    }

    public function deleteView()
    {
        return view('churchDelete');
    }

    public function delete()
    {
        
    }

    public function eliminate($idChurch)
    {
        $church = Church::find($idChurch);
        $church->delete();
        session()->flash('status', 'Church deleted successfully');
        return redirect()->route('church.read');
    }

}
