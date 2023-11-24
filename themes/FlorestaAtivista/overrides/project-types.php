<?php
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
            'label' => \MapasCulturais\i::__('Facebook'),
            'validations' => array(
                "v::url('facebook.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'twitter' => array(
            'label' => \MapasCulturais\i::__('Twitter'),
            'validations' => array(
                "v::url('twitter.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),

        'instagram' => array(
            'label' => \MapasCulturais\i::__('Instagram'),
            'validations' => array(
                "v::startsWith('@')" => \MapasCulturais\i::__("O usuário informado é inválido. Informe no formato @usuario e tente novamente")
            )
        ),
        'linkedin' => array(
            'label' => \MapasCulturais\i::__('Linkedin'),
            'validations' => array(
                "v::url('linkedin.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'vimeo' => array(
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::url('vimeo.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'spotify' => array(
            'label' => \MapasCulturais\i::__('Spotify'),
            'validations' => array(
                "v::url('open.spotify.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'youtube' => array(
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::url('youtube.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'pinterest' => array(
            'label' => \MapasCulturais\i::__('Pinterest'),
            'validations' => array(
                "v::url('pinterest.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
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
