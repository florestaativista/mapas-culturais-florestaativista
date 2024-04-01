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
        
        // Insere o ícone comunidades na lista de icones padrão
        $app->hook('component(mc-icon).iconset', function(&$iconset) {
            $iconset['hand'] = 'ion:hand-right';
        });

        // Insere a seção de afluentes na home
        $app->hook("component(home-entities):after", function(){
            $this->part("home-logo-strip");
        });

        $this->assetManager->publishFolder('custom-fonts');
        $app->hook('mapasculturais.body:after', function() use ($app) {
            $this->part('theme-css');
        });
         // Manifest do five icon
        $app->hook('GET(site.webmanifest)', function() use ($app) {
            /** @var \MapasCulturais\Controller $this */
            $this->json([
                'icons' => [
                    [ 'src' => $app->view->asset('img/favicon-192x192.png', false), 'type' => 'image/png', 'sizes' => '192x192' ],
                    [ 'src' => $app->view->asset('img/favicon-515x515.png', false), 'type' => 'image/png', 'sizes' => '512x512' ],
                ],
            ]);
        });
    }
}