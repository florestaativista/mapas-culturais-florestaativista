FROM hacklab/mapasculturais:7.5.55

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

COPY themes/FlorestaAtivista/overrides/agent-types.php /var/www/src/conf/agent-types.php
COPY themes/FlorestaAtivista/overrides/space-types.php /var/www/src/conf/space-types.php
COPY themes/FlorestaAtivista/overrides/project-types.php /var/www/src/conf/project-types.php
COPY themes/FlorestaAtivista/overrides/opportunity-types.php /var/www/src/conf/opportunity-types.php
COPY themes/FlorestaAtivista/overrides/taxonomies.php /var/www/src/conf/taxonomies.php

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www


COPY docker/common/config.d /var/www/config/common.d
COPY docker/production/config.d /var/www/config/config.d
