<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 09/05/2015
 * Time: 15:18
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Bill extends Eloquent{

    public function user()
    {
        return $this->belongsTo('House');
    }
}