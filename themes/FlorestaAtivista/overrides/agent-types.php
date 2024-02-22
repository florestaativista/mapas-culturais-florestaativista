<?php

 use MapasCulturais\Utils;

/**
 * See https://github.com/Respect/Validation to know how to write validations
 */
return array(
    'metadata' => array(
        'nomeCompleto' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Nome completo ou Razão Social'),
            'validations' => array(
                //'required' => \MapasCulturais\i::__('Seu nome completo ou jurídico deve ser informado.')
            ),
            'available_for_opportunities' => true
        ),

        'nomeSocial' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Nome Social'),
            'available_for_opportunities' => true,
        ),

        'escolaridade' => array(
            'private' => false,
            'label' => \MapasCulturais\i::__('Escolaridade'),
            'type' => 'select',
            'options' => array(
               '' => MapasCulturais\i::__('Não Informar'),
                MapasCulturais\i::__('Fundamental Incompleto'),
                MapasCulturais\i::__('Fundamental Completo'),
                MapasCulturais\i::__('Médio Incompleto'),
                MapasCulturais\i::__('Médio Completo'),
                MapasCulturais\i::__('Superior Completo'),
                MapasCulturais\i::__('Superior Incompleto'),
                MapasCulturais\i::__('Pós-graduação'),
                MapasCulturais\i::__('Sem formação'),
            ),
            'available_for_opportunities' => true,
        ),

        'pessoaDeficiente' => array(
            'label' => 'Pessoa com deficiência',
            'type' => 'multiselect',
            'options' => [
                '' => MapasCulturais\i::__('Não sou'),
                MapasCulturais\i::__('Visual'),
                MapasCulturais\i::__('Mental'),
                MapasCulturais\i::__('Física'),
                MapasCulturais\i::__('Auditiva'),
            ],
            'available_for_opportunities' => true
        ),

        'comunidadesTradicional' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Comunidades tradicionais'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Não pertenço'),
                MapasCulturais\i::__('Comunidade extrativista'),
                MapasCulturais\i::__('Comunidade ribeirinha'),
                MapasCulturais\i::__('Comunidade rural'),
                MapasCulturais\i::__('Povos indígenas/originários'),
                MapasCulturais\i::__('Comunidades de pescadores(as) artesanais'),
                MapasCulturais\i::__('Povos ciganos'),
                MapasCulturais\i::__('Povos de terreiro'),
                MapasCulturais\i::__('Povos de quilombola'),
                MapasCulturais\i::__('Pomeranos'),
            ),
            'available_for_opportunities' => true
        ),

        'comunidadesTradicionalOutros' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Digite sua comunidade tradicional'),
            'available_for_opportunities' => true
        ),

        'documento' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('CPF ou CNPJ'),
            'serialize' => function($value, $entity = null) {
                /**@var MapasCulturais\App $this */
                if(!$this->rcache->contains("$entity:SET_documento")){
                    $this->rcache->save("$entity:SET_documento", true);
                    if($entity->type && $entity->type->id == 1 && !$this->rcache->contains("$entity:SET_cpf")){
                        $entity->cpf = $value;
                    }else if($entity->type && $entity->type->id == 2 && !$this->rcache->contains("$entity:SET_cnpj")){
                        $entity->cnpj = $value;

                    }
                }

                return Utils::formatCnpjCpf($value);
            },
            'available_for_opportunities' => true
        ),

        'cnpj' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('CNPJ'),
            'type' => 'cnpj',
            'serialize' => function($value, $entity = null) {
                /**@var MapasCulturais\App $this */
                if(!$this->rcache->contains("$entity:SET_cnpj")){
                    $this->rcache->save("$entity:SET_cnpj", true);
                    if($entity->type && $entity->type->id == 2 && !$this->rcache->contains("$entity:SET_documento")){
                        $entity->documento = $value;
                    }
                }
                return Utils::formatCnpjCpf($value);
            },
            'unserialize' => function($value, $entity) {
                if (!$value && isset($entity->type) && $entity->type->id == 2) {
                    $value = $entity->documento;
                }
    
                return Utils::formatCnpjCpf($value);
            },
            'validations' => array(
                'v::cnpj()' => \MapasCulturais\i::__('O número de CNPJ informado é inválido.')
             ),
            'available_for_opportunities' => true,
        ),
        'cpf' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('CPF'),
            'type' => 'cpf',
            'serialize' => function($value, $entity = null) {
                /**@var MapasCulturais\App $this */
                if(!$this->rcache->contains("$entity:SET_cpf")){
                    $this->rcache->save("$entity:SET_cpf", true);
                    
                    if($entity->type && $entity->type->id == 1 && !$this->rcache->contains("$entity:SET_documento")){
                        $entity->documento = $value;
                    }
                }
                return Utils::formatCnpjCpf($value);
            },
            'unserialize' => function($value, $entity) {
                if (!$value) {
                    $value = $entity->documento;
                }

                return Utils::formatCnpjCpf($value);
            },
            'validations' => array(
                'v::cpf()' => \MapasCulturais\i::__('O número de CPF informado é inválido.')
             ),
            'available_for_opportunities' => true,
        ),

        'raca' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Raça/cor'),
            'type' => 'select',
            'options' => array(
                'Branca' => \MapasCulturais\i::__('Branca'),
                'Preta' => \MapasCulturais\i::__('Preta'),
                'Amarela' => \MapasCulturais\i::__('Amarela'),
                'Parda' => \MapasCulturais\i::__('Parda'),
                'Marrom' => \MapasCulturais\i::__('Marrom'),
                'Indígena' => \MapasCulturais\i::__('Indígena'),
                'Prefiro não declarar' => \MapasCulturais\i::__('Prefiro não declarar'),
            ),
            'available_for_opportunities' => true
        ),

        'dataDeNascimento' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Data de Nascimento/Fundação'),
            'type' => 'date',
            'serialize' => function($value, $entity = null){
               $this->hook("entity(<<*>>).save:before", function() use ($entity){
                    /** @var MapasCulturais\Entity $entity */
                    if($this->equals($entity)){
                        $this->idoso = 1; 
                    }
               });
               return (new DateTime($value))->format("Y-m-d");
            },
            'validations' => array(
                'v::date("Y-m-d")' => \MapasCulturais\i::__('Data inválida').'{{format}}',
            ),
            'available_for_opportunities' => true
        ),
        'idoso' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Pessoa idosa'),
            'type' => 'readonly',
            'serialize' => function($value, $entity = null){
                if($entity->dataDeNascimento){
                    $today = new DateTime('now');
                    $calc = (new DateTime($entity->dataDeNascimento))->diff($today);
                    return ($calc->y >= 60) ? "1" : "0";
                }else{
                    return null;
                }
            },
            'available_for_opportunities' => true
        ),

        'localizacao' => array(
            'label' => \MapasCulturais\i::__('Localização'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Não Informar'),
                'Pública' => \MapasCulturais\i::__('Pública'),
                'Privada' => \MapasCulturais\i::__('Privada')
            )
        ),

        'genero' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Gênero'),
            'type' => 'select',
            'options' => array(
                'Mulher Cis' => \MapasCulturais\i::__('Mulher Cis'),
                'Mulher Trans ' => \MapasCulturais\i::__('Mulher Trans '),
                'Homem Cis' => \MapasCulturais\i::__('Homem Cis'),
                'Homem Trans' => \MapasCulturais\i::__('Homem Trans'),
                'Travesti' => \MapasCulturais\i::__('Travesti'),
                'Intersexual' => \MapasCulturais\i::__('Intersexual'),
                'Não-binário' => \MapasCulturais\i::__('Não-binário'),
                'Fluido' => \MapasCulturais\i::__('Fluido'),
                'Agênero' => \MapasCulturais\i::__('Agênero'),
                'Prefiro não declarar' => \MapasCulturais\i::__('Prefiro não declarar'),
                'Outro' => \MapasCulturais\i::__('Outro'),
            ),
            'available_for_opportunities' => true,
            'field_type' => 'select'
        ),

        'orientacaoSexual' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Orientação Sexual'),
            'type' => 'select',
            'options' => array(
                'Heterossexual' => \MapasCulturais\i::__('Heterossexual'),
                'Homossexual' => \MapasCulturais\i::__('Homossexual'),
                'Bissexual' => \MapasCulturais\i::__('Bissexual'),
                'Pansexual' => \MapasCulturais\i::__('Pansexual'),
                'Polissexual' => \MapasCulturais\i::__('Polissexual'),
                'Assexual' => \MapasCulturais\i::__('Assexual'),
                'Prefiro não declarar' => \MapasCulturais\i::__('Prefiro não declarar'),
                'Outros' => \MapasCulturais\i::__('Outros'),
            ),
            'available_for_opportunities' => true
        ),
        'agenteItinerante' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Agente Itinerante'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Não Informar'),
                'Sim' => \MapasCulturais\i::__('Sim'),
                'Não' => \MapasCulturais\i::__('Não'),
            ),
            'available_for_opportunities' => true
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
            'private' => true,
            'label' => \MapasCulturais\i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('O número de telefone informado é inválido.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'endereco' => array(
            'private' => function(){
                return !$this->publicLocation;
            },
            'label' => \MapasCulturais\i::__('Endereço'),
            'type' => 'text'
        ),
                    
        'En_CEP' => [
            'label' => \MapasCulturais\i::__('CEP'),
            'type' => 'cep',
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Nome_Logradouro' => [
            'label' => \MapasCulturais\i::__('Logradouro'),
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Num' => [
            'label' => \MapasCulturais\i::__('Número'),
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Complemento' => [
            'label' => \MapasCulturais\i::__('Complemento'),
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Bairro' => [
            'label' => \MapasCulturais\i::__('Bairro'),
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Municipio' => [
            'label' => \MapasCulturais\i::__('Município'),
            'private' => function(){
                return !$this->publicLocation;
            },
        ],
        'En_Estado' => [
            'label' => \MapasCulturais\i::__('Estado'),
            'private' => function(){
                return !$this->publicLocation;
            },
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
        'En_Pais' => [
            'label' => \MapasCulturais\i::__('País'),
            'type' => 'select',
            'default' => function(){
                $app = MapasCulturais\App::i();
                return $app->config['app.defaultCountry'];
            },
            'options' => [
                'AD' => 'Andorra',
                'AR' => 'Argentina',
                'BO' => 'Bolivia',
                'BR' => 'Brasil',
                'CL' => 'Chile',
                'CO' => 'Colombia',
                'CR' => 'Costa Rica',
                'CU' => 'Cuba',
                'EC' => 'Ecuador',
                'SV' => 'El Salvador',
                'ES' => 'España',
                'GT' => 'Guatemala',
                'HN' => 'Honduras',
                'MX' => 'México',
                'NI' => 'Nicarágua',
                'PA' => 'Panamá',
                'PY' => 'Paraguay',
                'PE' => 'Perú',
                'PT' => 'Portugal',
                'DO' => 'República Dominicana',
                'UY' => 'Uruguay',
                'VE' => 'Venezuela',
            ]
        ],

        'site' => array(
            'label' => \MapasCulturais\i::__('Site'),
            'validations' => array(
                "v::url()" => \MapasCulturais\i::__("A url informada é inválida."),
            ),
            'available_for_opportunities' => true
        ),
        'facebook' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Facebook'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('facebook.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => "nomedousuario ou iddousuario",
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('twitter.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('twitter.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('instagram.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('spotify.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('spotify.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
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
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('pinterest.com', $value);
            },
            'placeholder' => "nomedousuario",
            'available_for_opportunities' => true
        ),
        // DADOS BANCÁRIOS
        'payment_bank_account_type' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Tipo da conta bancária para pagamentos'),
            'type' => 'select',
            'options' => array(
                '1' => \MapasCulturais\i::__('Conta corrente'),
                '2' => \MapasCulturais\i::__('Conta Poupança'),
            ),
        ),
        'payment_bank_account_number' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Número da conta bancária para pagamentos'),
            'type' => 'text',
            'dafault' => '[]',
        ),
        'payment_bank_branch' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Agência bancária para pagamentos'),
            'type' => 'text',
            'dafault' => '[]',
        ),
        'payment_bank_number' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Número do banco para pagamentos'),
            'type' => 'select',
            'options' => array(
                '1' => \MapasCulturais\i::__("Banco Do Brasil S.A (BB) - 1"),
                '237' => \MapasCulturais\i::__("Bradesco S.A - 237"),
                '260' => \MapasCulturais\i::__("Nu Pagamentos S.A (Nubank) - 260"),
                '290' => \MapasCulturais\i::__("Pagseguro Internet S.A - 290"),
                '323' => \MapasCulturais\i::__("Mercado Pago – Conta Do Mercado - 323"),
                '341' => \MapasCulturais\i::__("Itaú Unibanco S.A - 341"),
                '104' => \MapasCulturais\i::__("Caixa Econômica Federal (CEF) - 104"),
                '33'  => \MapasCulturais\i::__("Banco Santander Brasil S.A - 33"),
                '212' => \MapasCulturais\i::__("Banco Original S.A - 212"),
                '422' => \MapasCulturais\i::__("Banco Safra S.A - 422"),
                '745' => \MapasCulturais\i::__("Banco Citibank S.A - 745"),
                '4'   => \MapasCulturais\i::__("Banco Do Nordeste Do Brasil S.A. - 4"),
                '7'   => \MapasCulturais\i::__("Bndes (Banco Nacional Do Desenvolvimento Social) - 7"),
                '117' => \MapasCulturais\i::__("Advanced Cc Ltda - 117"),
                '172' => \MapasCulturais\i::__("Albatross Ccv S.A - 172"),
                '188' => \MapasCulturais\i::__("Ativa S.A Investimentos - 188"),
                '280' => \MapasCulturais\i::__("Avista S.A - 280"),
                '80'  => \MapasCulturais\i::__("B&T Cc Ltda - 80"),
                '654' => \MapasCulturais\i::__("Banco A.J. Renner S.A - 654"),
                '246' => \MapasCulturais\i::__("Banco Abc Brasil S.A - 246"),
                '121' => \MapasCulturais\i::__("Banco Agibank S.A - 121"),
                '25'  => \MapasCulturais\i::__("Banco Alfa S.A. - 25"),
                '641' => \MapasCulturais\i::__("Banco Alvorada S.A - 641"),
                '65'  => \MapasCulturais\i::__("Banco Andbank S.A - 65"),
                '96'  => \MapasCulturais\i::__("Banco B3 S.A - 96"),
                '36'  => \MapasCulturais\i::__("Banco Bbi S.A - 36"),
                '47'  => \MapasCulturais\i::__("Banco Bco Do Estado De Sergipe S.A - 47"),
                '250' => \MapasCulturais\i::__("Banco Bcv - 250"),
                '318' => \MapasCulturais\i::__("Banco Bmg S.A - 318"),
                '107' => \MapasCulturais\i::__("Banco Bocom Bbm S.A - 107"),
                '63'  => \MapasCulturais\i::__("Banco Bradescard - 63"),
                '122' => \MapasCulturais\i::__("Banco Bradesco Berj S.A - 122"),
                '204' => \MapasCulturais\i::__("Banco Bradesco Cartoes S.A - 204"),
                '394' => \MapasCulturais\i::__("Banco Bradesco Financiamentos S.A - 394"),
                '218' => \MapasCulturais\i::__("Banco Bs2 S.A - 218"),
                '208' => \MapasCulturais\i::__("Banco Btg Pactual S.A - 208"),
                '336' => \MapasCulturais\i::__("Banco C6 S.A – C6 Bank - 336"),
                '473' => \MapasCulturais\i::__("Banco Caixa Geral Brasil S.A - 473"),
                '412' => \MapasCulturais\i::__("Banco Capital S.A - 412"),
                '40'  => \MapasCulturais\i::__("Banco Cargill S.A - 40"),
                '320' => \MapasCulturais\i::__("Banco Ccb Brasil S.A - 320"),
                '266' => \MapasCulturais\i::__("Banco Cedula S.A - 266"),
                '739' => \MapasCulturais\i::__("Banco Cetelem S.A - 739"),
                '233' => \MapasCulturais\i::__("Banco Cifra - 233"),
                '241' => \MapasCulturais\i::__("Banco Classico S.A - 241"),
                '95'  => \MapasCulturais\i::__("Banco Confidence De Câmbio S.A - 95"),
                '222' => \MapasCulturais\i::__("Banco Crédit Agricole Br S.A - 222"),
                '505' => \MapasCulturais\i::__("Banco Credit Suisse (Brl) S.A - 505"),
                '69'  => \MapasCulturais\i::__("Banco Crefisa S.A - 69"),
                '3'   => \MapasCulturais\i::__("Banco Da Amazonia S.A - 3"),
                '83'  => \MapasCulturais\i::__("Banco Da China Brasil S.A - 83"),
                '707' => \MapasCulturais\i::__("Banco Daycoval S.A - 707"),
                '70'  => \MapasCulturais\i::__("Banco De Brasília (Brb) - 70"),
                '335' => \MapasCulturais\i::__("Banco Digio S.A - 335"),
                '37'  => \MapasCulturais\i::__("Banco Do Estado Do Pará S.A - 37"),
                '196' => \MapasCulturais\i::__("Banco Fair Cc S.A - 196"),
                '265' => \MapasCulturais\i::__("Banco Fator S.A - 265"),
                '224' => \MapasCulturais\i::__("Banco Fibra S.A - 224"),
                '626' => \MapasCulturais\i::__("Banco Ficsa S.A - 626"),
                '94'  => \MapasCulturais\i::__("Banco Finaxis - 94"),
                '612' => \MapasCulturais\i::__("Banco Guanabara S.A - 612"),
                '12'  => \MapasCulturais\i::__("Banco Inbursa - 12"),
                '604' => \MapasCulturais\i::__("Banco Industrial Do Brasil S.A - 604"),
                '653' => \MapasCulturais\i::__("Banco Indusval S.A - 653"),
                '77'  => \MapasCulturais\i::__("Banco Inter S.A - 77"),
                '630' => \MapasCulturais\i::__("Banco Intercap S.A - 630"),
                '249' => \MapasCulturais\i::__("Banco Investcred Unibanco S.A - 249"),
                '184' => \MapasCulturais\i::__("Banco Itaú Bba S.A - 184"),
                '29'  => \MapasCulturais\i::__("Banco Itaú Consignado S.A - 29"),
                '479' => \MapasCulturais\i::__("Banco Itaubank S.A - 479"),
                '376' => \MapasCulturais\i::__("Banco J.P. Morgan S.A - 376"),
                '217' => \MapasCulturais\i::__("Banco John Deere S.A - 217"),
                '76'  => \MapasCulturais\i::__("Banco Kdb Brasil S.A. - 76"),
                '757' => \MapasCulturais\i::__("Banco Keb Hana Do Brasil S.A - 757"),
                '300' => \MapasCulturais\i::__("Banco La Nacion Argentina - 300"),
                '600' => \MapasCulturais\i::__("Banco Luso Brasileiro S.A - 600"),
                '243' => \MapasCulturais\i::__("Banco Máxima S.A - 243"),
                '389' => \MapasCulturais\i::__("Banco Mercantil Do Brasil S.A - 389"),
                '389' => \MapasCulturais\i::__("Banco Mercantil Do Brasil S.A. - 389"),
                '370' => \MapasCulturais\i::__("Banco Mizuho S.A - 370"),
                '746' => \MapasCulturais\i::__("Banco Modal S.A - 746"),
                '66'  => \MapasCulturais\i::__("Banco Morgan Stanley S.A - 66"),
                '456' => \MapasCulturais\i::__("Banco Mufg Brasil S.A - 456"),
                '169' => \MapasCulturais\i::__("Banco Olé Bonsucesso Consignado S.A - 169"),
                '111' => \MapasCulturais\i::__("Banco Oliveira Trust Dtvm S.A - 111"),
                '79'  => \MapasCulturais\i::__("Banco Original Do Agronegócio S.A - 79"),
                '712' => \MapasCulturais\i::__("Banco Ourinvest S.A - 712"),
                '623' => \MapasCulturais\i::__("Banco Pan - 623"),
                '611' => \MapasCulturais\i::__("Banco Paulista - 611"),
                '643' => \MapasCulturais\i::__("Banco Pine S.A - 643"),
                '747' => \MapasCulturais\i::__("Banco Rabobank Internacional Do Brasil S.A - 747"),
                '633' => \MapasCulturais\i::__("Banco Rendimento S.A - 633"),
                '494' => \MapasCulturais\i::__("Banco Rep Oriental Uruguay - 494"),
                '741' => \MapasCulturais\i::__("Banco Ribeirão Preto - 741"),
                '120' => \MapasCulturais\i::__("Banco Rodobens S.A - 120"),
                '743' => \MapasCulturais\i::__("Banco Semear S.A - 743"),
                '754' => \MapasCulturais\i::__("Banco Sistema - 754"),
                '366' => \MapasCulturais\i::__("Banco Societe Generale Brasil - 366"),
                '637' => \MapasCulturais\i::__("Banco Sofisa S.A (Sofisa Direto) - 637"),
                '464' => \MapasCulturais\i::__("Banco Sumitomo Mitsui Brasil S.A - 464"),
                '82'  => \MapasCulturais\i::__("Banco Topázio S.A - 82"),
                '634' => \MapasCulturais\i::__("Banco Triangulo S.A (Banco Triângulo) - 634"),
                '18'  => \MapasCulturais\i::__("Banco Tricury S.A - 18"),
                '655' => \MapasCulturais\i::__("Banco Votorantim S.A - 655"),
                '610' => \MapasCulturais\i::__("Banco Vr S.A - 610"),
                '119' => \MapasCulturais\i::__("Banco Western Union - 119"),
                '124' => \MapasCulturais\i::__("Banco Woori Bank Do Brasil S.A - 124"),
                '348' => \MapasCulturais\i::__("Banco Xp S/A - 348"),
                '756' => \MapasCulturais\i::__("Banco (Banco Cooperativo Do Brasil) - 756"),
                '21'  => \MapasCulturais\i::__("Banco Banestes S.A - 21"),
                '41'  => \MapasCulturais\i::__("Banrisul – Banco Do Estado Do Rio Grande Do Sul S.A - 41"),
                '268' => \MapasCulturais\i::__("Barigui Ch - 268"),
                '81'  => \MapasCulturais\i::__("Bbn Banco Brasileiro De Negocios S.A - 81"),
                '75'  => \MapasCulturais\i::__("Bco Abn Amro S.A - 75"),
                '213' => \MapasCulturais\i::__("Bco Arbi S.A - 213"),
                '24'  => \MapasCulturais\i::__("Bco Bandepe S.A - 24"),
                '74'  => \MapasCulturais\i::__("Bco. J.Safra S.A - 74"),
                '144' => \MapasCulturais\i::__("Bexs Banco De Cambio S.A. - 144"),
                '253' => \MapasCulturais\i::__("Bexs Cc S.A - 253"),
                '134' => \MapasCulturais\i::__("Bgc Liquidez Dtvm Ltda - 134"),
                '752' => \MapasCulturais\i::__("Bnp Paribas Brasil S.A - 752"),
                '17'  => \MapasCulturais\i::__("Bny Mellon Banco S.A - 17"),
                '755' => \MapasCulturais\i::__("Bofa Merrill Lynch Bm S.A - 755"),
                '301' => \MapasCulturais\i::__("Bpp Instituição De Pagamentos S.A - 301"),
                '126' => \MapasCulturais\i::__("Br Partners Bi - 126"),
                '125' => \MapasCulturais\i::__("Brasil Plural S.A Banco - 125"),
                '92'  => \MapasCulturais\i::__("Brk S.A - 92"),
                '173' => \MapasCulturais\i::__("Brl Trust Dtvm Sa - 173"),
                '142' => \MapasCulturais\i::__("Broker Brasil Cc Ltda - 142"),
                '292' => \MapasCulturais\i::__("Bs2 Distribuidora De Títulos E Investimentos - 292"),
                '11'  => \MapasCulturais\i::__("C.Suisse Hedging-Griffo Cv S.A (Credit Suisse) - 11"),
                '288' => \MapasCulturais\i::__("Carol Dtvm Ltda - 288"),
                '130' => \MapasCulturais\i::__("Caruana Scfi - 130"),
                '159' => \MapasCulturais\i::__("Casa Credito S.A - 159"),
                '97'  => \MapasCulturais\i::__("Ccc Noroeste Brasileiro Ltda - 97"),
                '16'  => \MapasCulturais\i::__("Ccm Desp Trâns Sc E Rs - 16"),
                '286' => \MapasCulturais\i::__("Ccr De Ouro - 286"),
                '279' => \MapasCulturais\i::__("Ccr De Primavera Do Leste - 279"),
                '273' => \MapasCulturais\i::__("Ccr De São Miguel Do Oeste - 273"),
                '89'  => \MapasCulturais\i::__("Ccr Reg Mogiana - 89"),
                '114' => \MapasCulturais\i::__("Central Cooperativa De Crédito No Estado Do Espírito Santo - 114"),
                '477' => \MapasCulturais\i::__("Citibank N.A - 477"),
                '180' => \MapasCulturais\i::__("Cm Capital Markets Cctvm Ltda - 180"),
                '127' => \MapasCulturais\i::__("Codepe Cvc S.A - 127"),
                '163' => \MapasCulturais\i::__("Commerzbank Brasil S.A Banco Múltiplo - 163"),
                '60'  => \MapasCulturais\i::__("Confidence Cc S.A - 60"),
                '85'  => \MapasCulturais\i::__("Coop Central Ailos - 85"),
                '98'  => \MapasCulturais\i::__("Credialiança Ccr - 98"),
                '10'  => \MapasCulturais\i::__("Credicoamo - 10"),
                '133' => \MapasCulturais\i::__("Cresol Confederação - 133"),
                '182' => \MapasCulturais\i::__("Dacasa Financeira S/A - 182"),
                '487' => \MapasCulturais\i::__("Deutsche Bank S.A Banco Alemão - 487"),
                '140' => \MapasCulturais\i::__("Easynvest – Título Cv S.A - 140"),
                '149' => \MapasCulturais\i::__("Facta S.A. Cfi - 149"),
                '285' => \MapasCulturais\i::__("Frente Cc Ltda - 285"),
                '278' => \MapasCulturais\i::__("Genial Investimentos Cvm S.A - 278"),
                '138' => \MapasCulturais\i::__("Get Money Cc Ltda - 138"),
                '64'  => \MapasCulturais\i::__("Goldman Sachs Do Brasil Bm S.A - 64"),
                '177' => \MapasCulturais\i::__("Guide - 177"),
                '146' => \MapasCulturais\i::__("Guitta Cc Ltda - 146"),
                '78'  => \MapasCulturais\i::__("Haitong Bi Do Brasil S.A - 78"),
                '62'  => \MapasCulturais\i::__("Hipercard Bm S.A - 62"),
                '189' => \MapasCulturais\i::__("Hs Financeira - 189"),
                '269' => \MapasCulturais\i::__("Hsbc Banco De Investimento - 269"),
                '271' => \MapasCulturais\i::__("Ib Cctvm Ltda - 271"),
                '157' => \MapasCulturais\i::__("Icap Do Brasil Ctvm Ltda - 157"),
                '132' => \MapasCulturais\i::__("Icbc Do Brasil Bm S.A - 132"),
                '492' => \MapasCulturais\i::__("Ing Bank N.V - 492"),
                '139' => \MapasCulturais\i::__("Intesa Sanpaolo Brasil S.A - 139"),
                '652' => \MapasCulturais\i::__("Itaú Unibanco Holding Bm S.A - 652"),
                '488' => \MapasCulturais\i::__("Jpmorgan Chase Bank - 488"),
                '399' => \MapasCulturais\i::__("Kirton Bank - 399"),
                '495' => \MapasCulturais\i::__("La Provincia Buenos Aires Banco - 495"),
                '293' => \MapasCulturais\i::__("Lastro Rdv Dtvm Ltda - 293"),
                '105' => \MapasCulturais\i::__("Lecca Cfi S.A - 105"),
                '145' => \MapasCulturais\i::__("Levycam Ccv Ltda - 145"),
                '113' => \MapasCulturais\i::__("Magliano S.A - 113"),
                '128' => \MapasCulturais\i::__("Ms Bank S.A Banco De Câmbio - 128"),
                '137' => \MapasCulturais\i::__("Multimoney Cc Ltda - 137"),
                '14'  => \MapasCulturais\i::__("Natixis Brasil S.A - 14"),
                '655' => \MapasCulturais\i::__("Neon Pagamentos S.A (Mesmo Código Do Banco Votorantim) - 655"),
                '237' => \MapasCulturais\i::__("Next Bank (Mesmo Código Do Bradesco) - 237"),
                '191' => \MapasCulturais\i::__("Nova Futura Ctvm Ltda - 191"),
                '753' => \MapasCulturais\i::__("Novo Banco Continental S.A Bm - 753"),
                '613' => \MapasCulturais\i::__("Omni Banco S.A - 613"),
                '254' => \MapasCulturais\i::__("Parana Banco S.A - 254"),
                '194' => \MapasCulturais\i::__("Parmetal Dtvm Ltda - 194"),
                '174' => \MapasCulturais\i::__("Pernambucanas Financ S.A - 174"),
                '100' => \MapasCulturais\i::__("Planner Corretora De Valores S.A - 100"),
                '93'  => \MapasCulturais\i::__("Pólocred Scmepp Ltda - 93"),
                '108' => \MapasCulturais\i::__("Portocred S.A - 108"),
                '283' => \MapasCulturais\i::__("Rb Capital Investimentos Dtvm Ltda - 283"),
                '101' => \MapasCulturais\i::__("Renascenca Dtvm Ltda - 101"),
                '270' => \MapasCulturais\i::__("Sagitur Cc Ltda - 270"),
                '751' => \MapasCulturais\i::__("Scotiabank Brasil - 751"),
                '276' => \MapasCulturais\i::__("Senff S.A - 276"),
                '545' => \MapasCulturais\i::__("Senso Ccvm S.A - 545"),
                '190' => \MapasCulturais\i::__("Servicoop - 190"),
                '748' => \MapasCulturais\i::__("Sicredi S.A - 748"),
                '183' => \MapasCulturais\i::__("Socred S.A - 183"),
                '118' => \MapasCulturais\i::__("Standard Chartered Bi S.A - 118"),
                '197' => \MapasCulturais\i::__("Stone Pagamentos S.A - 197"),
                '340' => \MapasCulturais\i::__("Super Pagamentos S/A (Superdital) - 340"),
                '143' => \MapasCulturais\i::__("Treviso Cc S.A - 143"),
                '131' => \MapasCulturais\i::__("Tullett Prebon Brasil Cvc Ltda - 131"),
                '129' => \MapasCulturais\i::__("Ubs Brasil Bi S.A - 129"),
                '15'  => \MapasCulturais\i::__("Ubs Brasil Cctvm S.A - 15"),
                '91'  => \MapasCulturais\i::__("Unicred Central Rs - 91"),
                '136' => \MapasCulturais\i::__("Unicred Cooperativa - 136"),
                '99'  => \MapasCulturais\i::__("Uniprime Central Ccc Ltda - 99"),
                '84'  => \MapasCulturais\i::__("Uniprime Norte Do Paraná - 84"),
                '298' => \MapasCulturais\i::__("Vips Cc Ltda - 298"),
                '310' => \MapasCulturais\i::__("Vortx Dtvm Ltda - 310"),
                '102' => \MapasCulturais\i::__("Xp Investimentos S.A - 102"),
            ),
        ),
        'payment_bank_dv_branch' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Dígito verificador da agéncia bancária'),
            'type' => 'text',
            'dafault' => '[]',
        ),
        'payment_bank_dv_account_number' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('Dígito verificador da conta bancária'),
            'type' => 'text',
            'dafault' => '[]',
        ),
    ),
    'items' => array(
        1 => array( 'name' => \MapasCulturais\i::__('Individual' )),
        2 => array( 'name' => \MapasCulturais\i::__('Coletivo') ),
    )
);
