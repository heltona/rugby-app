<?php
namespace App\Models\Repository;

use App\Models\Fan;
use Illuminate\Database\Eloquent\Collection;

class FanRepository
{
    public function createNewFan(array $data)
    {
        $fan = new Fan();
        $fan->fill($data);
        return $fan->save();
    }
    public function editFan(int $userId, array $fields)
    {
        $fan = Fan::find($userId);
        return $fan->update($fields);
    }
    
    public function getAllFans(): Collection
    {
        return Fan::get();
    }
    
    public function getIncompleteFans(): Collection
    {
        return Fan::where("email", "")->orWhere("telefone", "")->get();
        
    }
    
    public function getIndividualFan(int $id): FAn
    {
        return Fan::find($id);
    }
}

