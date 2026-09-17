# Arquitetura — Mapas Culturais Floresta Ativista

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Visão geral

Repositório aglutinador que orquestra a plataforma Mapas Culturais via Docker Compose. O core da aplicação é consumido como imagem base (`hacklab/mapasculturais`), enquanto customizações (temas e plugins) vivem neste repositório, próprios ou como submódulos.

## Componentes principais

- **Core Mapas Culturais**: imagem Docker base (`hacklab/mapasculturais`), atualizada pelos scripts `update.sh`/`start.sh`.
- **Temas customizados**: `themes/FlorestaAtivista`, `themes/SOM`.
- **Plugins customizados**: `plugins/AdminLoginAsUser`, `plugins/Analytics`, `plugins/LocationPatch`, `plugins/MapasBlame`, `plugins/MultipleLocalAuth`, `plugins/PluginSOM`, `plugins/SamplePlugin`, `plugins/SettingsFa`, `plugins/SpamDetector`, `plugins/Zammad`.
- **Infraestrutura**: PostgreSQL/PostGIS, Redis, nginx (configurações em `compose/` e `docker/`).
- **CI/CD**: GitHub Actions em `.github/workflows/ci.yml` para build/push da imagem Docker.

## Estrutura de diretórios

```
compose/          # configurações PHP compartilhadas e por ambiente
dev/              # configurações e scripts de desenvolvimento
docker/           # Dockerfiles e assets de imagem
plugins/          # plugins próprios e submódulos
themes/           # temas próprios e submódulos
.github/workflows/# CI/CD
```

## Decisões técnicas

- <!-- TODO: registrar decisões com consequência duradoura como ADRs em docs/reference/decisions/ -->

## Runbooks

- Deploy: `docs/reference/arquitetura/runbooks/deploy.md`
- Rollback: `docs/reference/arquitetura/runbooks/rollback.md`
- Incidentes: `docs/reference/arquitetura/runbooks/incidentes.md`
