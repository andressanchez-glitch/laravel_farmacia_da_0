<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    

    protected $guarded = [];

    /* Restituisce l'elenco dei farmaci prodotti da questa azienda. */
    
    public function prodotti()
    {
        return $this->hasMany(Drug::class, 'company_id', 'id');
    }
}