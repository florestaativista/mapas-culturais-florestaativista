<?php

use MapasCulturais\i;

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */
$this->import('
    mc-avatar
    mc-icon
');

?>
<div class="home-logo-strip">
    <div v-if="homeLogoStripActive" class="home-logo-strip__title">
        <span class="logo-strip-icon"><mc-icon name="hand"></mc-icon></span>
        <label class="home-logo-strip--title"><?= $this->text('title', i::__('Comunidades')) ?></label>
    </div>
    <div v-if="homeLogoStripActive" class="home-logo-strip__box">
        <div class="home-logo-strip__wrapper" v-for="item in agentList">
            <div class="home-logo-strip__content">

                <a :href="href(item)">
                    <div v-if="getAvatar(item)" :title="item.name" class="logo">
                        <img :src="item.files?.avatar?.url" :alt="item.name">
                    </div>
                    <div v-if="!getAvatar(item)" :title="item.name" class="icon">
                        <mc-icon name="agent"></mc-icon>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>