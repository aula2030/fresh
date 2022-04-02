<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    protected $appends = ['fullCustomerName', 'fullAddress'];

    /**
     * CountryLang relation N to 1
     *
     * @return BelongsTo
     */
    public function country_lang(): BelongsTo
    {
        return $this->belongsTo(CountryLang::class, 'id_country', 'id_country');
    }

    /**
     * Attibute: Full customer name
     *
     * @return Attribute
     */
    public function fullCustomerName(): Attribute
    {
        return Attribute::get(fn() => $this->firstname . " " . $this->lastname);
    }

    /**
     * Attibute: Full address data
     *
     * @return Attribute
     */
    public function fullAddress(): Attribute
    {
        return Attribute::get(fn() => implode(", ", [$this->address1, $this->address2, $this->city]));
    }
}
