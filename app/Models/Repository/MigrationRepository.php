<?php
namespace App\Models;

class MigrationRepository
{
    public function saveFans(IMigration $service)
    {
        $fans = $service->getFansFromMedia();
        
        foreach($fans as $fan)
        {
            $fan->save();
        }
    }
}

