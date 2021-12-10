<?php
namespace App\Http\Controllers;

use App\Models\Fan;
use Illuminate\Http\Request;
use App\Models\Repository\FanRepository;

class FanController
{
    private $rep;
    
    public function __construct(FanRepository $rep)
    {
        $this->rep = $rep;
    }

    public function getAllFans()
    {
        $allFans = $this->rep->getAllFans();
        
        return view('all-fans', [
            "fans" => $allFans
        ]);
    }

    public function getIncompleteFans()
    {
        $incompleteFans = $this->rep->getIncompleteFans();
        
        return view('incomplete-fans', [
            "fans" => $incompleteFans
        ]);
    }

    public function getIndividualFan(int $id)
    {
        $singleFan = $this->rep->getIndividualFan($id);

        return view('individual-fan', [
            "fan" => $singleFan
        ]);
    }

    public function editFan(Request $req)
    {
        $return = false;

        try {
            
            $id = $req->input("id");
            
            $return = $this->rep->editFan($id, $req->all());
            
        } catch (\Exception $ex) {}

        return view('concluded-operation', [
            "return" => $return
        ]);
    }
    
    public function createNewFan(Request $req)
    {
        $return = false;
        
        try {            
            
            $return = $this->createNewFan($req->all());
            
        } catch (\Exception $ex) {}
        
        return view('concluded-operation', [
            "return" => $return
        ]);
    }
}

