<?php
use MapasCulturais\i;

return array(
    1 => array(
        'slug' => 'tag',
        'description' => i::__('Tag'),
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project',
            'MapasCulturais\Entities\Opportunity',
        )
    ),

    2 => array(
        'slug' => 'area',
        'description' => i::__('Área de Atuação'),
        'required' => i::__("Você deve informar ao menos uma área de atuação"),
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent'
        ),
        'restricted_terms' => array(
            i::__('Artes Circenses'),
            i::__('Antropologia'),
            i::__('Arquitetura-Urbanismo'),
            i::__('Arte de Rua'),
            i::__('Arte Digital'),
            i::__('Artes Visuais'),
            i::__('Artesanato'),
            i::__('Audiovisual e Cinema'),
            i::__('Comunicação'),
            i::__('Clima'),
            i::__('Cultura Digital e Tecnologia'),
            i::__('Geopolitica'),
            i::__('Povos Indígena'),
            i::__('LGBTQIAP+'),
            i::__('Negritudes'),
            i::__('Culturas'),
            i::__('Dança'),
            i::__('Design'),
            i::__('Direito Autoral'),
            i::__('Economias'),
            i::__('Educação e Formação'),
            i::__('Esporte'),
            i::__('História e Filosofia'),
            i::__('Fotografia'),
            i::__('Alimentação'),
            i::__('Gestão Cultural'),
            i::__('Games'),
            i::__('Jornalismo'),
            i::__('Leitura e Literatura'),
            i::__('Meio Ambiente'),
            i::__('Redes Sociais'),
            i::__('Moda'),
            i::__('Museu'),
            i::__('Música'),
            i::__('Novas Mídias'),
            i::__('Produção Cultural'),
            i::__('Rádio'),
            i::__('Saúde e Bem Estar'),
            i::__('Teatro'),
            i::__('Televisão'),
            i::__('Turismo'),
            i::__('Agroecologia'),
            i::__('Astronomia e Ufologia'),
            i::__('Ciencia'),
            i::__('Ciências Sociais'),
            i::__('Corpos dissidentes'),
            i::__('Direitos Humanos'),
            i::__('Juventude'),
            i::__('Movimento PCD'),
            i::__('Mulher e Feminismos'),
            i::__('Outros'),
            i::__('Podcast'),
            i::__('Política'),
            i::__('Veganismo'),
        )
    ),

    3 => array(
        'slug' => 'linguagem',
        'description' => i::__('Linguagem'),
        'required' => i::__("Você deve informar ao menos uma linguagem"),
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => array(
            i::__('Artes Circenses'),
            i::__('Antropologia'),
            i::__('Arquitetura-Urbanismo'),
            i::__('Arte de Rua'),
            i::__('Arte Digital'),
            i::__('Artes Visuais'),
            i::__('Artesanato'),
            i::__('Audiovisual e Cinema'),
            i::__('Comunicação'),
            i::__('Cultura Digital e Tecnologia'),
            i::__('Clima'),
            i::__('Geopolitica'),
            i::__('Povos Indígena'),
            i::__('LGBTQIAP+'),
            i::__('Negritudes'),
            i::__('Culturas'),
            i::__('Dança'),
            i::__('Design'),
            i::__('Direito Autoral'),
            i::__('Economias'),
            i::__('Educação e Formação'),
            i::__('Esporte'),
            i::__('História e Filosofia'),
            i::__('Fotografia'),
            i::__('Alimentação'),
            i::__('Gestão Cultural'),
            i::__('Games'),
            i::__('Jornalismo'),
            i::__('Leitura e Literatura'),
            i::__('Meio Ambiente'),
            i::__('Redes Sociais'),
            i::__('Moda'),
            i::__('Museu'),
            i::__('Música'),
            i::__('Novas Mídias'),
            i::__('Produção Cultural'),
            i::__('Rádio'),
            i::__('Saúde e Bem Estar'),
            i::__('Teatro'),
            i::__('Televisão'),
            i::__('Turismo'),
            i::__('Agroecologia'),
            i::__('Astronomia e Ufologia'),
            i::__('Ciencia'),
            i::__('Ciências Sociais'),
            i::__('Corpos dissidentes'),
            i::__('Direitos Humanos'),
            i::__('Juventude'),
            i::__('Movimento PCD'),
            i::__('Mulher e Feminismos'),
            i::__('Outros'),
            i::__('Podcast'),
            i::__('Política'),
            i::__('Veganismo'),
        )
    ),
    // 4 => array(
    //     'slug' => 'funcao',
    //     'description' => i::__('Função'),
    //     'entities' => array(
    //         'MapasCulturais\Entities\Agent'
    //     ),
    //     'restricted_terms' => array(
    //         i::__("Aderecista"),
    //         i::__("Adestrador(a) para Artes Cênicas"),
    //         i::__("Afinador de Instrumentos"),
    //         i::__("Ajudante de Câmera"),
    //         i::__("Ajudante de Locação"),
    //         i::__("Ajudante de Objetos"),
    //         i::__("Ajudante de Produção"),
    //         i::__("Amestrador(a)"),
    //         i::__("Aplicador(a) de sign"),
    //         i::__("Armeiro(a)"),
    //         i::__("Assessor(a) de Comunicação"),
    //         i::__("Assistente Administrativo"),
    //         i::__("Assistente de Arte"),
    //         i::__("Assistente de Artista Gráfico"),
    //         i::__("Assistente de Backstage"),
    //         i::__("Assistente de Camarim"),
    //         i::__("Assistente de Câmera"),
    //         i::__("Assistente de Cenotécnica"),
    //         i::__("Assistente de Continuidade"),
    //         i::__("Assistente de Controller"),
    //         i::__("Assistente de Criação Artística"),
    //         i::__("Assistente de Edição"),
    //         i::__("Assistente de Edição de Som"),
    //         i::__("Assistente de Eletricista"),
    //         i::__("Assistente de Figurino"),
    //         i::__("Assistente de Ilha de Edição"),
    //         i::__("Assistente de Maquiagem"),
    //         i::__("Assistente de Maquinaria"),
    //         i::__("Assistente de Montagem"),
    //         i::__("Assistente de Objetos"),
    //         i::__("Assistente de Pós Produção"),
    //         i::__("Assistente de Produção (Base ou Set"),
    //         i::__("Assistente de Produção de Arte"),
    //         i::__("Assistente de Produção de Elenco"),
    //         i::__("Assistente de Produção de Locação"),
    //         i::__("Assistente de Produção em geral"),
    //         i::__("Assistente de Produção Musical"),
    //         i::__("Assistente de Roteiro"),
    //         i::__("Assistente de Som"),
    //         i::__("Assistente de Transporte"),
    //         i::__("Assistente Mixador(a)"),
    //         i::__("Audiodescritor(a)"),
    //         i::__("Barreira"),
    //         i::__("Bilheteiro(a)"),
    //         i::__("Bordadeiro(a)"),
    //         i::__("Cabeleireiro"),
    //         i::__("Cabeleireiro(a)"),
    //         i::__("Camareiro(a)"),
    //         i::__("Capataz(a) - Montador(a)"),
    //         i::__("Carpinteiro(a)"),
    //         i::__("Cenógrafo(a)"),
    //         i::__("Cenotécnico(a)"),
    //         i::__("Chefe de Maquinária"),
    //         i::__("Cinegrafista"),
    //         i::__("Colorista"),
    //         i::__("Colorista Assistente"),
    //         i::__("Consultor de Imagem"),
    //         i::__("Consultor em Legendagem"),
    //         i::__("Consultor(a) em Audiodescrição"),
    //         i::__("Consultor(a) em Braille"),
    //         i::__("Consultor(a) em Libras"),
    //         i::__("Continuista"),
    //         i::__("Contrarregra"),
    //         i::__("Coolhunter"),
    //         i::__("Coordenador(a) de Palco"),
    //         i::__("Cortineiro(a)"),
    //         i::__("Costureiro(a)"),
    //         i::__("Design de Montagem"),
    //         i::__("Diagramador(a)"),
    //         i::__("Digitalizador(a)"),
    //         i::__("Diretor(a) de Palco"),
    //         i::__("Editor de Partituras"),
    //         i::__("Editor(a)"),
    //         i::__("Editor(a) de Som"),
    //         i::__("Eletricista"),
    //         i::__("Eletricista Chefe"),
    //         i::__("Engenheiro(a) de Som"),
    //         i::__("Ensaiador(a)"),
    //         i::__("Estampador"),
    //         i::__("Figurinista"),
    //         i::__("Foley"),
    //         i::__("Guia-intérprete de língua de sinais"),
    //         i::__("Iluminador"),
    //         i::__("Iluminador(a)"),
    //         i::__("Legendista ou Tradutor(a)"),
    //         i::__("Logger"),
    //         i::__("Luthier"),
    //         i::__("Maquiador"),
    //         i::__("Maquiador(a)"),
    //         i::__("Maquinista"),
    //         i::__("Marcador(a) de Cena"),
    //         i::__("Mediador(a)"),
    //         i::__("Mestre(a) de Pista"),
    //         i::__("Montador(a)"),
    //         i::__("Montador(a) de Palco"),
    //         i::__("Motorista de Audiovisual"),
    //         i::__("Músico-Musicista"),
    //         i::__("Operador(a) de Luz"),
    //         i::__("Operador(a) de Som"),
    //         i::__("Outra função técnica"),
    //         i::__("Passador (a)"),
    //         i::__("Peruqueiro"),
    //         i::__("Peruqueiro(a)"),
    //         i::__("Pilotista"),
    //         i::__("Produtor de Casting"),
    //         i::__("Produtor(a) de Casting/Booker"),
    //         i::__("Produtor(a) Fonográfico"),
    //         i::__("Radialista"),
    //         i::__("Roadie"),
    //         i::__("Sapateiro"),
    //         i::__("Secretario(a) de Frente"),
    //         i::__("Secretário(a) Teatral"),
    //         i::__("Serigrafista"),
    //         i::__("Sonoplasta"),
    //         i::__("Tatuador"),
    //         i::__("Técnico de Luz"),
    //         i::__("Técnico(a) Contábil"),
    //         i::__("Técnico(a) de Estúdio"),
    //         i::__("Técnico(a) de Luz"),
    //         i::__("Técnico(a) de Palco"),
    //         i::__("Técnico(a) de Som"),
    //         i::__("Técnico(a) de Som Direto"),
    //         i::__("Tradutor(a) ou Intérprete de Libras"),
    //         i::__("Transcritor ou Revisor em Braille"),
    //         i::__("Visagista"),
    //         i::__("Visual Merchandiser"),
    //         i::__("Vitrinista"),
    //     )
    // )
);
