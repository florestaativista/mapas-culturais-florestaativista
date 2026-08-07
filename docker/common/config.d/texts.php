<?php

// Este arquivo é carregado (em conf/config.php) antes da inicialização do
// tema, quando o catálogo de tradução do tema (translations/{locale}.po)
// ainda não foi mesclado ao domínio 'default'. Por isso as strings abaixo
// não usam i::__() — elas são resolvidas aqui mesmo, direto pelo $lcode
// já detectado em load-translation.php, escapando desse problema de ordem.
$lcode = $lcode ?? 'pt_BR';

$t = function (array $variants) use ($lcode) {
    return $variants[$lcode] ?? $variants['pt_BR'];
};

return [
    "text:home-header.title" => $t([
        'pt_BR' => 'Olá, você está na Floresta Ativista!',
        'es_ES' => '¡Hola, usted está en Floresta Ativista!',
        'en_US' => 'Hello, you are on Floresta Ativista!',
    ]),
    "text:home-header.description" => $t([
        'pt_BR' => 'A Floresta Ativista é uma plataforma que reúne um ecossistema ativista de coletivos, redes, iniciativas e pessoas com vontade de construir e estar em comunidades. Um lugar onde os mais diferentes temas, lutas e causas se encontram e se misturam. Um terreno fértil de onde brotam agendas comuns e projetos que fortalecem as principais LUTAS CIVILIZATÓRIAS da nossa geração. É a partir daqui que iremos mapear projetos e semear conexões em todo país.',
        'es_ES' => 'Floresta Ativista es una plataforma que reúne un ecosistema activista de colectivos, redes, iniciativas y personas con voluntad de construir y estar en comunidades. Un lugar donde los más diferentes temas, luchas y causas se encuentran y se mezclan. Un terreno fértil de donde brotan agendas comunes y proyectos que fortalecen las principales LUCHAS CIVILIZATORIAS de nuestra generación. Es a partir de aquí que vamos a mapear proyectos y sembrar conexiones en todo el país.',
        'en_US' => 'Floresta Ativista is a platform that brings together an activist ecosystem of collectives, networks, initiatives and people willing to build and be part of communities. A place where the most different themes, struggles and causes meet and mix. A fertile ground from which common agendas and projects sprout, strengthening the main CIVILIZATIONAL STRUGGLES of our generation. It is from here that we will map projects and sow connections throughout the country.',
    ]),
    "text:home-opportunities.description" => $t([
        'pt_BR' => 'Cadastre-se, participe de editais e oportunidades e concorra aos benefícios.',
        'es_ES' => 'Regístrese, participe en convocatorias y oportunidades y compita por los beneficios.',
        'en_US' => 'Sign up, take part in calls for proposals and opportunities, and compete for benefits.',
    ]),
    "text:home-entities.opportunities" => $t([
        'pt_BR' => 'É aqui que você pode acessar as inúmeras possibilidades de conexão com a Floresta Ativista. Confira todas atividades com inscrição, como oficinas, aulões, editais, convocatórias, eventos e demais oportunidades abertas em nosso sistema. Você também pode criar o seu próprio formulário e divulgar sua oportunidade para outros agentes da floresta.',
        'es_ES' => 'Aquí es donde puede acceder a las innumerables posibilidades de conexión con Floresta Ativista. Consulte todas las actividades con inscripción, como talleres, clases magistrales, convocatorias, eventos y demás oportunidades abiertas en nuestro sistema. También puede crear su propio formulario y difundir su oportunidad para otros perfiles de la floresta.',
        'en_US' => 'This is where you can access the countless possibilities for connecting with Floresta Ativista. Check out all activities with registration, such as workshops, masterclasses, calls for proposals, events and other opportunities open in our system. You can also create your own form and publicize your opportunity to other profiles of the floresta.',
    ]),
    "text:home-entities.events" => $t([
        'pt_BR' => 'Quer saber quais os eventos culturais e agendas ativistas que estão ocorrendo em sua região? Basta fazer uma pesquisa a partir das ferramentas de busca. Além disso, como usuário cadastrado, você pode incluir seus eventos e agendas na plataforma e divulgá-los gratuitamente!',
        'es_ES' => '¿Quiere saber qué eventos culturales y agendas activistas están ocurriendo en su región? Solo tiene que hacer una búsqueda con las herramientas de búsqueda. Además, como usuario registrado, ¡puede incluir sus eventos y agendas en la plataforma y difundirlos gratuitamente!',
        'en_US' => 'Want to know which cultural events and activist agendas are happening in your region? Just search using the search tools. Also, as a registered user, you can add your events and agendas to the platform and promote them for free!',
    ]),
    "text:home-entities.spaces" => $t([
        'pt_BR' => 'Você pode procurar por espaços e empreendimentos culturais e ativistas incluídos na plataforma a partir dos campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades.',
        'es_ES' => 'Puede buscar espacios y emprendimientos culturales y activistas incluidos en la plataforma a partir de los campos de búsqueda combinada que ayudan a precisar su búsqueda. Registre también los espacios donde desarrolla sus actividades.',
        'en_US' => 'You can search for cultural and activist spaces and ventures included on the platform using the combined search fields that help refine your search. You can also register the spaces where you carry out your activities.',
    ]),
    "text:home-entities.agents" => $t([
        'pt_BR' => 'Aqui você pode encontrar pessoas com interesse e atuação nas áreas de arte, cultura, comunicação e ativismos. É uma rede de pessoas envolvidas na cena cultural e ativista da sua região. Você também pode realizar o seu cadastro, bem como de seus coletivos, bandas, instituições e empresas das quais faça parte.',
        'es_ES' => 'Aquí puede encontrar personas con interés y actuación en las áreas de arte, cultura, comunicación y activismos. Es una red de personas involucradas en la escena cultural y activista de su región. También puede realizar su registro, así como el de sus colectivos, bandas, instituciones y empresas de las que forme parte.',
        'en_US' => 'Here you can find people with interest and involvement in the areas of art, culture, communication and activism. It is a network of people involved in the cultural and activist scene of your region. You can also register yourself, as well as your collectives, bands, institutions and companies you are part of.',
    ]),
    "text:home-entities.projects" => $t([
        'pt_BR' => 'Este é o local onde você pode encontrar leis de fomento, mostras, convocatórias e editais criados, além de diversas iniciativas cadastradas pelos usuários da plataforma.',
        'es_ES' => 'Este es el lugar donde puede encontrar leyes de fomento, muestras, convocatorias y editales creados, además de diversas iniciativas registradas por los usuarios de la plataforma.',
        'en_US' => 'This is the place where you can find funding laws, exhibitions, calls for proposals and open notices, as well as various initiatives registered by platform users.',
    ]),
    "text:home-feature.description" => $t([
        'pt_BR' => 'Confira os últimos destaques de cada uma das áreas.',
        'es_ES' => 'Consulte las últimas novedades destacadas de cada una de las áreas.',
        'en_US' => 'Check out the latest highlights from each area.',
    ]),
    "text:home-register.title" => $t([
        'pt_BR' => 'Crie sua conta e apareça no mapa!',
        'es_ES' => '¡Cree su cuenta y aparezca en el mapa!',
        'en_US' => 'Create your account and show up on the map!',
    ]),
    "text:home-register.description" => $t([
        'pt_BR' => 'Colabore com a ferramenta livre, colaborativa e interativa do cenário cultural e ativista',
        'es_ES' => 'Colabore con la herramienta libre, colaborativa e interactiva de la escena cultural y activista',
        'en_US' => 'Collaborate with the free, collaborative and interactive tool for the cultural and activist scene',
    ]),
    'text:home-developers.description' => $t([
        'pt_BR' => 'A Floresta Ativista é um software livre criado na parceria entre a hacklab/, o Fora do Eixo, a Mídia NINJA, a Rede Livre e coletivos que investem na plataforma. Você pode contribuir para o seu desenvolvimento através do GitHub.',
        'es_ES' => 'Floresta Ativista es un software libre creado en la alianza entre hacklab/, Fora do Eixo, Mídia NINJA, Rede Livre y colectivos que invierten en la plataforma. Usted puede contribuir a su desarrollo a través de GitHub.',
        'en_US' => 'Floresta Ativista is free software created in partnership between hacklab/, Fora do Eixo, Mídia NINJA, Rede Livre and collectives that invest in the platform. You can contribute to its development via GitHub.',
    ]),
    "text:home-map.description" => $t([
        'pt_BR' => 'Os agentes, os espaços e os eventos cadastrados contam com a geolocalização de seus endereços, encontre-os aqui:',
        'es_ES' => 'Los perfiles, los espacios y los eventos registrados cuentan con la geolocalización de sus direcciones, encuéntrelos aquí:',
        'en_US' => 'The profiles, spaces and events registered have the geolocation of their addresses, find them here:',
    ]),
];
