<?php

namespace SettingsFa;

use MapasCulturais\App;
use SettingsFa\Controller;

class Plugin extends \MapasCulturais\Plugin
{
    public function __construct(array $config = [])
    {
        $config += [
            "tag_manager_key" => env("TAG_MANAGER_KEY",""),
        ];

        parent::__construct($config);
    }

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
