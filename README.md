## Simple Administrator Package for Laravel 5

[![Build Status](https://travis-ci.org/pingpong-labs/admin.svg?branch=master)](https://travis-ci.org/pingpong-labs/admin)
[![Latest Stable Version](https://poser.pugx.org/pingpong/admin/v/stable.svg)](https://packagist.org/packages/pingpong/admin) [![Total Downloads](https://poser.pugx.org/pingpong/admin/downloads.svg)](https://packagist.org/packages/pingpong/admin) [![Latest Unstable Version](https://poser.pugx.org/pingpong/admin/v/unstable.svg)](https://packagist.org/packages/pingpong/admin) [![License](https://poser.pugx.org/pingpong/admin/license.svg)](https://packagist.org/packages/pingpong/admin)
[![HHVM Status](http://hhvm.h4cc.de/badge/pingpong/admin.svg)](http://hhvm.h4cc.de/package/pingpong/admin)

### Documentation
Installation

You can install this package quickly via composer command line by running the following command in your terminal.

    1: composer create-project laravel/laravel your-project-name --prefer-dist "5.1.*"
    2: cd your-project-name
    3: composer require mrzeta/admin

After the package is installed, we need to add the following service providers to the providers array in config/app.php.

    // file: config/app.php
    return [
        'providers' => [
            Mrzeta\Admin\Providers\SupportServiceProvider::class,
            Mrzeta\Admin\AdminServiceProvider::class,
        ]
    ];

<a name="configuration"></a>

Then we need to update the auth.model config value to Mrzeta\Admin\Entities\User.

    // file: config/auth.php
    return [
       'model' => Mrzeta\Admin\Entities\User::class,
    ];

If you want to use your App\User model, you can extends the Mrzeta\Admin\Entities\User class to your App\User or other model class.

    // file: app/User.php
    namespace App;
    
    class User extends \Mrzeta\Admin\Entities\User
    {
      //
    }

Next, publish the package's config and assets by running this following command.

    php artisan vendor:publish --provider="Mrzeta\Admin\AdminServiceProvider"

Next, install the package by running this following command.

    php artisan admin:install

username : admin@meetrue.com

password : suprise

then please visit you website/admin/login

enjoy it 😄

Done

Documentation is located in the [wiki](https://github.com/pingpong-labs/admin/wiki) page.

### Screenshot

[![Build Status](https://raw.githubusercontent.com/pingpong-labs/admin/master/shots/pingpong-admin-shot.png)](https://raw.githubusercontent.com/pingpong-labs/admin/master/shots/pingpong-admin-shot.png)

### License

This package is open-sourced software licensed under [The BSD 3-Clause License](http://opensource.org/licenses/BSD-3-Clause)
