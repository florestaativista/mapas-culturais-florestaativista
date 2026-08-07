<?php

$__missing_i18n = [
    'Ato público' => ['es_ES' => 'Acto público', 'en_US' => 'Public act'],
    'Audição' => ['es_ES' => 'Audición', 'en_US' => 'Audition'],
    'Aulão' => ['es_ES' => 'Clase magistral', 'en_US' => 'Masterclass'],
    'Campeonato' => ['es_ES' => 'Campeonato', 'en_US' => 'Championship'],
    'Circuito' => ['es_ES' => 'Circuito', 'en_US' => 'Circuit'],
    'Clima' => ['es_ES' => 'Clima', 'en_US' => 'Climate'],
    'Cobertura' => ['es_ES' => 'Cobertura', 'en_US' => 'Coverage'],
    'Concurso de bandas' => ['es_ES' => 'Concurso de bandas', 'en_US' => 'Band contest'],
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
    'Gravação Estúdio' => ['es_ES' => 'Grabación en estudio', 'en_US' => 'Studio recording'],
    'Gravação de Clipe' => ['es_ES' => 'Grabación de videoclip', 'en_US' => 'Music video recording'],
    'Hackathon' => ['es_ES' => 'Hackathon', 'en_US' => 'Hackathon'],
    'Happy Hour' => ['es_ES' => 'Happy Hour', 'en_US' => 'Happy Hour'],
    'Imersão' => ['es_ES' => 'Inmersión', 'en_US' => 'Immersion'],
    'Jam' => ['es_ES' => 'Jam', 'en_US' => 'Jam'],
    'Live' => ['es_ES' => 'Live', 'en_US' => 'Livestream'],
    'Maratona' => ['es_ES' => 'Maratón', 'en_US' => 'Marathon'],
    'Marcha' => ['es_ES' => 'Marcha', 'en_US' => 'March'],
    'Mutirão' => ['es_ES' => 'Trabajo colectivo', 'en_US' => 'Community work day'],
    'Número máximo de inscrições na oportunidade' => ['es_ES' => 'Número máximo de inscripciones en la oportunidad', 'en_US' => 'Maximum number of registrations for the opportunity'],
    'O número máximo de inscrições por agente responsável deve ser um número inteiro' => ['es_ES' => 'El número máximo de inscripciones por perfil responsable debe ser un número entero', 'en_US' => 'The maximum number of registrations per responsible profile must be an integer'],
    'O valor deve ser uma URL válida do Spotify ou um identificador válido.' => ['es_ES' => 'El valor debe ser una URL válida de Spotify o un identificador válido.', 'en_US' => 'The value must be a valid Spotify URL or a valid identifier.'],
    'O valor deve ser uma URL válida ou o nome ou id do usuário.' => ['es_ES' => 'El valor debe ser una URL válida o el nombre o id del usuario.', 'en_US' => 'The value must be a valid URL or the user\'s name or id.'],
    'Projeção' => ['es_ES' => 'Proyección', 'en_US' => 'Screening'],
    'Prêmio' => ['es_ES' => 'Premio', 'en_US' => 'Award'],
    'Quantidades de vagas que esse edital irá disponibilizar.' => ['es_ES' => 'Cantidad de vacantes que esta convocatoria pondrá a disposición.', 'en_US' => 'Number of spots this call will make available.'],
    'Residência artística' => ['es_ES' => 'Residencia artística', 'en_US' => 'Artistic residency'],
    'Roda' => ['es_ES' => 'Rueda', 'en_US' => 'Circle'],
    'Roda de conversa' => ['es_ES' => 'Rueda de conversación', 'en_US' => 'Conversation circle'],
    'Sessão de cinema' => ['es_ES' => 'Sesión de cine', 'en_US' => 'Film screening'],
    'Show' => ['es_ES' => 'Show', 'en_US' => 'Show'],
    'Stand Up' => ['es_ES' => 'Stand Up', 'en_US' => 'Stand-up comedy'],
    'Sugestão de pauta' => ['es_ES' => 'Sugerencia de pauta', 'en_US' => 'Topic suggestion'],
    'Turnê' => ['es_ES' => 'Gira', 'en_US' => 'Tour'],
    'URL ou identificador do Spotify' => ['es_ES' => 'URL o identificador de Spotify', 'en_US' => 'Spotify URL or identifier'],
    'Vaga de trabalho' => ['es_ES' => 'Oferta de trabajo', 'en_US' => 'Job opening'],
    'Valor total que esse edital irá disponibilizar.' => ['es_ES' => 'Valor total que esta convocatoria pondrá a disposición.', 'en_US' => 'Total amount this call will make available.'],
    'Vernissage' => ['es_ES' => 'Vernissage', 'en_US' => 'Exhibition opening'],
    'Vivência' => ['es_ES' => 'Vivencia', 'en_US' => 'Experience'],
];
$__mtr_lcode = \MapasCulturais\i::get_locale();
$__mtr = function (string $pt) use ($__missing_i18n, $__mtr_lcode) {
    return $__missing_i18n[$pt][$__mtr_lcode] ?? $pt;
};

use \MapasCulturais\i;
use \MapasCulturais\Utils;

/**
 * See https://github.com/Respect/Validation to know how to write validations
 */

function compareNamesOpportunity($item1, $item2)
{
    return strcmp($item1['name'], $item2['name']);
}

