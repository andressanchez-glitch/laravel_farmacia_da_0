<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drug extends Model
{
    protected $fillable = [
        'minsan_code',
        'name',
        'description',
        'expiration_date',
        'price',
        'company_id',
        'active_ingredient_id'
    ];

    
     /*  L'azienda farmaceutica che produce il farmaco. */
     
    public function producer(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    
   /*    Il principio attivo contenuto in questo farmaco. */
     
    public function ingredient(): BelongsTo
    {
        return $this->belongsTo(ActiveIngredient::class, 'active_ingredient_id');
    }
}
?>