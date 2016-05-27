<?php

namespace Mrzeta\Admin\Validation\Role;

use Mrzeta\Admin\Validation\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:roles,slug,'.Request::segment(3),
        ];
    }
}
