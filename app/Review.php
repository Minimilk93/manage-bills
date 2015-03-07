<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 07/03/2015
 * Time: 13:08
 */

namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Review extends Eloquent{
    protected $fillable = [
        'utility', 'location', 'review'
    ];

}