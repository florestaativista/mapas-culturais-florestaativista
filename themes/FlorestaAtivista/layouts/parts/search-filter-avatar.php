<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

?>

<div class="field">
    <label>
        <input v-model="pseudoQuery['avatar']" type="checkbox" :true-value="1" :false-value="''"> 
        <?php i::_e('Com foto de perfil'); ?> 
    </label>
</div>
