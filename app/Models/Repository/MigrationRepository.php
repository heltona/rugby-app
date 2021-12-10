<?php
namespace App\Models\Repository;

use App\Models\Migration\IMigration;

class MigrationRepository
{
    public function saveFans(IMigration $service)
    {
        $fans = $service->getFansFromMedia();
        
        //maybe a bulk update would be faster
        foreach($fans as $fan)
        {
            $fan->save();
        }
    }
}

