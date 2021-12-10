<?php
namespace App\Http\Controllers;

use App\Models\Fan;
use Illuminate\Http\Request;

class FanController
{

    public function getAllFans()
    {
        $allFans = Fan::get();
        return view('all-fans', [
            "fans" => $allFans
        ]);
    }

    public function getIncompleteFans()
    {
        $incompleteFans = Fan::where("email", "")->orWhere("telefone", "")->get();
        return view('incomplete-fans', [
            "fans" => $incompleteFans
        ]);
    }

    public function getIndividualFan(int $id)
    {
        $singleFan = Fan::find($id);

        return view('individual-fan', [
            "fan" => $singleFan
        ]);
    }

    public function editFan(Request $req)
    {
        $return = false;

        try {
            
            $id = $req->input("id");
            $fan = Fan::find($id);
            $return = $fan->update($req->all());
        } catch (\Exception $ex) {}

        return view('concluded-operation', [
            "return" => $return
        ]);
    }
    
    public function createNewFan(Request $req)
    {
        $return = false;
        
        try {
            
            
            $fan = new Fan();
            $fan->fill($req->all());
            $return = $fan->save();
            
        } catch (\Exception $ex) {}
        
        return view('concluded-operation', [
            "return" => $return
        ]);
    }
}

