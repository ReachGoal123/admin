<?php

namespace Mrzeta\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    protected $entities = [
        'User',
        'Article',
        'Page',
        'Category',
        'Role',
        'Permission',
    ];

    /**
     * Register the service provider.
     */
    public function register()
    {
        foreach ($this->entities as $entity) {
            $this->{'bind'.$entity.'Repository'}();
        }
    }

    protected function bindArticleRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Articles\ArticleRepository',
            'Mrzeta\Admin\Repositories\Articles\EloquentArticleRepository'
        );
    }

    protected function bindCategoryRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Categories\CategoryRepository',
            'Mrzeta\Admin\Repositories\Categories\EloquentCategoryRepository'
        );
    }

    protected function bindUserRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Users\UserRepository',
            'Mrzeta\Admin\Repositories\Users\EloquentUserRepository'
        );
    }

    protected function bindRoleRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Roles\RoleRepository',
            'Mrzeta\Admin\Repositories\Roles\EloquentRoleRepository'
        );
    }

    protected function bindPermissionRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Permissions\PermissionRepository',
            'Mrzeta\Admin\Repositories\Permissions\EloquentPermissionRepository'
        );
    }

    protected function bindPageRepository()
    {
        $this->app->bind(
            'Mrzeta\Admin\Repositories\Pages\PageRepository',
            'Mrzeta\Admin\Repositories\Pages\EloquentPageRepository'
        );
    }
}
