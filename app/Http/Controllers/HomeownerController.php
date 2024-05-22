<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeowner;



class HomeownerController extends Controller
{
    public function index()
    {
        $homeowners = Homeowner::all();
    return view('homeowners.indexmember', compact('homeowners'));
    }
    public function create(){
        return view('homeowners.createmember');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'homeOwnerName' => 'required|string',
            'blockAndHouseNo' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string'
        ]);

        Homeowner::create($validatedData);

        return redirect()->route('homeowners.index')->with('success', 'Homeowner created successfully.');
    }

    public function edit(Homeowner $homeowner)
{
    return view('homeowners.edit', compact('homeowner'));
}


    public function update(Request $request, Homeowner $homeowner)
{
    $validatedData = $request->validate([
        'homeOwnerName' => 'required|string',
        'blockAndHouseNo' => 'required|string',
        'address' => 'required|string',
        'phone' => 'required|string'
    ]);

    $homeowner->update($validatedData);

    return redirect()->route('homeowners.index')->with('success', 'Homeowner updated successfully.');
}
public function destroy(Homeowner $homeowner)
{
    $homeowner->delete();

    return redirect()->route('homeowners.index')->with('success', 'Homeowner deleted successfully.');
}
}
