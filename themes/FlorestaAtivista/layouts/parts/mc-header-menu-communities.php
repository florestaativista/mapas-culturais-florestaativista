<?php

use MapasCulturais\i;

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

?>

<?php $this->applyTemplateHook('mc-header-menu-communities', 'before') ?>
<li>
    <?php $this->applyTemplateHook('mc-header-menu-communities', 'begin') ?>
    <a href="<?= $app->createUrl('search', 'communities') ?>" class="mc-header-menu--item communities">
        <span class="icon"> <mc-icon name="hand"> </span>
        <p class="label"> <?php i::_e('Comunidades') ?> </p>
    </a>
    <?php $this->applyTemplateHook('mc-header-menu-communities', 'end') ?>
</li>
<?php $this->applyTemplateHook('mc-header-menu-communities', 'after') ?>