<?php
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'emailPublico' => array(
            'label' => \MapasCulturais\i::__('Email Público'),
            'validations' => array(
                'v::email()' => \MapasCulturais\i::__('O email público não é um email válido.')
            ),
            'available_for_opportunities' => true
        ),

        'emailPrivado' => array(
            'label' => \MapasCulturais\i::__('Email Privado'),
            'validations' => array(
                'v::email()' => \MapasCulturais\i::__('O email privado não é um email válido.')
            ),
        	'private' => true,
            'available_for_opportunities' => true
        ),
        'cnpj' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('CNPJ'),
            'validations' => array(
               'v::cnpj()' => \MapasCulturais\i::__('O número de documento informado é inválido.')
            ),
            'available_for_opportunities' => true
        ),
        'razaoSocial' => array(
            'label' => \MapasCulturais\i::__('Razão Social'),
            'type' => 'text',
            'available_for_opportunities' => true
        ),
        'telefonePublico' => array(
            'label' => \MapasCulturais\i::__('Telefone Público'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone público no formato (xx) xxxx-xxxx.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'telefone1' => array(
            'label' => \MapasCulturais\i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone 1 no formato (xx) xxxx xxxx.')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'label' => \MapasCulturais\i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone 2 no formato ')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone',

        ),

        /*
        'virtual_fisico' => array(
            'label' => \MapasCulturais\i::__('Virtual ou físico'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Físico'),
                'virtual' => \MapasCulturais\i::__('Virtual')
            )
        ),
        */
        'acessibilidade' => array(
            'label' => \MapasCulturais\i::__('Acessibilidade'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Não Informado'),
                'Sim' => \MapasCulturais\i::__('Sim'),
                'Não' => \MapasCulturais\i::__('Não')
            )
        ),
        'acessibilidade_fisica' => array(
            'label' => \MapasCulturais\i::__('Acessibilidade física'),
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => \MapasCulturais\i::__('Outros'),
            'options' => array(
                \MapasCulturais\i::__('Banheiros adaptados'),
                \MapasCulturais\i::__('Rampa de acesso'),
                \MapasCulturais\i::__('Elevador'),
                \MapasCulturais\i::__('Sinalização tátil'),

                // vindos do sistema de museus.cultura.gov.br
                \MapasCulturais\i::__('Bebedouro adaptado'),
                \MapasCulturais\i::__('Cadeira de rodas para uso do visitante'),
                \MapasCulturais\i::__('Circuito de visitação adaptado'),
                \MapasCulturais\i::__('Corrimão nas escadas e rampas'),
                \MapasCulturais\i::__('Elevador adaptado'),
                \MapasCulturais\i::__('Rampa de acesso'),
                \MapasCulturais\i::__('Sanitário adaptado'),
                \MapasCulturais\i::__('Telefone público adaptado'),
                \MapasCulturais\i::__('Vaga de estacionamento exclusiva para deficientes'),
                \MapasCulturais\i::__('Vaga de estacionamento exclusiva para idosos')
            )
        ),
        'capacidade' => array(
            'label' => \MapasCulturais\i::__('Capacidade'),
            'validations' => array(
                "v::intVal()->positive()" => \MapasCulturais\i::__("A capacidade deve ser um número positivo.")
            ),
            'available_for_opportunities' => true
        ),

        'endereco' => array(
            'label' => \MapasCulturais\i::__('Endereço'),
            'type' => 'text'
        ),


        'En_CEP' => [
            'label' => \MapasCulturais\i::__('CEP'),
        ],
        'En_Nome_Logradouro' => [
            'label' => \MapasCulturais\i::__('Logradouro'),
        ],
        'En_Num' => [
            'label' => \MapasCulturais\i::__('Número'),
        ],
        'En_Complemento' => [
            'label' => \MapasCulturais\i::__('Complemento'),
        ],
        'En_Bairro' => [
            'label' => \MapasCulturais\i::__('Bairro'),
        ],
        'En_Municipio' => [
            'label' => \MapasCulturais\i::__('Município'),
        ],
        'En_Estado' => [
            'label' => \MapasCulturais\i::__('Estado'),
            'type' => 'select',
            'options' => array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins',
            )
        ],

        'horario' => array(
            'label' => \MapasCulturais\i::__('Horário de funcionamento'),
            'type' => 'text',
            'available_for_opportunities' => true
        ),

        'criterios' => array(
            'label' => \MapasCulturais\i::__('Critérios de uso do espaço'),
            'type' => 'text'
        ),

        'site' => array(
            'label' => \MapasCulturais\i::__('Site'),
            'validations' => array(
                "v::url()" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'facebook' => array(
            'label' => \MapasCulturais\i::__('Facebook'),
            'validations' => array(
                "v::url('facebook.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'label' => \MapasCulturais\i::__('Twitter'),
            'validations' => array(
                "v::url('twitter.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'googleplus' => array(
            'label' => \MapasCulturais\i::__('Google+'),
            'validations' => array(
                "v::url('plus.google.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            )
        ),
        'instagram' => array(
            'label' => \MapasCulturais\i::__('Instagram'),
            'validations' => array(
                "v::startsWith('@')" => \MapasCulturais\i::__("O usuário informado é inválido. Informe no formato @usuario e tente novamente")
            ),
            'available_for_opportunities' => true
        ),
        'linkedin' => array(
            'label' => \MapasCulturais\i::__('Linkedin'),
            'validations' => array(
                "v::url('linkedin.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
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
            ),
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::url('youtube.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'pinterest' => array(
            'label' => \MapasCulturais\i::__('Pinterest'),
            'validations' => array(
                "v::url('pinterest.com')" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),

    ),

/**
 * Equipamentos Culturais
 */

    'items' => array(
        \MapasCulturais\i::__('Espaços de Exibição de Filmes') => array(
            'range' => array(10,19),
            'items' => array(
                10 => array( 'name' => \MapasCulturais\i::__('Cine itinerante' )),
                11 => array( 'name' => \MapasCulturais\i::__('Cineclube' )),
                12 => array( 'name' => \MapasCulturais\i::__('Drive-in' )),
                13 => array( 'name' => \MapasCulturais\i::__('Espaço Público Para Projeção de Filmes') ),
                14 => array( 'name' => \MapasCulturais\i::__('Sala de cinema' )),
            )
        ),

        \MapasCulturais\i::__('Bibliotecas') => array(
            'range' => array(20,29),
            'items' => array(
                20 => array( 'name' => \MapasCulturais\i::__('Biblioteca') ),
            )
        ),

        \MapasCulturais\i::__('Teatros') => array(
            'range' => array(30,39),
            'items' => array(
                30 => array('name' => \MapasCulturais\i::__('Teatro')),
            )
        ),

        \MapasCulturais\i::__('Circos') => array(
            'range' => array(90,99),
            'items' => array(
                90 => array( 'name' => \MapasCulturais\i::__('Circo' )),
            )
        ),

       \MapasCulturais\i::__('Centros Culturais') => array(
            'range' => array(40,49),
            'items' => array(
                40 => array( 'name' => \MapasCulturais\i::__('Centros Culturais' )),
            )
        ),

       \MapasCulturais\i::__('Arquivos') => array(
            'range' => array(50,59),
            'items' => array(
                50 => array( 'name' => \MapasCulturais\i::__('Arquivo Público') ),
                51 => array( 'name' => \MapasCulturais\i::__('Arquivo Privado' )),
            )
        ),

       \MapasCulturais\i::__('Museus') => array(
            'range' => array(60,69),
            'items' => array(
                60 => array( 'name' => \MapasCulturais\i::__('Museu Público') ),
                61 => array( 'name' => \MapasCulturais\i::__('Museu Privado' )),
            )
        ),

        \MapasCulturais\i::__('Demais Equipamentos Culturais') => array(
            'range' => array(100,199),
            'items' => array(
                100 => array( 'name' => \MapasCulturais\i::__('Galeria') ),
                101 => array( 'name' => \MapasCulturais\i::__('Livraria' )),
                102 => array( 'name' => \MapasCulturais\i::__('Sebo' )),
                104 => array( 'name' => \MapasCulturais\i::__('Lan-house' )),
                106 => array( 'name' => \MapasCulturais\i::__('Ateliê' )),
                107 => array( 'name' => \MapasCulturais\i::__('Centro de artesanato') ),
                108 => array( 'name' => \MapasCulturais\i::__('Casa de espetáculo' )),
                110 => array( 'name' => \MapasCulturais\i::__('Estúdio' )),
                111 => array( 'name' => \MapasCulturais\i::__('Concha acústica' )),
                113 => array( 'name' => \MapasCulturais\i::__('Espaço para Eventos' )),
                114 => array( 'name' => \MapasCulturais\i::__('Coworking' )),
                116 => array( 'name' => \MapasCulturais\i::__('Centro Comunitário' )),
                125 => array( 'name' => \MapasCulturais\i::__('Ponto de Cultura' )),
                119 => array( 'name' => \MapasCulturais\i::__('Praça dos esportes e da cultura') ),
                127 => array( 'name' => \MapasCulturais\i::__('Trio elétrico' )),
                129 => array( 'name' => \MapasCulturais\i::__('Centro de tradições') ),
                124 => array( 'name' => \MapasCulturais\i::__('Rádio Comunitária' )),
                134 => array( 'name' => \MapasCulturais\i::__('Ginásio Poliesportivo') ),
                199 => array( 'name' => \MapasCulturais\i::__('Outros Equipamentos Culturais' )), // adicionado na importação dos dados do Ceará para receber as endidades do tipo "equipamento"
            )
        ),

       \MapasCulturais\i::__('Espaços Religiosos') => array(
            'range' => array(80,89),
            'items' => array(
                80 => array( 'name' => \MapasCulturais\i::__('Templo' )),
                81 => array( 'name' => \MapasCulturais\i::__('Terreiro' )),
                82 => array( 'name' => \MapasCulturais\i::__('Mesquitas' )),
                83 => array( 'name' => \MapasCulturais\i::__('Sinagoga' )),
                84 => array( 'name' => \MapasCulturais\i::__('Igreja' )),
                85 => array( 'name' => \MapasCulturais\i::__('Centro Espírita') ),
              )
        ),

/**
 * Espaços de Formação Cultural
 */

       \MapasCulturais\i::__('Escolas livres') => array(
            'range' => array(800,899),
            'items' => array(
                800 => array( 'name' => \MapasCulturais\i::__('Escola livre' )),
              )
        ),

/**
 * Patrimônios Culturais
 */

        \MapasCulturais\i::__('Bens culturais de natureza material') => array(
            'range' => array(200, 299),
            'items' => array(
                299 => array( 'name' => \MapasCulturais\i::__('Outros' )) // adicionado na importação dos dados do Ceará para receber as endidades do tipo "post"
            )
        ),

        \MapasCulturais\i::__('Temporário') => array(
            'range' => array(500,600),
            'items' => array(
                501 => array( 'name' => \MapasCulturais\i::__('Palco de Rua' )),
                502 => array( 'name' => \MapasCulturais\i::__('Bar' )),
                503 => array( 'name' => \MapasCulturais\i::__('Café' )),
                504 => array( 'name' => \MapasCulturais\i::__('Academia' )),
                505 => array( 'name' => \MapasCulturais\i::__('Casa Coletiva' )),
                506 => array( 'name' => \MapasCulturais\i::__('Casa de shows' )),
                507 => array( 'name' => \MapasCulturais\i::__('Escritório' )),
                508 => array( 'name' => \MapasCulturais\i::__('Estacionamento' )),
                509 => array( 'name' => \MapasCulturais\i::__('Estúdio de Fotografia' )),
                510 => array( 'name' => \MapasCulturais\i::__('Estúdio de Gravação e/ou Ensaio' )),
                511 => array( 'name' => \MapasCulturais\i::__('Estúdio de Pintura/Artes Plásticas' )),
                512 => array( 'name' => \MapasCulturais\i::__('Food truck' )),
                513 => array( 'name' => \MapasCulturais\i::__('Galpão' )),
                514 => array( 'name' => \MapasCulturais\i::__('Hacker space' )),
                515 => array( 'name' => \MapasCulturais\i::__('Hostel' )),
                516 => array( 'name' => \MapasCulturais\i::__('Hotel' )),
                517 => array( 'name' => \MapasCulturais\i::__('Hub de Inovação' )),
                518 => array( 'name' => \MapasCulturais\i::__('Labs' )),
                519 => array( 'name' => \MapasCulturais\i::__('Livraria' )),
                520 => array( 'name' => \MapasCulturais\i::__('Loja' )),
                521 => array( 'name' => \MapasCulturais\i::__('Plataforma Digital' )),
                522 => array( 'name' => \MapasCulturais\i::__('Pousada' )),
                523 => array( 'name' => \MapasCulturais\i::__('Restaurante' )),
                524 => array( 'name' => \MapasCulturais\i::__('Salão de Beleza' )),
                525 => array( 'name' => \MapasCulturais\i::__('Teatro de Arena' )),
                526 => array( 'name' => \MapasCulturais\i::__('Universidade livre' )),
                527 => array( 'name' => \MapasCulturais\i::__('Escola pública' )),
                528 => array( 'name' => \MapasCulturais\i::__('Escola particular' )),
                529 => array( 'name' => \MapasCulturais\i::__('Universidade pública' )),
                530 => array( 'name' => \MapasCulturais\i::__('Univesidade particular' )),
                531 => array( 'name' => \MapasCulturais\i::__('Aldeia' )),
                532 => array( 'name' => \MapasCulturais\i::__('Eco vila' )),
            )
        ),
    )
);
