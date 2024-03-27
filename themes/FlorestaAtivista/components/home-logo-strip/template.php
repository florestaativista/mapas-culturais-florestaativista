<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */
$this->import('
    mc-avatar
    mc-icon
');

?>

<div v-if="homeLogoStripActive" class="home-logo-strip">
    <div v-for="item in agentList">
        <div>
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