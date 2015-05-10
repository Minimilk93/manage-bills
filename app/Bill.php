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

    protected $table = 'bills';

    protected $fillable = ['bill_name', 'bill_amount', 'bill_shared', 'bill_comments', 'bill_divide', 'bill_date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}