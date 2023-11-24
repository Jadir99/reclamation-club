<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\reclamation;
use Illuminate\Database\Eloquent\Model;
class ReclamationContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reclamation'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //add new reclmaation
        $datereclamation =date('Y-m-d');
        $request->validate([
                        'reclamation' => 'required',]);
                $reclamation=new reclamation();
                $reclamation->corpreclamation=$request->input('reclamation');
                $reclamation->psudonom=auth()->user()->name;  
                $reclamation->datereclamation=$datereclamation;
                $reclamation->save();
                return redirect()->route('reclamation')->with('status','ur have been add reclamation !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
