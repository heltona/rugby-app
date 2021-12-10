<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Exception;
use App\Models\Migration\SpreadsheetMigrationService;
use App\Models\Migration\XmlMigrationService;
use App\Models\Repository\MigrationRepository;


class MigrationController
{

    private $rep;

    public function __construct(MigrationRepository $repository)
    {
        $this->rep = $repository;
    }

    public function migrateXlsx(Request $req)
    {
        $return = false;
        
        try {

            $fileName = $req->file("torcedor")->store("upload");

            $this->rep->saveFans(new SpreadsheetMigrationService($fileName));
            $return = true;
        } catch (Exception $ex) {}

        // @todo get from orm
        return view("concluded-operation", [
            "return" => $return
        ]);
    }

    public function migrateXml(Request $req)
    {
        $return = false;
        
        try {
            
            $fileName = $req->file("torcedor")->store("upload");
            
            $this->rep->saveFans(new XmlMigrationService($fileName));
            $return = true;
        } catch(Exception $ex){}
         
        
        // @todo get real result from orm
        return view("concluded-operation", [
            "return" => $return
        ]);
    }
}

