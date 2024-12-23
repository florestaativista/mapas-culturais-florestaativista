<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    mc-link
');
?>
<div class="home-entities">
    
    <div class="home-entities__content">
        <div class="home-entities__content--header">
            <label class="title">
                <?= $this->text('title', i::__('Aqui você encontra as informações da cultura de sua região!')) ?>
            </label>
        </div>

        <div class="home-entities__content--cards">
            <mc-link route="search/opportunities">
                <div v-if="global.enabledEntities.opportunities" class="card">
                    <div class="card__left">
                        <div class="card__left--content">
                            <div class="card__left--content-icon opportunity__background">
                                <mc-icon name="opportunity"></mc-icon>
                            </div>                        
                            <div class="card__left--content-title">
                                <label class="title">
                                    <?= i::__('Oportunidades') ?>
                                </label>
                            </div>
                        </div>
                        <div class="card__left--img">
                            <img :src="subsite?.files?.opportunityBanner ? subsite?.files?.opportunityBanner?.url : '<?php $this->asset($app->config['module.home']['home-opportunities']) ?>'" />
                        </div>
                    </div>
                    <div class="card__right">
                        <p><?= $this->text('opportunities', i::__('Faça a sua inscrição ou acesse o resultado de diversas convocatórias como editais, oficinas, prêmios e concursos. Você também pode criar o seu próprio formulário e divulgar uma oportunidade para outros agentes culturais.')) ?></p>
                        <mc-link route="search/opportunities" class="button button--icon button--sm opportunity__color">
                            <?= i::__('Ver todos')?>
                            <mc-icon name="access"></mc-icon>
                        </mc-link>
                    </div>
                </div>
            </mc-link>

            <a href="https://florestaativista.org/" target="_blank">
                <div class="card">
                    <div class="card__left">
                        <div class="card__left--content">
                            <div class="card__left--content-icon opportunity__background">
                                <mc-icon name="eye-view"></mc-icon>
                            </div>                        
                            <div class="card__left--content-title">
                                <label class="title">
                                    <?= i::__('Notícias') ?>
                                </label>
                            </div>
                        </div>
                        <div class="card__left--img">
                            <img src="<?php $this->asset('img/home/home-entities/news.png'); ?>" />
                        </div>
                    </div>
                    <div class="card__right">
                        <p><?= i::__('Acesse o portal que te abre as portas para um universo de atualizações sobre comunidades em todo país. Confira a curadoria das principais histórias e notícias da nossa rede e fique sabendo de tudo que está rolando e os projetos em desenvolvimento.') ?></p>
                        <a href="https://florestaativista.org/" target="_blank" class="button button--icon button--sm opportunity__color">
                            <?= i::__('Acessar')?>
                            <mc-icon name="external"></mc-icon>
                        </a>
                    </div>
                </div>
            </a>
            
            <mc-link route="search/events">
                <div v-if="global.enabledEntities.events" class="card">
                    <div class="card__left">
                        <div class="card__left--content">
                            <div class="card__left--content-icon event__background">
                                <mc-icon name="event"></mc-icon>
                            </div>                        
                            <div class="card__left--content-title">
                                <label class="title">
                                    <?= i::__('Agenda') ?>
                                </label>
                            </div>
                        </div>
                        <div class="card__left--img">
                            <img :src="subsite?.files?.eventBanner ? subsite?.files?.eventBanner?.url : '<?php $this->asset($app->config['module.home']['home-events']) ?>'" />
                        </div>
                    </div>
                    <div class="card__right">
                        <p><?= $this->text('events', i::__('Você pode pesquisar eventos culturais nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente. (Mais uma linha aqui pra fechar cinco linhas)')) ?></p>
                        <mc-link route="search/events" class="button button--icon button--sm event__color">
                            <?= i::__('Ver todos')?>
                            <mc-icon name="access"></mc-icon>
                        </mc-link>
                    </div>
                </div>
            </mc-link>

            <mc-link route="search/spaces">
                <div v-if="global.enabledEntities.spaces" class="card">
                    <div class="card__left">
                        <div class="card__left--content">
                            <div class="card__left--content-icon space__background">
                                <mc-icon name="space"></mc-icon>
                            </div>                        
                            <div class="card__left--content-title">
                                <label class="title">
                                    <?= i::__('Espaços') ?>
                                </label>
                            </div>
                        </div>
                        <div class="card__left--img">
                            <img :src="subsite?.files?.spaceBanner ? subsite?.files?.spaceBanner?.url : '<?php $this->asset($app->config['module.home']['home-spaces']) ?>'" />
                        </div>
                    </div>
                    <div class="card__right">
                        <p><?= $this->text('spaces', i::__('Procure por espaços culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades artísticas e culturais.')) ?></p>
                        <mc-link route="search/spaces" class="button button--icon button--sm space__color">
                            <?= i::__('Ver todos')?>
                            <mc-icon name="access"></mc-icon>
                        </mc-link>
                    </div>
                </div>
            </mc-link>

            <mc-link route="search/agents">
                <div v-if="global.enabledEntities.agents" class="card">
                    <div class="card__left">
                        <div class="card__left--content">
                            <div class="card__left--content-icon agent__background">
                                <mc-icon name="agent-2"></mc-icon>
                            </div>                        
                            <div class="card__left--content-title">
                                <label class="title">
                                    <?= i::__('Agentes') ?>
                                </label>
                            </div>
                        </div>
                        <div class="card__left--img">
                        <img src="<?php $this->asset('img/home/home-entities/profiles.png'); ?>" />
                        </div>
                    </div>
                    <div class="card__right">
                        <p><?= $this->text('agents', i::__('Neste espaço, estão registrados artistas, gestores e produtores; uma rede de atores envolvidos na cena cultural da região. Você pode cadastrar um ou mais agentes (grupos, coletivos, bandas instituições, empresas, etc.), (...)')) ?></p>
                        <mc-link route="search/agents" class="button button--icon button--sm agent__color">
                            <?= i::__('Ver todos')?>
                            <mc-icon name="access"></mc-icon>
                        </mc-link>
                    </div>
                </div>
            </mc-link>
        </div>
    </div>
</div>
