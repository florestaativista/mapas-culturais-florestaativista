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
            "tag_opportunity_head_somdeminas_manager_key" => env("TAG_OPPORTUNITY_HEAD_SOMDEMINAS_MANAGER_KEY", ""),
            "tag_opportunity_body_somdeminas_manager_key" => env("TAG_OPPORTUNITY_BODY_SOMDEMINAS_MANAGER_KEY", ""),
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
            if($entity->id == "142") {
                if ($config['tag_opportunity_head_somdeminas_manager_key']) {
                    $this->part('tag-manager-somdeminas--head', ["config" => $config]);
                }
            }
        });

        $app->hook("template(opportunity.<<*>>.body):begin", function () use ($self) {
            $entity = $this->controller->requestedEntity;
            $config = $self->config;
            if($entity->id == "142") {
                if ($config['tag_opportunity_body_somdeminas_manager_key']) {
                    $this->part('tag-manager-somdeminas--body', ["config" => $config]);
                }
            }
        }, -10);
    }

    public function register()
    {
        $app = App::i();

        $app->registerController('settingsfa', Controller::class);
    }
}
