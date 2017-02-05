<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutualFunds extends Model
{
    protected $fillable=[
        'customer_id',
        'scheme',
        'nominee',
        'relationship_with_nominee',
        'balance_amount',
        'acquired_date',
        'investment_amount',
        'current_value',
    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
