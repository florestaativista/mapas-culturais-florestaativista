<?php

use MapasCulturais\i;

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

?>

<?php $this->applyTemplateHook('mc-header-menu-noticies', 'before') ?>
<li>
    <?php $this->applyTemplateHook('mc-header-menu-noticies', 'begin') ?>
    <a href="<?= $app->config['app.menu.noticies.link'] ?>" class="mc-header-menu--item agent">
        <span class="icon"> <mc-icon name="eye-view"> </span>
        <p class="label"> <?php i::_e('Noticías') ?> </p>
    </a>
    <?php $this->applyTemplateHook('mc-header-menu-noticies', 'end') ?>
</li>
<?php $this->applyTemplateHook('mc-header-menu-noticies', 'after') ?>