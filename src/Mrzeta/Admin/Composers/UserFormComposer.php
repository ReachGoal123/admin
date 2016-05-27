<?php

namespace Mrzeta\Admin\Composers;

use Mrzeta\Admin\Entities\Role;

class UserFormComposer
{
    public function compose($view)
    {
        $roles = Role::lists('name', 'id');

        $view->with(compact('roles'));
    }
}
