<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\XmlService;
use App\Models\SpreadSheetService;
use App\Models\MigrationRepository;

class MigrationController
{
    private $rep;
    
    public function __construct(MigrationRepository $repository)
    {
        $this->rep = $repository;
    }
    
    public function migrateXlsx(Request $req)
    {
        $fileName = $req->file("torcedor")->store("upload");
        
        $this->rep->saveFans(new SpreadSheetService($fileName));
        
        //@todo get from orm
        return view("concluded-operation", ["return" => true]);
        
    }
    
    public function migrateXml(Request $req)
    {
        $fileName = $req->file("torcedor")->store("upload");        
        
        $this->rep->saveFans(new XmlService($fileName));
        
        //@todo get real result from orm
        return view("concluded-operation", ["return" => true]);
        
    }
}

