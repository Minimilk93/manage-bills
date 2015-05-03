<?php
/**
 * Created by PhpStorm.
 * User: Shelby
 * Date: 03/05/2015
 * Time: 20:56
 */

namespace App\Http\Requests;


use Illuminate\Http\Request;

class CreateProfileRequest extends Request{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:providers,slug',

        ];
    }
}