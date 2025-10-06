<?php

use \MapasCulturais\i;
use \MapasCulturais\Utils;

function compareNamesProjects($item1, $item2) {
    return strcmp($item1['name'], $item2['name']);
}

$items = [
    1 => ['name' => i::__('Ato público')],
    2 => ['name' => i::__('Aulão')],
    3 => ['name' => i::__('Campeonato')],
    4 => ['name' => i::__('Circuito')],
    5 => ['name' => i::__('Cobertura')],
    6 => ['name' => i::__('Comunidade')],
    7 => ['name' => i::__('Concurso')],
    8 => ['name' => i::__('Conferência')],
    9 => ['name' => i::__('Congresso')],
    10 => ['name' => i::__('Consulta')],
    11 => ['name' => i::__('Convenção')],
    12 => ['name' => i::__('Convocatória')],
    13 => ['name' => i::__('Curso')],
    14 => ['name' => i::__('Debate')],
    15 => ['name' => i::__('Edital')],
    16 => ['name' => i::__('Encontro')],
    17 => ['name' => i::__('Espetáculo Musical')],
    18 => ['name' => i::__('Espetáculo Teatral')],
    19 => ['name' => i::__('Espetáculo de Dança')],
    20 => ['name' => i::__('Estágio ou bolsa')],
    21 => ['name' => i::__('Evento de Rua')],
    22 => ['name' => i::__('Exibição')],
    23 => ['name' => i::__('Exposição')],
    24 => ['name' => i::__('Feira')],
    25 => ['name' => i::__('Festa')],
    26 => ['name' => i::__('Festa Popular')],
    27 => ['name' => i::__('Festa Religiosa')],
    28 => ['name' => i::__('Festival')],
    29 => ['name' => i::__('Freela')],
    30 => ['name' => i::__('Fórum')],
    31 => ['name' => i::__('Hackathon')],
    32 => ['name' => i::__('Happy Hour')],
    33 => ['name' => i::__('Imersão')],
    34 => ['name' => i::__('Inscrições')],
    35 => ['name' => i::__('Intercâmbio Cultural')],
    36 => ['name' => i::__('Jam')],
    37 => ['name' => i::__('Jornada')],
    38 => ['name' => i::__('Jornada')],
    39 => ['name' => i::__('Maratona')],
    40 => ['name' => i::__('Marcha')],
    41 => ['name' => i::__('Mostra')],
    42 => ['name' => i::__('Mutirão')],
    43 => ['name' => i::__('Oficina')],
    44 => ['name' => i::__('Palestra')],
    45 => ['name' => i::__('Palestra')],
    46 => ['name' => i::__('Performance')],
    47 => ['name' => i::__('Pesquisa')],
    48 => ['name' => i::__('Programa')],
    49 => ['name' => i::__('Projeção')],
    50 => ['name' => i::__('Prêmio')],
    51 => ['name' => i::__('Rede')],
    52 => ['name' => i::__('Reunião')],
    53 => ['name' => i::__('Roda de conversa')],
    54 => ['name' => i::__('Sarau')],
    55 => ['name' => i::__('Seminário')],
    56 => ['name' => i::__('Sessão de cinema')],
    57 => ['name' => i::__('Show')],
    57 => ['name' => i::__('Simpósio')],
    59 => ['name' => i::__('Slam')],
    60 => ['name' => i::__('Stand Up')],
    61 => ['name' => i::__('Vaga de trabalho')],
    62 => ['name' => i::__('Vernissage')],
    63 => ['name' => i::__('Vivência')],
];

uasort($items, 'compareNamesProjects');

/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'site' => array(
            'label' => i::__('Site'),
            'validations' => array(
                "v::url()" => i::__("A url informada é inválida.")
            )
        ),
        'facebook' => array(
            'type' => "socialMedia",
            'label' => i::__('Facebook'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('facebook.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => "nomedousuario ou iddousuario",
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('twitter.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('twitter.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('instagram.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('vimeo.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'spotify' => array(
            'type' => "socialMedia",
            'label' => i::__('Spotify'),
            'validations' => array(
                "v::oneOf(v::urlDomain('spotify.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('spotify.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('youtube.com', $value);
            },
            'placeholder' => "iddocanal",
            'available_for_opportunities' => true
        ),
        'pinterest' => array(
            'type' => "socialMedia",
            'label' => i::__('Pinterest'),
            'validations' => array(
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('pinterest.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'tiktok' => array(
            'type' => "socialMedia",
            'label' => i::__('Tiktok'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('tiktok.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('tiktok.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),

        'emailPublico' => array(
            'label' => i::__('Email Público'),
            'validations' => array(
                'v::email()' => i::__('O endereço informado não é email válido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'email'
        ),

        'emailPrivado' => array(
            'private' => true,
            'label' => i::__('Email Privado'),
            'validations' => array(
                //'required' => i::__('O email privado é obrigatório.'),
                'v::email()' => i::__('O endereço informado não é um email válido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'email'
        ),

        'telefonePublico' => array(
            'label' => i::__('Telefone Público'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'telefone1' => array(
            'label' => i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'label' => i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

    ),
    'items' => $items,
);
