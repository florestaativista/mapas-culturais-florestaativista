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
        1 =>  array( 'name' => \MapasCulturais\i::__("Festival")),
        2 =>  array( 'name' => \MapasCulturais\i::__("Encontro")),
        3 =>  array( 'name' => \MapasCulturais\i::__("Sarau")),
        4 =>  array( 'name' => \MapasCulturais\i::__("Reunião")),
        5 =>  array( 'name' => \MapasCulturais\i::__("Mostra")),
        6 =>  array( 'name' => \MapasCulturais\i::__("Convenção")),
        7 =>  array( 'name' => \MapasCulturais\i::__("Circuito")),
        8 =>  array( 'name' => \MapasCulturais\i::__("Programa")),
        9 =>  array( 'name' => \MapasCulturais\i::__("Edital")),
        10 => array( 'name' => \MapasCulturais\i::__("Concurso")),
        11 => array( 'name' => \MapasCulturais\i::__("Exposição")),
        12 => array( 'name' => \MapasCulturais\i::__("Jornada")),
        13 => array( 'name' => \MapasCulturais\i::__("Exibição")),
        14 => array( 'name' => \MapasCulturais\i::__("Feira")),
        15 => array( 'name' => \MapasCulturais\i::__("Intercâmbio Cultural")),
        16 => array( 'name' => \MapasCulturais\i::__("Festa Popular")),
        17 => array( 'name' => \MapasCulturais\i::__("Festa Religiosa")),
        18 => array( 'name' => \MapasCulturais\i::__("Seminário")),
        19 => array( 'name' => \MapasCulturais\i::__("Congresso")),
        20 => array( 'name' => \MapasCulturais\i::__("Palestra")),
        21 => array( 'name' => \MapasCulturais\i::__("Simpósio")),
        22 => array( 'name' => \MapasCulturais\i::__("Fórum")),
        23 => array( 'name' => \MapasCulturais\i::__("Curso")),
        24 => array( 'name' => \MapasCulturais\i::__("Oficina")),
        25 => array( 'name' => \MapasCulturais\i::__("Jornada")),
        35 => ['name' => \MapasCulturais\i::__("Inscrições")],
        121 => ['name' => \MapasCulturais\i::__("Pesquisa")],
        122 => ['name' => \MapasCulturais\i::__("Consulta")],
        123 => ['name' => \MapasCulturais\i::__("Ato público")],
        124 => ['name' => \MapasCulturais\i::__("Aulão")],
        125 => ['name' => \MapasCulturais\i::__("Campeonato")],
        126 => ['name' => \MapasCulturais\i::__("Cobertura")],
        127 => ['name' => \MapasCulturais\i::__("Conferência")],
        128 => ['name' => \MapasCulturais\i::__("Convocatória")],
        129 => ['name' => \MapasCulturais\i::__("Debate")],
        130 => ['name' => \MapasCulturais\i::__("Espetáculo de Dança")],
        131 => ['name' => \MapasCulturais\i::__("Espetáculo Musical")],
        132 => ['name' => \MapasCulturais\i::__("Espetáculo Teatral")],
        133 => ['name' => \MapasCulturais\i::__("Estágio ou bolsa")],
        134 => ['name' => \MapasCulturais\i::__("Evento de Rua")],
        135 => ['name' => \MapasCulturais\i::__("Festa")],
        136 => ['name' => \MapasCulturais\i::__("Freela")],
        137 => ['name' => \MapasCulturais\i::__("Hackathon")],
        138 => ['name' => \MapasCulturais\i::__("Happy Hour")],
        139 => ['name' => \MapasCulturais\i::__("Imersão")],
        140 => ['name' => \MapasCulturais\i::__("Jam")],
        141 => ['name' => \MapasCulturais\i::__("Maratona")],
        142 => ['name' => \MapasCulturais\i::__("Marcha")],
        143 => ['name' => \MapasCulturais\i::__("Mutirão")],
        144 => ['name' => \MapasCulturais\i::__("Palestra")],
        145 => ['name' => \MapasCulturais\i::__("Performance")],
        146 => ['name' => \MapasCulturais\i::__("Prêmio")],
        147 => ['name' => \MapasCulturais\i::__("Projeção")],
        148 => ['name' => \MapasCulturais\i::__("Roda de conversa")],
        149 => ['name' => \MapasCulturais\i::__("Sessão de cinema")],
        150 => ['name' => \MapasCulturais\i::__("Show")],
        151 => ['name' => \MapasCulturais\i::__("Slam")],
        152 => ['name' => \MapasCulturais\i::__("Stand Up")],
        153 => ['name' => \MapasCulturais\i::__("Vaga de trabalho")],
        154 => ['name' => \MapasCulturais\i::__("Vernissage")],
        155 => ['name' => \MapasCulturais\i::__("Vivência")],
        156 => ['name' => \MapasCulturais\i::__("Comunidade")],
        157 => ['name' => \MapasCulturais\i::__("Rede")],

    )
);
