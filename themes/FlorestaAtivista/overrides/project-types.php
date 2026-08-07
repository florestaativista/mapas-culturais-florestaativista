<?php

$__missing_i18n = [
    'Ato público' => ['es_ES' => 'Acto público', 'en_US' => 'Public act'],
    'Aulão' => ['es_ES' => 'Clase magistral', 'en_US' => 'Masterclass'],
    'Campeonato' => ['es_ES' => 'Campeonato', 'en_US' => 'Championship'],
    'Circuito' => ['es_ES' => 'Circuito', 'en_US' => 'Circuit'],
    'Cobertura' => ['es_ES' => 'Cobertura', 'en_US' => 'Coverage'],
    'Comunidade' => ['es_ES' => 'Comunidad', 'en_US' => 'Community'],
    'Conferência' => ['es_ES' => 'Conferencia', 'en_US' => 'Conference'],
    'Convocatória' => ['es_ES' => 'Convocatoria', 'en_US' => 'Call for entries'],
    'Debate' => ['es_ES' => 'Debate', 'en_US' => 'Debate'],
    'Espetáculo Musical' => ['es_ES' => 'Espectáculo Musical', 'en_US' => 'Musical performance'],
    'Espetáculo Teatral' => ['es_ES' => 'Espectáculo Teatral', 'en_US' => 'Theatrical performance'],
    'Espetáculo de Dança' => ['es_ES' => 'Espectáculo de Danza', 'en_US' => 'Dance performance'],
    'Estágio ou bolsa' => ['es_ES' => 'Pasantía o beca', 'en_US' => 'Internship or scholarship'],
    'Evento de Rua' => ['es_ES' => 'Evento callejero', 'en_US' => 'Street event'],
    'Festa' => ['es_ES' => 'Fiesta', 'en_US' => 'Party'],
    'Freela' => ['es_ES' => 'Freelance', 'en_US' => 'Freelance'],
    'Hackathon' => ['es_ES' => 'Hackathon', 'en_US' => 'Hackathon'],
    'Happy Hour' => ['es_ES' => 'Happy Hour', 'en_US' => 'Happy Hour'],
    'Imersão' => ['es_ES' => 'Inmersión', 'en_US' => 'Immersion'],
    'Jam' => ['es_ES' => 'Jam', 'en_US' => 'Jam'],
    'Maratona' => ['es_ES' => 'Maratón', 'en_US' => 'Marathon'],
    'Marcha' => ['es_ES' => 'Marcha', 'en_US' => 'March'],
    'Mutirão' => ['es_ES' => 'Trabajo colectivo', 'en_US' => 'Community work day'],
    'O email privado é obrigatório.' => ['es_ES' => 'El email privado es obligatorio.', 'en_US' => 'Private email is required.'],
    'O valor deve ser uma URL válida do Spotify ou um identificador válido.' => ['es_ES' => 'El valor debe ser una URL válida de Spotify o un identificador válido.', 'en_US' => 'The value must be a valid Spotify URL or a valid identifier.'],
    'O valor deve ser uma URL válida ou o nome ou id do usuário.' => ['es_ES' => 'El valor debe ser una URL válida o el nombre o id del usuario.', 'en_US' => 'The value must be a valid URL or the user\'s name or id.'],
    'Projeção' => ['es_ES' => 'Proyección', 'en_US' => 'Screening'],
    'Prêmio' => ['es_ES' => 'Premio', 'en_US' => 'Award'],
    'Rede' => ['es_ES' => 'Red', 'en_US' => 'Network'],
    'Roda de conversa' => ['es_ES' => 'Rueda de conversación', 'en_US' => 'Conversation circle'],
    'Sessão de cinema' => ['es_ES' => 'Sesión de cine', 'en_US' => 'Film screening'],
    'Show' => ['es_ES' => 'Show', 'en_US' => 'Show'],
    'Stand Up' => ['es_ES' => 'Stand Up', 'en_US' => 'Stand-up comedy'],
    'URL ou identificador do Spotify' => ['es_ES' => 'URL o identificador de Spotify', 'en_US' => 'Spotify URL or identifier'],
    'Vaga de trabalho' => ['es_ES' => 'Oferta de trabajo', 'en_US' => 'Job opening'],
    'Vernissage' => ['es_ES' => 'Vernissage', 'en_US' => 'Exhibition opening'],
    'Vivência' => ['es_ES' => 'Vivencia', 'en_US' => 'Experience'],
];
$__mtr_lcode = \MapasCulturais\i::get_locale();
$__mtr = function (string $pt) use ($__missing_i18n, $__mtr_lcode) {
    return $__missing_i18n[$pt][$__mtr_lcode] ?? $pt;
};

