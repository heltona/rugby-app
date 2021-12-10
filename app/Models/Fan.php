<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    protected $table = "FAN";
    protected $fillable = ['nome', 'documento', 'cep', 'endereco', 'bairro', 'cidade', 'uf', 'telefone','email', 'ativo',  ];
        
    
}

