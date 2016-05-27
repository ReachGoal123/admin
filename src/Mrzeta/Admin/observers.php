<?php

Event::listen('admin::routes', 'Mrzeta\Admin\Observers\RoutesObserver');

Event::listen('admin::visitors.track', 'Mrzeta\Admin\Observers\VisitorObserver');

Event::listen('admin::menus', 'Mrzeta\Admin\Observers\MenusObserver');
