<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StorePost extends FormRequest
{
	
    public function authorize()
{
    return true; // gate will be responsible for access
}
 
public function rules()
{
    return [
        'p_o' => 'required',
        'p_p' => 'required',
        'val' => 'required',
        'stat' => 'required',
        'phone' => 'required',
        'body' => 'required',
    ];
}
}
