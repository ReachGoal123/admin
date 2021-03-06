<?php

namespace Mrzeta\Admin\Observers;

use Mrzeta\Admin\Entities\Visitor;
use Illuminate\Support\Facades\Request;

class VisitorObserver
{
    /**
     * Handle the specified event.
     */
    public function handle()
    {
        $isOnAdmin = Request::is('admin') || Request::is('admin/*');

        if (!$isOnAdmin) {
            Visitor::track();
        }
    }
}
