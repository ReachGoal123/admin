<?php

namespace Mrzeta\Admin\Validation\Permission;

use Mrzeta\Admin\Validation\Validator;
use Illuminate\Support\Facades\Request;

class Update extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:permissions,slug,'.Request::segment(3),
        ];
    }
}
