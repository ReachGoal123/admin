<?php

namespace Mrzeta\Admin\Validation\Role;

use Mrzeta\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|unique:roles,slug',
        ];
    }
}
