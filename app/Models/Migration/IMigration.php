<?php
namespace App\Models\Migration;

use Illuminate\Database\Eloquent\Collection;

interface IMigration
{
    function getFansFromMedia(): Collection;
    
    function putFansOnMedia(Collection $fans);
}

