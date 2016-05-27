<?php

View::composer('admin::articles.form', 'Mrzeta\Admin\Composers\ArticleFormComposer');
View::composer('admin::*', 'Mrzeta\Admin\Composers\LayoutComposer');
View::composer('admin::users.form', 'Mrzeta\Admin\Composers\UserFormComposer');
View::composer('admin::roles.form', 'Mrzeta\Admin\Composers\RoleFormComposer');
View::composer('admin::settings', 'Mrzeta\Admin\Composers\SettingFormComposer');
