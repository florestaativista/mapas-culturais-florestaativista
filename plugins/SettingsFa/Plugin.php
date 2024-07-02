<?php

namespace SettingsFa;

use MapasCulturais\App;
use SettingsFa\Controller;

class Plugin extends \MapasCulturais\Plugin
{
    public function _init()
    {
        $app = App::i();
        $self = $this;

        $app->hook("template(<<*>>.<<*>>.head):end", function () use($self){
            $config = $self->config;
            if($config['tag_manager_key']){
            $this->part('tag-manager',["config" => $config]);
            }
        });
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('settingsfa', Controller::class);
    }
}
