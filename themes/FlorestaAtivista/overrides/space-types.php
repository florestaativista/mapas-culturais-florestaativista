<?php
use MapasCulturais\i;
use MapasCulturais\Utils;
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'emailPublico' => array(
            'label' => i::__('Email Público'),
            'validations' => array(
                'v::email()' => i::__('O email público não é um email válido.')
            ),
            'available_for_opportunities' => true
        ),

        'emailPrivado' => array(
            'label' => i::__('Email Privado'),
            'validations' => array(
                'v::email()' => i::__('O email privado não é um email válido.')
            ),
        	'private' => true,
            'available_for_opportunities' => true
        ),
        'cnpj' => array(
            'private' => true,
            'label' => i::__('CNPJ'),
            'validations' => array(
               'v::cnpj()' => i::__('O número de documento informado é inválido.')
            ),
            'available_for_opportunities' => true
        ),
        'razaoSocial' => array(
            'label' => i::__('Razão Social'),
            'type' => 'text',
            'available_for_opportunities' => true
        ),
        'telefonePublico' => array(
            'label' => i::__('Telefone Público'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('Por favor, informe o telefone público no formato (xx) xxxx-xxxx.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'telefone1' => array(
            'label' => i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('Por favor, informe o telefone 1 no formato (xx) xxxx xxxx.')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'label' => i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => i::__('Por favor, informe o telefone 2 no formato ')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone',

        ),

        /*
        'virtual_fisico' => array(
            'label' => i::__('Virtual ou físico'),
            'type' => 'select',
            'options' => array(
                '' => i::__('Físico'),
                'virtual' => i::__('Virtual')
            )
        ),
        */
        'acessibilidade' => array(
            'label' => i::__('Acessibilidade'),
            'type' => 'select',
            'options' => array(
                '' => i::__('Não Informado'),
                'Sim' => i::__('Sim'),
                'Não' => i::__('Não')
            )
        ),
        'acessibilidade_fisica' => array(
            'label' => i::__('Acessibilidade física'),
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => i::__('Outros'),
            'options' => array(
                i::__('Banheiros adaptados'),
                i::__('Rampa de acesso'),
                i::__('Elevador'),
                i::__('Sinalização tátil'),

                // vindos do sistema de museus.cultura.gov.br
                i::__('Bebedouro adaptado'),
                i::__('Cadeira de rodas para uso do visitante'),
                i::__('Circuito de visitação adaptado'),
                i::__('Corrimão nas escadas e rampas'),
                i::__('Elevador adaptado'),
                i::__('Rampa de acesso'),
                i::__('Sanitário adaptado'),
                i::__('Telefone público adaptado'),
                i::__('Vaga de estacionamento exclusiva para deficientes'),
                i::__('Vaga de estacionamento exclusiva para idosos')
            )
        ),
        'capacidade' => array(
            'label' => i::__('Capacidade'),
            'validations' => array(
                "v::intVal()->positive()" => i::__("A capacidade deve ser um número positivo.")
            ),
            'available_for_opportunities' => true
        ),

        'endereco' => array(
            'label' => i::__('Endereço'),
            'type' => 'text'
        ),


        'En_CEP' => [
            'label' => i::__('CEP'),
        ],
        'En_Nome_Logradouro' => [
            'label' => i::__('Logradouro'),
        ],
        'En_Num' => [
            'label' => i::__('Número'),
        ],
        'En_Complemento' => [
            'label' => i::__('Complemento'),
        ],
        'En_Bairro' => [
            'label' => i::__('Bairro'),
        ],
        'En_Municipio' => [
            'label' => i::__('Município'),
        ],
        'En_Estado' => [
            'label' => i::__('Estado'),
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
            'label' => i::__('Horário de funcionamento'),
            'type' => 'text',
            'available_for_opportunities' => true
        ),

        'criterios' => array(
            'label' => i::__('Critérios de uso do espaço'),
            'type' => 'text'
        ),

        'site' => array(
            'label' => i::__('Site'),
            'validations' => array(
                "v::url()" => i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'facebook' => array(
            'type' => "socialMedia",
            'label' => i::__('Facebook'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('facebook.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => "nomedousuario ou iddousuario",
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('x.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('x.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                $result = Utils::parseSocialMediaUser('instagram.com', $value);
                if($result && $result[0] == '@'){
                    $result = substr($result,1);
                }
                return $result;
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value, 'linkedin');
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('open.spotify.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' => function($value) {
                return Utils::parseSocialMediaUser('open.spotify.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^(@|channel\/)?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => i::__("O valor deve ser uma URL ou usuário válido.")
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

    ),

/**
 * Equipamentos Culturais
 */

    'items' => array(
        i::__('Espaços de Exibição de Filmes') => array(
            'range' => array(10,19),
            'items' => array(
                10 => array( 'name' => i::__('Cine itinerante')),
                11 => array( 'name' => i::__('Cineclube')),
                12 => array( 'name' => i::__('Drive-in')),
                13 => array( 'name' => i::__('Espaço Público Para Projeção de Filmes') ),
                14 => array( 'name' => i::__('Sala de cinema')),
            )
        ),

        i::__('Bibliotecas') => array(
            'range' => array(20,29),
            'items' => array(
                20 => array( 'name' => i::__('Biblioteca') ),
            )
        ),

        i::__('Teatros') => array(
            'range' => array(30,39),
            'items' => array(
                30 => array('name' => i::__('Teatro')),
            )
        ),

        i::__('Circos') => array(
            'range' => array(90,99),
            'items' => array(
                90 => array( 'name' => i::__('Circo')),
            )
        ),

       i::__('Centros Culturais') => array(
            'range' => array(40,49),
            'items' => array(
                40 => array( 'name' => i::__('Centros Culturais')),
            )
        ),

       i::__('Arquivos') => array(
            'range' => array(50,59),
            'items' => array(
                50 => array( 'name' => i::__('Arquivo Público') ),
                51 => array( 'name' => i::__('Arquivo Privado')),
            )
        ),

       i::__('Museus') => array(
            'range' => array(60,69),
            'items' => array(
                60 => array( 'name' => i::__('Museu Público') ),
                61 => array( 'name' => i::__('Museu Privado')),
            )
        ),

        i::__('Demais Equipamentos Culturais') => array(
            'range' => array(100,199),
            'items' => array(
                100 => array( 'name' => i::__('Galeria') ),
                101 => array( 'name' => i::__('Livraria')),
                102 => array( 'name' => i::__('Sebo')),
                104 => array( 'name' => i::__('Lan-house')),
                106 => array( 'name' => i::__('Ateliê')),
                107 => array( 'name' => i::__('Centro de artesanato') ),
                108 => array( 'name' => i::__('Casa de espetáculo')),
                110 => array( 'name' => i::__('Estúdio')),
                111 => array( 'name' => i::__('Concha acústica')),
                113 => array( 'name' => i::__('Espaço para Eventos')),
                114 => array( 'name' => i::__('Coworking')),
                116 => array( 'name' => i::__('Centro Comunitário')),
                125 => array( 'name' => i::__('Ponto de Cultura')),
                119 => array( 'name' => i::__('Praça dos esportes e da cultura') ),
                127 => array( 'name' => i::__('Trio elétrico')),
                129 => array( 'name' => i::__('Centro de tradições') ),
                124 => array( 'name' => i::__('Rádio Comunitária')),
                134 => array( 'name' => i::__('Ginásio Poliesportivo') ),
                199 => array( 'name' => i::__('Outros Equipamentos Culturais')), // adicionado na importação dos dados do Ceará para receber as endidades do tipo "equipamento"
            )
        ),

       i::__('Espaços Religiosos') => array(
            'range' => array(80,89),
            'items' => array(
                80 => array( 'name' => i::__('Templo')),
                81 => array( 'name' => i::__('Terreiro')),
                82 => array( 'name' => i::__('Mesquitas')),
                83 => array( 'name' => i::__('Sinagoga')),
                84 => array( 'name' => i::__('Igreja')),
                85 => array( 'name' => i::__('Centro Espírita') ),
              )
        ),

/**
 * Espaços de Formação Cultural
 */

       i::__('Escolas livres') => array(
            'range' => array(800,899),
            'items' => array(
                800 => array( 'name' => i::__('Escola livre')),
              )
        ),

/**
 * Patrimônios Culturais
 */

        i::__('Bens culturais de natureza material') => array(
            'range' => array(200, 299),
            'items' => array(
                299 => array( 'name' => i::__('Outros' )) // adicionado na importação dos dados do Ceará para receber as endidades do tipo "post"
            )
        ),

        i::__('Temporário') => array(
            'range' => array(500,600),
            'items' => array(
                501 => array( 'name' => i::__('Palco de Rua')),
                502 => array( 'name' => i::__('Bar')),
                503 => array( 'name' => i::__('Café')),
                504 => array( 'name' => i::__('Academia')),
                505 => array( 'name' => i::__('Casa Coletiva')),
                506 => array( 'name' => i::__('Casa de Shows')),
                507 => array( 'name' => i::__('Escritório')),
                508 => array( 'name' => i::__('Estacionamento')),
                509 => array( 'name' => i::__('Estúdio de Fotografia')),
                510 => array( 'name' => i::__('Estúdio de Gravação e/ou Ensaio')),
                511 => array( 'name' => i::__('Estúdio de Pintura/Artes Plásticas')),
                512 => array( 'name' => i::__('Food truck')),
                513 => array( 'name' => i::__('Galpão')),
                514 => array( 'name' => i::__('Hacker space')),
                515 => array( 'name' => i::__('Hostel')),
                516 => array( 'name' => i::__('Hotel')),
                517 => array( 'name' => i::__('Hub de Inovação')),
                518 => array( 'name' => i::__('Labs')),
                520 => array( 'name' => i::__('Loja')),
                521 => array( 'name' => i::__('Plataforma Digital')),
                522 => array( 'name' => i::__('Pousada')),
                523 => array( 'name' => i::__('Restaurante')),
                524 => array( 'name' => i::__('Salão de Beleza')),
                525 => array( 'name' => i::__('Teatro de Arena')),
                526 => array( 'name' => i::__('Universidade livre')),
                527 => array( 'name' => i::__('Escola pública')),
                528 => array( 'name' => i::__('Escola particular')),
                529 => array( 'name' => i::__('Universidade pública')),
                530 => array( 'name' => i::__('Universidade particular')),
                531 => array( 'name' => i::__('Aldeia')),
                532 => array( 'name' => i::__('Eco vila')),
            )
        ),
    )
);
