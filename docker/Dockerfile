FROM hacklab/mapasculturais:7.6.1-RC

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

COPY themes/FlorestaAtivista/overrides/agent-types.php /var/www/src/conf/agent-types.php
COPY themes/FlorestaAtivista/overrides/space-types.php /var/www/src/conf/space-types.php
COPY themes/FlorestaAtivista/overrides/project-types.php /var/www/src/conf/project-types.php
COPY themes/FlorestaAtivista/overrides/opportunity-types.php /var/www/src/conf/opportunity-types.php
COPY themes/FlorestaAtivista/questions/pt_BR/cadastro/configuracoes-entidades/localizacao-publica.md /var/www/src/modules/FAQ/questions/pt_BR/cadastro/configuracoes-entidades/localizacao-publica.md
COPY themes/FlorestaAtivista/questions/es_ES/cadastro/configuracoes-entidades/localizacao-publica.md /var/www/src/modules/FAQ/questions/es_ES/cadastro/configuracoes-entidades/localizacao-publica.md

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www


COPY docker/common/config.d /var/www/config/common.d
COPY docker/production/config.d /var/www/config/config.d
