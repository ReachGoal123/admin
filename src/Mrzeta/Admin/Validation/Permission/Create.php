<?php

namespace Mrzeta\Admin\Validation\Permission;

use Mrzeta\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:permissions,slug',
        ];
    }
}
