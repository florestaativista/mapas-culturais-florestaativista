<?php
use MapasCulturais\i;

$_config = [
    'text:registration.view.entity-address-form-nacional.public-location_adress' =>  i::__("Apareça no Mapa"),
    'text:entity-address-form-internacional.public-location-internacional' =>  i::__("Apareça no Mapa"),
    'text:agent.edit.brasil-address-form.brasil-address' => i::__("Apareça no Mapa"),
    'text:agent.*.international-address-form.international-address-forms' => i::__("Apareça no Mapa"),
    'text:main-footer.main-footer' => i::__("oportunidades"),
    'text:agent.edit.view(edit-1).edit-1-agent-phone1' => i::__("Telefone privado 1"),
    'text:agent.edit.view(edit-1).edit-1-agent-phone2' => i::__("Telefone privado 2"),
    'text:site.index.home-opportunities.title' => i::__("Oportunidades"),
    'text:site.index.home-opportunities.description' => i::__('Cadastre-se, participe das oportunidades abertas e crie as suas próprias ações na plataforma'),
    'text:site.index.home-entities.title' => i::__('Encontre informações, navegue pela plataforma e se conecte-se com a Floresta'),
    'footer.supportMessage' => sprintf(i::__("Precisa de ajuda? Acesse o chat no rodapé da página ou envie um email para %s para falar com nossa equipe de suporte."), '<a href="mail:suporte@florestaativista.org">suporte@florestaativista.org</a>'),
    "module.Entities" => [
        'requiredAvatar' => [
            'MapasCulturais\Entities\Agent' => env('PROFILE_ENTITY_REQUIRED_AVATAR_AGENT', true),
            'MapasCulturais\Entities\Project' => env('PROFILE_ENTITY_REQUIRED_AVATAR_PROJECT', false),
            'MapasCulturais\Entities\Space' => env('PROFILE_ENTITY_REQUIRED_AVATAR_SPACE', false),
            'MapasCulturais\Entities\Event' => env('PROFILE_ENTITY_REQUIRED_AVATAR_EVENT', false),
            'MapasCulturais\Entities\Opportunity' => env('PROFILE_ENTITY_REQUIRED_AVATAR_OPPORTUNITY', false),    
        ],
    ],
    'agent_required_fields' => [
        'emailPrivado' => true,
    ],
    'agent1_required_fields' => [],
    'app.redirect_profile_validate' => true,
];

return $_config;