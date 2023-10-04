<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponAbonnement extends Model
{
    use HasFactory;

    protected $table = 'coupon_abonnements';

    protected $fillable = [
        'id_paiement',
        'date_creation',
        'date_expiration',
        'code'
    ];

    public function paiement() :BelongsTo
    {
        return $this->belongsTo(Paiement::class);
    }

}
