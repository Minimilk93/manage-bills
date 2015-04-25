<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 24/04/2015
 * Time: 12:26
 */

namespace App\Http\Requests;


class CreateReviewRequest extends Request {
    public function rules()
    {
        return [
            'location' => 'required',
            'utility' => 'required',
            'review' => 'required',

        ];
    }
}