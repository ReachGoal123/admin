<?php

namespace Mrzeta\Admin\Composers;

use Mrzeta\Admin\Entities\Category;

class ArticleFormComposer
{
    public function compose($view)
    {
        $categories = Category::lists('name', 'id');

        $view->with(compact('categories'));
    }
}
