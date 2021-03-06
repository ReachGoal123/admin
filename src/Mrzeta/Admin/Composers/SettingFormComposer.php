<?php

namespace Mrzeta\Admin\Composers;

class SettingFormComposer
{
    public function compose($view)
    {
        $themes = [
            'default' => 'Default',
            'pink' => 'Pink',
        ];

        $view->with(compact('themes'));
    }
}
