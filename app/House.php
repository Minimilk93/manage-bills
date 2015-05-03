<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 08/04/2015
 * Time: 15:28
 */


namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class House extends Eloquent{

    protected $fillable = ['first_line_address', 'city', 'postcode'];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function bills()
    {
        return $this->belongsToMany('Bills');
    }
}