<?php

use MapasCulturais\Utils;
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(

        'registrationCategTitle' => array(
            'label' => \MapasCulturais\i::__('Título das opções (ex: Categorias)'),
        ),

        'registrationCategDescription' => array(
            'label' => \MapasCulturais\i::__('Descrição das opções (ex: Selecione uma categoria)'),
        ),

        'registrationLimitPerOwner' => array(
            'type' => 'integer',
            'label' => \MapasCulturais\i::__('Número máximo de inscrições por agente responsável'),
            'validations' => array(
                "v::intVal()" => \MapasCulturais\i::__("O número máximo de inscrições por agente responsável deve ser um número inteiro")
            )
        ),

        'registrationLimit' => array(
            'type' => 'integer',
            'label' => \MapasCulturais\i::__('Número máximo de inscrições na oportunidade'),
            'validations' => array(
                "v::intVal()" => \MapasCulturais\i::__("O número máximo de inscrições na oportunidade deve ser um número inteiro")
            )
        ),
        'useSpaceRelationIntituicao' => array(
            'label' => \MapasCulturais\i::__('Espaço Cultural'),
            'type' => 'select',
            'options' => (object) array(
                'dontUse' => \MapasCulturais\i::__('Não utilizar'),
                'required' => \MapasCulturais\i::__('Obrigatório'),
                'optional' => \MapasCulturais\i::__('Opcional')
            ),
        ),
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
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => "nomedousuario ou iddousuario",
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('x.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('x.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                $result = Utils::parseSocialMediaUser('instagram.com', $value);
                if($result && $result[0] == '@'){
                    $result = substr($result,1);
                }
                return $result;
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value, 'linkedin');
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('open.spotify.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' => function($value) {
                return Utils::parseSocialMediaUser('open.spotify.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^(@|channel\/)?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
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
        'registrationSeals' => array(
                'label' => \MapasCulturais\i::__('Selos'),
                'serialize' => function($value) { return json_encode($value); },
                'unserialize' => function($value) { return json_decode((string) $value); }
        ),

        /** @TODO: colocar isso na entidade Opportunity (issue: #1273) **/
        'projectName' => array(
            'label' => \MapasCulturais\i::__('Nome do Projeto'),
            'type' => 'select',
            'options' => (object) array(
                '0' => \MapasCulturais\i::__('Não Utilizar'),
                '1' => \MapasCulturais\i::__('Opcional'),
                '2' => \MapasCulturais\i::__('Obrigatório'),
            ),

            'unserialize' => function($val){
                return intval($val);
            }
        ),
        'requestAgentAvatar' => array(
            'label' => \MapasCulturais\i::__('Solicitar avatar'),
            'type' => 'radio',
            'options' => (object) array(
                '0' => \MapasCulturais\i::__('Não Utilizar'),
                '1' => \MapasCulturais\i::__('Obrigatório'),
            ),
            'unserialize' => function($value) {
               return ($value == 0 || $value == "") ? false : true;
            }
        ),
    ),
    'items' => array(
        1 => array( 'name' => \MapasCulturais\i::__("Ato público")),
        2 => array( 'name' => \MapasCulturais\i::__("Aulão")),
        3 => array( 'name' => \MapasCulturais\i::__("Campeonato")),
        4 => array( 'name' => \MapasCulturais\i::__("Circuito")),
        5 => array( 'name' => \MapasCulturais\i::__("Cobertura")),
        6 => array( 'name' => \MapasCulturais\i::__("Concurso")),
        7 => array( 'name' => \MapasCulturais\i::__("Conferência")),
        8 => array( 'name' => \MapasCulturais\i::__("Congresso")),
        9 => array( 'name' => \MapasCulturais\i::__("Consulta")),
        10 => array( 'name' => \MapasCulturais\i::__("Convenção")),
        11 => array( 'name' => \MapasCulturais\i::__("Convocatória")),
        12 => array( 'name' => \MapasCulturais\i::__("Curso")),
        63=> array('name' => \MapasCulturais\i::__("Clima")),
        13 => array( 'name' => \MapasCulturais\i::__("Debate")),
        14 => array( 'name' => \MapasCulturais\i::__("Edital")),
        15 => array( 'name' => \MapasCulturais\i::__("Encontro")),
        16 => array( 'name' => \MapasCulturais\i::__("Espetáculo Musical")),
        17 => array( 'name' => \MapasCulturais\i::__("Espetáculo Teatral")),
        18 => array( 'name' => \MapasCulturais\i::__("Espetáculo de Dança")),
        20 => array( 'name' => \MapasCulturais\i::__("Estágio ou bolsa")),
        21 => array( 'name' => \MapasCulturais\i::__("Evento de Rua")),
        22 => array( 'name' => \MapasCulturais\i::__("Exibição")),
        23 => array( 'name' => \MapasCulturais\i::__("Exposição")),
        24 => array( 'name' => \MapasCulturais\i::__("Feira")),
        25 => array( 'name' => \MapasCulturais\i::__("Festa")),
        26 => array( 'name' => \MapasCulturais\i::__("Festa Popular")),
        27 => array( 'name' => \MapasCulturais\i::__("Festa Religiosa")),
        28 => array( 'name' => \MapasCulturais\i::__("Festival")),
        29 => array( 'name' => \MapasCulturais\i::__("Freela")),
        30 => array( 'name' => \MapasCulturais\i::__("Fórum")),
        31 => array( 'name' => \MapasCulturais\i::__("Hackathon")),
        32 => array( 'name' => \MapasCulturais\i::__("Happy Hour")),
        33 => array( 'name' => \MapasCulturais\i::__("Imersão")),
        34 => array( 'name' => \MapasCulturais\i::__("Inscrições")),
        35 => array( 'name' => \MapasCulturais\i::__("Intercâmbio Cultural")),
        36 => array( 'name' => \MapasCulturais\i::__("Jam")),
        37 => array( 'name' => \MapasCulturais\i::__("Jornada")),
        38 => array( 'name' => \MapasCulturais\i::__("Maratona")),
        39 => array( 'name' => \MapasCulturais\i::__("Marcha")),
        40 => array( 'name' => \MapasCulturais\i::__("Mostra")),
        41 => array( 'name' => \MapasCulturais\i::__("Mutirão")),
        42 => array( 'name' => \MapasCulturais\i::__("Oficina")),
        43 => array( 'name' => \MapasCulturais\i::__("Palestra")),
        45 => array( 'name' => \MapasCulturais\i::__("Performance")),
        46 => array( 'name' => \MapasCulturais\i::__("Pesquisa")),
        47 => array( 'name' => \MapasCulturais\i::__("Programa")),
        48 => array( 'name' => \MapasCulturais\i::__("Projeção")),
        49 => array( 'name' => \MapasCulturais\i::__("Prêmio")),
        50 => array( 'name' => \MapasCulturais\i::__("Reunião")),
        51 => array( 'name' => \MapasCulturais\i::__("Roda de conversa")),
        52 => array( 'name' => \MapasCulturais\i::__("Sarau")),
        53 => array( 'name' => \MapasCulturais\i::__("Seminário")),
        54 => array( 'name' => \MapasCulturais\i::__("Sessão de cinema")),
        55 => array( 'name' => \MapasCulturais\i::__("Show")),
        56 => array( 'name' => \MapasCulturais\i::__("Simpósio")),
        57 => array( 'name' => \MapasCulturais\i::__("Slam")),
        58 => array( 'name' => \MapasCulturais\i::__("Stand Up")),
        59 => array( 'name' => \MapasCulturais\i::__("Sugestão de pauta")),
        60 => array( 'name' => \MapasCulturais\i::__("Vaga de trabalho")),
        61 => array( 'name' => \MapasCulturais\i::__("Vernissage")),
        62 => array( 'name' => \MapasCulturais\i::__("Vivência")),
    )
);
