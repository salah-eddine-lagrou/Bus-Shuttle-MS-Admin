<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExprimerReport extends Model
{
    use HasFactory;

    protected $table = 'exprimer_report';

    protected $fillable = [
        'subject',
        'description',
        'id_entreprise',
    ];


    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class);
    }

}
