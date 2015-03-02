<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Provider extends Eloquent
{
    /**
     * Fillable fields for inserting a new provider.
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'slug'
    ];

}