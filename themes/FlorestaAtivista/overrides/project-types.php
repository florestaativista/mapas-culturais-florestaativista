<?php

use MapasCulturais\Utils;
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'site' => array(
            'label' => \MapasCulturais\i::__('Site'),
            'validations' => array(
                "v::url()" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'facebook' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Facebook'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('facebook.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => "nomedousuario ou iddousuario",
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('twitter.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('twitter.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('instagram.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('vimeo.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'spotify' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Spotify'),
            'validations' => array(
                "v::oneOf(v::urlDomain('spotify.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('spotify.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('youtube.com', $value);
            },
            'placeholder' => "iddocanal",
            'available_for_opportunities' => true
        ),
        'pinterest' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Pinterest'),
            'validations' => array(
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('pinterest.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'tiktok' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Tiktok'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('tiktok.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('tiktok.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),

        'emailPublico' => array(
            'label' => \MapasCulturais\i::__('Email Público'),
            'validations' => array(
                'v::email()' => \MapasCulturais\i::__('O endereço informado não é email válido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'email'
        ),

        'emailPrivado' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Email Privado'),
            'validations' => array(
                //'required' => \MapasCulturais\i::__('O email privado é obrigatório.'),
                'v::email()' => \MapasCulturais\i::__('O endereço informado não é um email válido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'email'
        ),

        'telefonePublico' => array(
            'label' => \MapasCulturais\i::__('Telefone Público'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'telefone1' => array(
            'label' => \MapasCulturais\i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'label' => \MapasCulturais\i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

    ),
    'items' => array(
        1=> array('name' => \MapasCulturais\i::__("Ato público")),
        2=> array('name' => \MapasCulturais\i::__("Aulão")),
        3=> array('name' => \MapasCulturais\i::__("Campeonato")),
        4=> array('name' => \MapasCulturais\i::__("Circuito")),
        5=> array('name' => \MapasCulturais\i::__("Cobertura")),
        6=> array('name' => \MapasCulturais\i::__("Comunidade")),
        7=> array('name' => \MapasCulturais\i::__("Concurso")),
        8=> array('name' => \MapasCulturais\i::__("Conferência")),
        9=> array('name' => \MapasCulturais\i::__("Congresso")),
        10=> array('name' => \MapasCulturais\i::__("Consulta")),
        11=> array('name' => \MapasCulturais\i::__("Convenção")),
        12=> array('name' => \MapasCulturais\i::__("Convocatória")),
        13=> array('name' => \MapasCulturais\i::__("Curso")),
        14=> array('name' => \MapasCulturais\i::__("Debate")),
        15=> array('name' => \MapasCulturais\i::__("Edital")),
        16=> array('name' => \MapasCulturais\i::__("Encontro")),
        17=> array('name' => \MapasCulturais\i::__("Espetáculo Musical")),
        18=> array('name' => \MapasCulturais\i::__("Espetáculo Teatral")),
        19=> array('name' => \MapasCulturais\i::__("Espetáculo de Dança")),
        20=> array('name' => \MapasCulturais\i::__("Estágio ou bolsa")),
        21=> array('name' => \MapasCulturais\i::__("Evento de Rua")),
        22=> array('name' => \MapasCulturais\i::__("Exibição")),
        23=> array('name' => \MapasCulturais\i::__("Exposição")),
        24=> array('name' => \MapasCulturais\i::__("Feira")),
        25=> array('name' => \MapasCulturais\i::__("Festa")),
        26=> array('name' => \MapasCulturais\i::__("Festa Popular")),
        27=> array('name' => \MapasCulturais\i::__("Festa Religiosa")),
        28=> array('name' => \MapasCulturais\i::__("Festival")),
        29=> array('name' => \MapasCulturais\i::__("Freela")),
        30=> array('name' => \MapasCulturais\i::__("Fórum")),
        31=> array('name' => \MapasCulturais\i::__("Hackathon")),
        32=> array('name' => \MapasCulturais\i::__("Happy Hour")),
        33=> array('name' => \MapasCulturais\i::__("Imersão")),
        34=> array('name' => \MapasCulturais\i::__("Inscrições")),
        35=> array('name' => \MapasCulturais\i::__("Intercâmbio Cultural")),
        36=> array('name' => \MapasCulturais\i::__("Jam")),
        37=> array('name' => \MapasCulturais\i::__("Jornada")),
        38=> array('name' => \MapasCulturais\i::__("Jornada")),
        39=> array('name' => \MapasCulturais\i::__("Maratona")),
        40=> array('name' => \MapasCulturais\i::__("Marcha")),
        41=> array('name' => \MapasCulturais\i::__("Mostra")),
        42=> array('name' => \MapasCulturais\i::__("Mutirão")),
        43=> array('name' => \MapasCulturais\i::__("Oficina")),
        44=> array('name' => \MapasCulturais\i::__("Palestra")),
        45=> array('name' => \MapasCulturais\i::__("Palestra")),
        46=> array('name' => \MapasCulturais\i::__("Performance")),
        47=> array('name' => \MapasCulturais\i::__("Pesquisa")),
        48=> array('name' => \MapasCulturais\i::__("Programa")),
        49=> array('name' => \MapasCulturais\i::__("Projeção")),
        50=> array('name' => \MapasCulturais\i::__("Prêmio")),
        51=> array('name' => \MapasCulturais\i::__("Rede")),
        52=> array('name' => \MapasCulturais\i::__("Reunião")),
        53=> array('name' => \MapasCulturais\i::__("Roda de conversa")),
        54=> array('name' => \MapasCulturais\i::__("Sarau")),
        55=> array('name' => \MapasCulturais\i::__("Seminário")),
        56=> array('name' => \MapasCulturais\i::__("Sessão de cinema")),
        57=> array('name' => \MapasCulturais\i::__("Show")),
        57=> array('name' => \MapasCulturais\i::__("Simpósio")),
        59=> array('name' => \MapasCulturais\i::__("Slam")),
        60=> array('name' => \MapasCulturais\i::__("Stand Up")),
        61=>array('name' => \MapasCulturais\i::__("Vaga de trabalho")),
        62=> array('name' => \MapasCulturais\i::__("Vernissage")),
        63=> array('name' => \MapasCulturais\i::__("Vivência")),

    )
);
