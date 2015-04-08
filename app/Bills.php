<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 02/04/2015
 * Time: 16:21
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Bills extends Eloquent {

    public function user()
    {
        return $this->belongsTo('User');
    }
}