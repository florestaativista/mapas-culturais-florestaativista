<?php
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
        'vimeo' => array(
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::url('vimeo.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'linkedin' => array(
            'label' => \MapasCulturais\i::__('Linkedin'),
            'validations' => array(
                "v::url('linkedin.com')" => \MapasCulturais\i::__("A url informada é inválida.")
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
        'instagram' => array(
            'label' => \MapasCulturais\i::__('Instagram'),
            'validations' => array(
                "v::startsWith('@')" => \MapasCulturais\i::__("O usuário informado é inválido. Informe no formato @usuario e tente novamente")
            ),
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
