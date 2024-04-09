<style>
    .main-header{
        background-image: url(<?php $this->asset('img/barra-superior-branca.png') ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
    .home-developers__content .dev-icon{
        background-image: url(<?php $this->asset('img/dev-star.png') ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;                
    }
    
    .main-header .mc-header-menu li a .label {
        padding: 0 5px;
    }
    .mc-header-menu--item.noticies:hover .icon {
        background-color: #2e2e2e;
    }

    .mc-header-menu--item.noticies:hover .label {
        color: #2e2e2e;
    }

    .mc-header-menu--item.communities:hover .icon {
        background-color: var(--mc-agents-500);
    }

    .mc-header-menu--item.communities:hover .label {
        color: var(--mc-agents-500);
    }

    .action-communities .mc-header-menu--item.communities .icon{
        background-color: var(--mc-agents-500);
    }
    .action-communities .mc-header-menu--item.communities .label {
        color: var(--mc-agents-500);
    }

</style>