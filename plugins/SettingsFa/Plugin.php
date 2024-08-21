<?php

namespace SettingsFa;

use MapasCulturais\App;
use SettingsFa\Controller;

class Plugin extends \MapasCulturais\Plugin
{
    public function __construct(array $config = [])
    {
        $config += [
            "tag_manager_key" => env("TAG_MANAGER_KEY", ""),
            "tag_registration_manager_key" => env("TAG_REGISTRATION_MANAGER_KEY", ""),
            "tag_manager_pixel_head_key" => env("TAG_MANAGER_PIXEL_HEAD_KEY", ""),
            "tag_manager_pixel_body_key" => env("TAG_MANAGER_PIXEL_BODY_KEY", ""),
        ];

        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();
        $self = $this;

        $app->hook("template(<<*>>.<<*>>.head):end", function () use ($self) {
            $config = $self->config;
            if ($config['tag_manager_key']) {
                $this->part('tag-manager', ["config" => $config]);
            }
        });

        $app->hook("template(registration.<<*>>.head):end", function () use ($self) {
            $config = $self->config;
            if ($config['tag_registration_manager_key']) {
                $this->part('tag-manager-registration', ["config" => $config]);
            }
        });

        $app->hook("template(opportunity.<<*>>.head):begin", function () use ($self) {
            $entity = $this->controller->requestedEntity;
            $config = $self->config;
            if ($config['tag_manager_pixel_head_key']) {
                $this->part('tag-manager-pixel--head', ["config" => $config]);
            }
        });

        $app->hook("template(opportunity.<<*>>.body):begin", function () use ($self) {
            $entity = $this->controller->requestedEntity;
            $config = $self->config;
            if ($config['tag_manager_pixel_body_key']) {
                $this->part('tag-manager-pixel--body', ["config" => $config]);
            }
        }, -10);
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('settingsfa', Controller::class);
    }
}
