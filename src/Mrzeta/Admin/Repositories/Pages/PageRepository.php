<?php

namespace Mrzeta\Admin\Repositories\Pages;

use Mrzeta\Admin\Repositories\Repository;

interface PageRepository extends Repository
{
    public function getPage();
}
