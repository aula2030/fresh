<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $dates = ['date_add'];

    /**
     * Address relation N to 1
     *
     * @return BelongsTo
     */
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'id_address_delivery', 'id_address');
    }

    /**
     * OrderDetail relation 1 to N
     *
     * @return HasMany
     */
    public function order_details(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'id_order', 'id_order');
    }

    /**
     * OrderStateLang relation N to 1
     *
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(OrderStateLang::class, 'current_state', 'id_order_state');
    }
}
