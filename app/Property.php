<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = ['description', 'price', 'brutto', 'netto', 'own_exp', 'deposit', 'sqm_price' ];

    public function propertycategories() {
        return $this->belongsToMany('App\PropertyCategories', 'property_has_categories', 'prop_id', 'cat_id');
    }

    public function files()
    {
        return $this->hasMany('App\PropertyFiles', 'property_id', 'id');
    }
}