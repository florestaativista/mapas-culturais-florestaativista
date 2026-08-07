<?php
use MapasCulturais\i;

// Assim como em docker/common/config.d/texts.php, este arquivo é lido
// durante App::_initTheme() (App.php), antes de Theme::_init() carregar o
// catálogo do tema (translations/{locale}.po). i::__() aqui sempre resolve
// contra um catálogo sem essas strings, então travava em português. Por
// isso resolvemos a tradução aqui mesmo, direto pelo locale já detectado.
$lcode = i::get_locale();

$t = function (array $variants) use ($lcode) {
    return $variants[$lcode] ?? $variants['pt_BR'];
};

$apareca_no_mapa = $t([
    'pt_BR' => 'Apareça no Mapa',
    'es_ES' => 'Aparezca en el Mapa',
    'en_US' => 'Show up on the Map',
]);

$_config = [
    'text:registration.view.entity-address-form-nacional.public-location_adress' => $apareca_no_mapa,
    'text:entity-address-form-internacional.public-location-internacional' => $apareca_no_mapa,
    'text:agent.edit.brasil-address-form.brasil-address' => $apareca_no_mapa,
    'text:agent.*.international-address-form.international-address-forms' => $apareca_no_mapa,
    'text:main-footer.main-footer' => $t([
        'pt_BR' => 'oportunidades',
        'es_ES' => 'oportunidades',
        'en_US' => 'opportunities',
    ]),
    'text:agent.edit.view(edit-1).edit-1-agent-phone1' => $t([
        'pt_BR' => 'Telefone privado 1',
        'es_ES' => 'Teléfono privado 1',
        'en_US' => 'Private phone 1',
    ]),
    'text:agent.edit.view(edit-1).edit-1-agent-phone2' => $t([
        'pt_BR' => 'Telefone privado 2',
        'es_ES' => 'Teléfono privado 2',
        'en_US' => 'Private phone 2',
    ]),
    'text:site.index.home-opportunities.title' => $t([
        'pt_BR' => 'Oportunidades',
        'es_ES' => 'Oportunidades',
        'en_US' => 'Opportunities',
    ]),
    'text:site.index.home-opportunities.description' => $t([
        'pt_BR' => 'Cadastre-se, participe das oportunidades abertas e crie as suas próprias ações na plataforma',
        'es_ES' => 'Regístrese, participe en las oportunidades abiertas y cree sus propias acciones en la plataforma',
        'en_US' => 'Sign up, take part in open opportunities and create your own actions on the platform',
    ]),
    'text:site.index.home-entities.title' => $t([
        'pt_BR' => 'Encontre informações, navegue pela plataforma e se conecte-se com a Floresta',
        'es_ES' => 'Encuentre información, navegue por la plataforma y conéctese con la Floresta',
        'en_US' => 'Find information, browse the platform and connect with the Floresta',
    ]),
    'footer.supportMessage' => sprintf($t([
        'pt_BR' => 'Precisa de ajuda? Acesse o chat no rodapé da página ou envie um email para %s para falar com nossa equipe de suporte.',
        'es_ES' => '¿Necesita ayuda? Acceda al chat en el pie de página o envíe un correo a %s para hablar con nuestro equipo de soporte.',
        'en_US' => 'Need help? Access the chat in the page footer or send an email to %s to talk to our support team.',
    ]), '<a href="mail:suporte@florestaativista.org">suporte@florestaativista.org</a>'),
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
