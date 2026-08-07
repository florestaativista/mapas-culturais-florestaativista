<?php

$__missing_i18n = [
    'Academia' => ['es_ES' => 'Academia', 'en_US' => 'Academy'],
    'Aldeia' => ['es_ES' => 'Aldea', 'en_US' => 'Village'],
    'Bar' => ['es_ES' => 'Bar', 'en_US' => 'Bar'],
    'Café' => ['es_ES' => 'Café', 'en_US' => 'Café'],
    'Casa Coletiva' => ['es_ES' => 'Casa Colectiva', 'en_US' => 'Collective house'],
    'Casa de Shows' => ['es_ES' => 'Casa de conciertos', 'en_US' => 'Concert venue'],
    'Coworking' => ['es_ES' => 'Coworking', 'en_US' => 'Coworking'],
    'Eco vila' => ['es_ES' => 'Ecoaldea', 'en_US' => 'Ecovillage'],
    'Escola livre' => ['es_ES' => 'Escuela libre', 'en_US' => 'Free school'],
    'Escola particular' => ['es_ES' => 'Escuela particular', 'en_US' => 'Private school'],
    'Escola pública' => ['es_ES' => 'Escuela pública', 'en_US' => 'Public school'],
    'Escritório' => ['es_ES' => 'Oficina', 'en_US' => 'Office'],
    'Estacionamento' => ['es_ES' => 'Estacionamiento', 'en_US' => 'Parking lot'],
    'Estúdio de Fotografia' => ['es_ES' => 'Estudio fotográfico', 'en_US' => 'Photography studio'],
    'Estúdio de Gravação e/ou Ensaio' => ['es_ES' => 'Estudio de grabación y/o ensayo', 'en_US' => 'Recording and/or rehearsal studio'],
    'Estúdio de Pintura/Artes Plásticas' => ['es_ES' => 'Estudio de pintura/artes plásticas', 'en_US' => 'Painting/visual arts studio'],
    'Food truck' => ['es_ES' => 'Food truck', 'en_US' => 'Food truck'],
    'Físico' => ['es_ES' => 'Físico', 'en_US' => 'Physical'],
    'Galpão' => ['es_ES' => 'Galpón', 'en_US' => 'Warehouse'],
    'Hacker space' => ['es_ES' => 'Hacker space', 'en_US' => 'Hackerspace'],
    'Hostel' => ['es_ES' => 'Hostel', 'en_US' => 'Hostel'],
    'Hotel' => ['es_ES' => 'Hotel', 'en_US' => 'Hotel'],
    'Hub de Inovação' => ['es_ES' => 'Hub de innovación', 'en_US' => 'Innovation hub'],
    'Labs' => ['es_ES' => 'Labs', 'en_US' => 'Labs'],
    'Loja' => ['es_ES' => 'Tienda', 'en_US' => 'Store'],
    'O valor deve ser uma URL válida do Spotify ou um identificador válido.' => ['es_ES' => 'El valor debe ser una URL válida de Spotify o un identificador válido.', 'en_US' => 'The value must be a valid Spotify URL or a valid identifier.'],
    'O valor deve ser uma URL válida ou o nome ou id do usuário.' => ['es_ES' => 'El valor debe ser una URL válida o el nombre o id del usuario.', 'en_US' => 'The value must be a valid URL or the user\'s name or id.'],
    'Plataforma Digital' => ['es_ES' => 'Plataforma Digital', 'en_US' => 'Digital platform'],
    'Pousada' => ['es_ES' => 'Posada', 'en_US' => 'Inn'],
    'Restaurante' => ['es_ES' => 'Restaurante', 'en_US' => 'Restaurant'],
    'Salão de Beleza' => ['es_ES' => 'Salón de belleza', 'en_US' => 'Beauty salon'],
    'Teatro de Arena' => ['es_ES' => 'Teatro de Arena', 'en_US' => 'Arena theater'],
    'URL ou identificador do Spotify' => ['es_ES' => 'URL o identificador de Spotify', 'en_US' => 'Spotify URL or identifier'],
    'Universidade livre' => ['es_ES' => 'Universidad libre', 'en_US' => 'Free university'],
    'Universidade particular' => ['es_ES' => 'Universidad particular', 'en_US' => 'Private university'],
    'Universidade pública' => ['es_ES' => 'Universidad pública', 'en_US' => 'Public university'],
    'Virtual' => ['es_ES' => 'Virtual', 'en_US' => 'Virtual'],
    'Virtual ou físico' => ['es_ES' => 'Virtual o físico', 'en_US' => 'Virtual or physical'],
];
$__mtr_lcode = \MapasCulturais\i::get_locale();
$__mtr = function (string $pt) use ($__missing_i18n, $__mtr_lcode) {
    return $__missing_i18n[$pt][$__mtr_lcode] ?? $pt;
};
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
            'label' => $__mtr('Virtual ou físico'),
            'type' => 'select',
            'options' => array(
                '' => $__mtr('Físico'),
                'virtual' => $__mtr('Virtual')
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
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => $__mtr("O valor deve ser uma URL válida ou o nome ou id do usuário.")
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
            'label' => \MapasCulturais\i::__('Spotify'),
            'validations' => array(
                "v::oneOf(v::urlDomain('open.spotify.com'), v::regex('/^([a-zA-Z0-9]+|(user|artist|playlist|show|album|track):[a-zA-Z0-9]+)$/i'))" => $__mtr("O valor deve ser uma URL válida do Spotify ou um identificador válido.")
            ),
            'serialize' => function($value) {
                return Utils::parseSocialMediaUser('open.spotify.com', $value);
            },
            'placeholder' => $__mtr('URL ou identificador do Spotify'),
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
                114 => array( 'name' => $__mtr('Coworking')),
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
                800 => array( 'name' => $__mtr('Escola livre')),
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
                502 => array( 'name' => $__mtr('Bar')),
                503 => array( 'name' => $__mtr('Café')),
                504 => array( 'name' => $__mtr('Academia')),
                505 => array( 'name' => $__mtr('Casa Coletiva')),
                506 => array( 'name' => $__mtr('Casa de Shows')),
                507 => array( 'name' => $__mtr('Escritório')),
                508 => array( 'name' => $__mtr('Estacionamento')),
                509 => array( 'name' => $__mtr('Estúdio de Fotografia')),
                510 => array( 'name' => $__mtr('Estúdio de Gravação e/ou Ensaio')),
                511 => array( 'name' => $__mtr('Estúdio de Pintura/Artes Plásticas')),
                512 => array( 'name' => $__mtr('Food truck')),
                513 => array( 'name' => $__mtr('Galpão')),
                514 => array( 'name' => $__mtr('Hacker space')),
                515 => array( 'name' => $__mtr('Hostel')),
                516 => array( 'name' => $__mtr('Hotel')),
                517 => array( 'name' => $__mtr('Hub de Inovação')),
                518 => array( 'name' => $__mtr('Labs')),
                520 => array( 'name' => $__mtr('Loja')),
                521 => array( 'name' => $__mtr('Plataforma Digital')),
                522 => array( 'name' => $__mtr('Pousada')),
                523 => array( 'name' => $__mtr('Restaurante')),
                524 => array( 'name' => $__mtr('Salão de Beleza')),
                525 => array( 'name' => $__mtr('Teatro de Arena')),
                526 => array( 'name' => $__mtr('Universidade livre')),
                527 => array( 'name' => $__mtr('Escola pública')),
                528 => array( 'name' => $__mtr('Escola particular')),
                529 => array( 'name' => $__mtr('Universidade pública')),
                530 => array( 'name' => $__mtr('Universidade particular')),
                531 => array( 'name' => $__mtr('Aldeia')),
                532 => array( 'name' => $__mtr('Eco vila')),
            )
        ),
    )
);
