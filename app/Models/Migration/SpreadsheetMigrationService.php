<?php
namespace App\Models\Migration;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx as XlsxReader;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use App\Models\Fan;

class SpreadsheetMigrationService implements IMigration
{
    private $fileLocation;
    
    public function __construct($path)
    {
        $this->fileLocation = Storage::path($path);
        
    }
    
    public function getFansFromMedia(): Collection
    {
        $fans = new Collection();
        
        $reader = new XlsxReader();
        $spreadsheet = $reader->load($this->fileLocation);        
        $worksheet = $spreadsheet->getActiveSheet();
               
        for($i = 2; $worksheet->cellExists("A" . $i); $i++)
        {
            $fan = new Fan();
            
            $fan->nome = $worksheet->getCell("A" . $i);
            $fan->documento = $worksheet->getCell("B" . $i);
            $fan->cep = $worksheet->getCell("C" . $i);
            $fan->endereco = $worksheet->getCell("D" . $i);
            $fan->bairro = $worksheet->getCell("E" . $i);
            $fan->cidade = $worksheet->getCell("F" . $i);
            $fan->uf = $worksheet->getCell("G" . $i);
            $fan->telefone = $worksheet->getCell("H" . $i);
            $fan->email = $worksheet->getCell("I" . $i);
            $fan->ativo = $worksheet->getCell("J" . $i);
            
            $fans->add($fan);
        }
        
        return $fans;       
    }
    
    public function putFansOnMedia(Collection $fans)
    {
        $spreadsheet = new Spreadsheet();
        $worksheet = $spreadsheet->getActiveSheet();        
        $i = 1;
        
        foreach($fans as $fan) {
            
            $worksheet->setCellValue("A" . $i, $fan->nome);
            $worksheet->setCellValue("B" . $i, $fan->documento);
            $worksheet->setCellValue("C" . $i, $fan->cep);
            $worksheet->setCellValue("D" . $i, $fan->endereco);
            $worksheet->setCellValue("E" . $i, $fan->bairro);
            $worksheet->setCellValue("F" . $i, $fan->cidade);
            $worksheet->setCellValue("G" . $i, $fan->uf);
            $worksheet->setCellValue("H" . $i, $fan->telefone);
            $worksheet->setCellValue("I" . $i, $fan->email);
            $worksheet->setCellValue("J" . $i, $fan->ativo);
            
            $i++;
        }
        
        $writer = new XlsxWriter($spreadsheet);
        echo $this->fileLocation;
        $writer->save($this->fileLocation);
        
    }
    
    
    
    
    
    
    
    
    
}