use \MapasCulturais\i;
use \MapasCulturais\Utils;

function compareNamesProjects($item1, $item2) {
    return strcmp($item1['name'], $item2['name']);
}

$items = [
    1 => ['name' => $__mtr('Ato público')],
    2 => ['name' => $__mtr('Aulão')],
    3 => ['name' => $__mtr('Campeonato')],
    4 => ['name' => $__mtr('Circuito')],
    5 => ['name' => $__mtr('Cobertura')],
    6 => ['name' => $__mtr('Comunidade')],
    7 => ['name' => i::__('Concurso')],
    8 => ['name' => $__mtr('Conferência')],
    9 => ['name' => i::__('Congresso')],
    10 => ['name' => i::__('Consulta')],
    11 => ['name' => i::__('Convenção')],
    12 => ['name' => $__mtr('Convocatória')],
    13 => ['name' => i::__('Curso')],
    14 => ['name' => $__mtr('Debate')],
    15 => ['name' => i::__('Edital')],
    16 => ['name' => i::__('Encontro')],
    17 => ['name' => $__mtr('Espetáculo Musical')],
    18 => ['name' => $__mtr('Espetáculo Teatral')],
    19 => ['name' => $__mtr('Espetáculo de Dança')],
    20 => ['name' => $__mtr('Estágio ou bolsa')],
    21 => ['name' => $__mtr('Evento de Rua')],
    22 => ['name' => i::__('Exibição')],
    23 => ['name' => i::__('Exposição')],
    24 => ['name' => i::__('Feira')],
    25 => ['name' => $__mtr('Festa')],
    26 => ['name' => i::__('Festa Popular')],
    27 => ['name' => i::__('Festa Religiosa')],
    28 => ['name' => i::__('Festival')],
    29 => ['name' => $__mtr('Freela')],
    30 => ['name' => i::__('Fórum')],
    31 => ['name' => $__mtr('Hackathon')],
    32 => ['name' => $__mtr('Happy Hour')],
    33 => ['name' => $__mtr('Imersão')],
    34 => ['name' => i::__('Inscrições')],
    35 => ['name' => i::__('Intercâmbio Cultural')],
    36 => ['name' => $__mtr('Jam')],
    37 => ['name' => i::__('Jornada')],
    38 => ['name' => i::__('Jornada')],
    39 => ['name' => $__mtr('Maratona')],
    40 => ['name' => $__mtr('Marcha')],
    41 => ['name' => i::__('Mostra')],
    42 => ['name' => $__mtr('Mutirão')],
    43 => ['name' => i::__('Oficina')],
    44 => ['name' => i::__('Palestra')],
    45 => ['name' => i::__('Palestra')],
    46 => ['name' => i::__('Performance')],
    47 => ['name' => i::__('Pesquisa')],
    48 => ['name' => i::__('Programa')],
    49 => ['name' => $__mtr('Projeção')],
    50 => ['name' => $__mtr('Prêmio')],
    51 => ['name' => $__mtr('Rede')],
    52 => ['name' => i::__('Reunião')],
    53 => ['name' => $__mtr('Roda de conversa')],
    54 => ['name' => i::__('Sarau')],
    55 => ['name' => i::__('Seminário')],
    56 => ['name' => $__mtr('Sessão de cinema')],
    57 => ['name' => $__mtr('Show')],
    57 => ['name' => i::__('Simpósio')],
    59 => ['name' => i::__('Slam')],
    60 => ['name' => $__mtr('Stand Up')],
    61 => ['name' => $__mtr('Vaga de trabalho')],
    62 => ['name' => $__mtr('Vernissage')],
    63 => ['name' => $__mtr('Vivência')],
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
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => $__mtr("O valor deve ser uma URL válida ou o nome ou id do usuário.")
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
                //'required' => $__mtr('O email privado é obrigatório.'),
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
