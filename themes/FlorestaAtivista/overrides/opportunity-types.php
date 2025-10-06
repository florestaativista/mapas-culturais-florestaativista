<?php

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
    1 => ['name' => i::__('Ato público')],
    2 => ['name' => i::__('Aulão')],
    3 => ['name' => i::__('Campeonato')],
    4 => ['name' => i::__('Circuito')],
    5 => ['name' => i::__('Cobertura')],
    6 => ['name' => i::__('Concurso')],
    7 => ['name' => i::__('Conferência')],
    8 => ['name' => i::__('Congresso')],
    9 => ['name' => i::__('Consulta')],
    10 => ['name' => i::__('Convenção')],
    11 => ['name' => i::__('Convocatória')],
    12 => ['name' => i::__('Curso')],
    13 => ['name' => i::__('Debate')],
    14 => ['name' => i::__('Edital')],
    15 => ['name' => i::__('Encontro')],
    16 => ['name' => i::__('Espetáculo Musical')],
    17 => ['name' => i::__('Espetáculo Teatral')],
    18 => ['name' => i::__('Espetáculo de Dança')],
    20 => ['name' => i::__('Estágio ou bolsa')],
    21 => ['name' => i::__('Evento de Rua')],
    22 => ['name' => i::__('Exibição')],
    23 => ['name' => i::__('Exposição')],
    24 => ['name' => i::__('Feira')],
    25 => ['name' => i::__('Festa')],
    26 => ['name' => i::__('Festa Popular')],
    27 => ['name' => i::__('Festa Religiosa')],
    28 => ['name' => i::__('Festival')],
    29 => ['name' => i::__('Freela')],
    30 => ['name' => i::__('Fórum')],
    31 => ['name' => i::__('Hackathon')],
    32 => ['name' => i::__('Happy Hour')],
    33 => ['name' => i::__('Imersão')],
    34 => ['name' => i::__('Inscrições')],
    35 => ['name' => i::__('Intercâmbio Cultural')],
    36 => ['name' => i::__('Jam')],
    37 => ['name' => i::__('Jornada')],
    38 => ['name' => i::__('Maratona')],
    39 => ['name' => i::__('Marcha')],
    40 => ['name' => i::__('Mostra')],
    41 => ['name' => i::__('Mutirão')],
    42 => ['name' => i::__('Oficina')],
    43 => ['name' => i::__('Palestra')],
    45 => ['name' => i::__('Performance')],
    46 => ['name' => i::__('Pesquisa')],
    47 => ['name' => i::__('Programa')],
    48 => ['name' => i::__('Projeção')],
    49 => ['name' => i::__('Prêmio')],
    50 => ['name' => i::__('Reunião')],
    51 => ['name' => i::__('Roda de conversa')],
    52 => ['name' => i::__('Sarau')],
    53 => ['name' => i::__('Seminário')],
    54 => ['name' => i::__('Sessão de cinema')],
    55 => ['name' => i::__('Show')],
    56 => ['name' => i::__('Simpósio')],
    57 => ['name' => i::__('Slam')],
    58 => ['name' => i::__('Stand Up')],
    59 => ['name' => i::__('Sugestão de pauta')],
    60 => ['name' => i::__('Vaga de trabalho')],
    61 => ['name' => i::__('Vernissage')],
    62 => ['name' => i::__('Vivência')],
    
    63 => ['name' => i::__('Clima')],

    // Usadas no SOM
    64 => ['name' => i::__('Audição')],
    65 => ['name' => i::__('Concurso de bandas')],
    66 => ['name' => i::__('Gravação de Clipe')],
    67 => ['name' => i::__('Gravação Estúdio')],
    68 => ['name' => i::__('Live')],
    69 => ['name' => i::__('Residência artística')],
    70 => ['name' => i::__('Roda')],
    71 => ['name' => i::__('Turnê')]
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
                "v::intVal()" => i::__("O número máximo de inscrições por agente responsável deve ser um número inteiro")
            )
        ),

        'registrationLimit' => array(
            'type' => 'integer',
            'label' => i::__('Número máximo de inscrições na oportunidade'),
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
            // 'description' => i::__("Valor total que esse edital irá disponibilizar."),
        ),

        'vacancies' => array(
            'type' => 'integer',
            'label' => i::__('Total de vagas'),
            // 'description' => i::__("Quantidades de vagas que esse edital irá disponibilizar."),
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