$items = [
    1 => ['name' => $__mtr('Ato público')],
    2 => ['name' => $__mtr('Aulão')],
    3 => ['name' => $__mtr('Campeonato')],
    4 => ['name' => $__mtr('Circuito')],
    5 => ['name' => $__mtr('Cobertura')],
    6 => ['name' => i::__('Concurso')],
    7 => ['name' => $__mtr('Conferência')],
    8 => ['name' => i::__('Congresso')],
    9 => ['name' => i::__('Consulta')],
    10 => ['name' => i::__('Convenção')],
    11 => ['name' => $__mtr('Convocatória')],
    12 => ['name' => i::__('Curso')],
    13 => ['name' => $__mtr('Debate')],
    14 => ['name' => i::__('Edital')],
    15 => ['name' => i::__('Encontro')],
    16 => ['name' => $__mtr('Espetáculo Musical')],
    17 => ['name' => $__mtr('Espetáculo Teatral')],
    18 => ['name' => $__mtr('Espetáculo de Dança')],
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
    38 => ['name' => $__mtr('Maratona')],
    39 => ['name' => $__mtr('Marcha')],
    40 => ['name' => i::__('Mostra')],
    41 => ['name' => $__mtr('Mutirão')],
    42 => ['name' => i::__('Oficina')],
    43 => ['name' => i::__('Palestra')],
    45 => ['name' => i::__('Performance')],
    46 => ['name' => i::__('Pesquisa')],
    47 => ['name' => i::__('Programa')],
    48 => ['name' => $__mtr('Projeção')],
    49 => ['name' => $__mtr('Prêmio')],
    50 => ['name' => i::__('Reunião')],
    51 => ['name' => $__mtr('Roda de conversa')],
    52 => ['name' => i::__('Sarau')],
    53 => ['name' => i::__('Seminário')],
    54 => ['name' => $__mtr('Sessão de cinema')],
    55 => ['name' => $__mtr('Show')],
    56 => ['name' => i::__('Simpósio')],
    57 => ['name' => i::__('Slam')],
    58 => ['name' => $__mtr('Stand Up')],
    59 => ['name' => $__mtr('Sugestão de pauta')],
    60 => ['name' => $__mtr('Vaga de trabalho')],
    61 => ['name' => $__mtr('Vernissage')],
    62 => ['name' => $__mtr('Vivência')],
    
    63 => ['name' => $__mtr('Clima')],

    // Usadas no SOM
    64 => ['name' => $__mtr('Audição')],
    65 => ['name' => $__mtr('Concurso de bandas')],
    66 => ['name' => $__mtr('Gravação de Clipe')],
    67 => ['name' => $__mtr('Gravação Estúdio')],
    68 => ['name' => $__mtr('Live')],
    69 => ['name' => $__mtr('Residência artística')],
    70 => ['name' => $__mtr('Roda')],
    71 => ['name' => $__mtr('Turnê')]
];

uasort($items, 'compareNamesOpportunity');

return array(
    'metadata' => array(

        'registrationCategTitle' => array(
            'label' => i::__('Título das opções (ex: Categorias)'),
        ),

        'registrationCategDescription' => array(
            'label' => i::__('Descrição das opções (ex: Selecione uma categoria)'),
        ),

        'registrationLimitPerOwner' => array(
            'type' => 'integer',
            'label' => i::__('Número máximo de inscrições por agente responsável'),
            'validations' => array(
                "v::intVal()" => $__mtr("O número máximo de inscrições por agente responsável deve ser um número inteiro")
            )
        ),

        'registrationLimit' => array(
            'type' => 'integer',
            'label' => $__mtr('Número máximo de inscrições na oportunidade'),
            'validations' => array(
                "v::intVal()" => i::__("O número máximo de inscrições na oportunidade deve ser um número inteiro")
            )
        ),
        'useSpaceRelationIntituicao' => array(
            'label' => i::__('Espaço Cultural'),
            'type' => 'select',
            'options' => (object) array(
                'dontUse' => i::__('Não utilizar'),
                'required' => i::__('Obrigatório'),
                'optional' => i::__('Opcional')
            ),
        ),
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
        'registrationSeals' => array(
                'label' => i::__('Selos'),
                'serialize' => function($value) { return json_encode($value); },
                'unserialize' => function($value) { return json_decode((string) $value); }
        ),

        /** @TODO: colocar isso na entidade Opportunity (issue: #1273) **/
        'projectName' => array(
            'label' => i::__('Nome do Projeto'),
            'type' => 'select',
            'default' => '0',
            'options' => (object) array(
                '0' => i::__('Não Utilizar'),
                '1' => i::__('Opcional'),
                '2' => i::__('Obrigatório'),
            ),

            'unserialize' => function($val){
                return intval($val);
            }
        ),

        'totalResource' => array(
            'type' => 'float',
            'field_type' => 'currency',
            'label' => i::__('Valor total'),
            // 'description' => $__mtr("Valor total que esse edital irá disponibilizar."),
        ),

        'vacancies' => array(
            'type' => 'integer',
            'label' => i::__('Total de vagas'),
            // 'description' => $__mtr("Quantidades de vagas que esse edital irá disponibilizar."),
        ),

        'isModel' => array(
            'type' => 'integer',
            'label' => i::__('É modelo?'),
            'default_value' => 0
        ),
        'isModelPublic' => array(
            'type' => 'integer',
            'label' => i::__('É modelo público?'),
        ),

        'requestAgentAvatar' => array(
            'label' => i::__('Solicitar avatar'),
            'type' => 'radio',
            'default' => '0',
            'options' => (object) array(
                '0' => i::__('Não Utilizar'),
                '1' => i::__('Obrigatório'),
            ),
            'unserialize' => function($value) {
               return ($value == 0 || $value == "") ? false : true;
            }
        ),
        'isModel' => array(
            'type' => 'integer',
            'label' => i::__('É modelo?'),
            'default_value' => 0
        ),

        'isModelPublic' => array(
            'type' => 'integer',
            'label' => i::__('É modelo público?'),
        ),
    ),
    'items' => $items,
);
