<?php

namespace SettingsFa;

use MapasCulturais\App;
use SettingsFa\Controller;

class Plugin extends \MapasCulturais\Plugin
{
    public function _init()
    {
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('settingsfa', Controller::class);
    }
}
