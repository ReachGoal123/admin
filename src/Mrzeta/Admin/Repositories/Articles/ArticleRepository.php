<?php

namespace Mrzeta\Admin\Repositories\Articles;

use Mrzeta\Admin\Repositories\Repository;

interface ArticleRepository extends Repository
{
    public function getArticle();
}
