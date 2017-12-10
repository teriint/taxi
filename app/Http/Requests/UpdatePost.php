<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UpdatePost extends FormRequest
{
	
    public function authorize()
{
    return true;
}
 
public function rules()
{
    $id = $this->route('post')->id;
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
