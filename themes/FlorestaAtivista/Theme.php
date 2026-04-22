<?php
namespace FlorestaAtivista;

use MapasCulturais\App;


// class Theme extends \Subsite\Theme {
class Theme extends \MapasCulturais\Themes\BaseV2\Theme {
 
    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {
        parent::_init();

        $app = App::i();

        $this->enqueueStyle("app-v2", "home-logo-strip", "css/home-logo-strip.css");

        // Cria endpoint para carregar as comunidades
        $app->hook('GET(search.communities)', function() use ($app) {
            $this->render('communities');
        });

        // Insere o menu comunidades no header
        $app->hook('template(<<*>>.<<*>>.mc-header-menu-opportunity):after', function() {
            $this->part('mc-header-menu-communities');
        });

        // Insere o menu notícias no header
        $app->hook('template(<<*>>.<<*>>.mc-header-menu-opportunity):before', function() {
            $this->part('mc-header-menu-noticies');
        });
        
        // Insere o ícone comunidades na lista de icones padrão
        $app->hook('component(mc-icon).iconset', function(&$iconset) {
            $iconset['hand'] = 'ion:hand-right';
        });

        // Define filtro inicial para buscas de agentes (apenas com avatar)
        $app->hook('search-agents-initial-pseudo-query', function (&$initial_pseudo_query) {
            $initial_pseudo_query['avatar'] = 1;
        });

        // Adiciona checkbox de filtro por avatar na busca de agentes
        $app->hook('template(search.agents.search-filter-agent):begin', function() {
            if ($this->controller->action === 'agents') {
                $this->part('search-filter-avatar');
            }
        });

        // Alterar filtro da página de pesquisa de comunidades
        $app->hook("component(search-filter-agent):before", function(&$data, &$template) {
            if($this->controller->action === "communities") {
                $template = "empty";
                $this->part("search-filter-communities");
            }
        });

        // Insere a seção de afluentes na home
        $app->hook("component(home-entities):after", function(){
            $this->part("home-logo-strip");
        });

        $this->assetManager->publishFolder('custom-fonts');
        $app->hook('mapasculturais.body:after', function() use ($app) {
            $this->part('theme-css');
        });


        $app->hook("app.init:after", function () use ($app) {
            $agent_class = 'MapasCulturais\Entities\Agent';
            $required_all_types = $app->config['agent_required_fields'] ?? [];
            $required_type_1 = $app->config['agent1_required_fields'] ?? [];

            foreach ($app->getRegisteredEntityTypes($agent_class) as $type) {
                if (!$type) {
                    continue;
                }

                $metadata = $app->getRegisteredMetadata($agent_class, $type->id);
                $required_fields = $required_all_types;

                if ((int) $type->id === 1) {
                    foreach ($required_type_1 as $field => $is_required) {
                        $base = $required_fields[$field] ?? false;
                        $required_fields[$field] = (bool) $base || (bool) $is_required;
                    }
                }

                foreach ($required_fields as $field => $is_required) {
                    if (isset($metadata[$field])) {
                        $metadata[$field]->is_required = (bool) $is_required;
                        if ((bool) $is_required) {
                            $metadata[$field]->is_required_error_message = \MapasCulturais\i::__('Este campo é obrigatório.');
                        } else {
                            $metadata[$field]->is_required_error_message = '';
                        }
                    }
                }
            }
        });
    }
}