<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * The shippingProviders that belong to the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shippingProviders()
    {
        return $this->belongsToMany(ShippingProvider::class)->withPivot('supported_citites');
    }
}
