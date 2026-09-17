# PRD — Mapas Culturais Floresta Ativista

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

A fonte de verdade do produto. Requisitos funcionais (RF), não-funcionais (RNF), critérios de aceitação e escopo fora.

## Contexto

Repositório aglutinador da plataforma [Mapas Culturais](https://github.com/mapasculturais/mapasculturais) para a Floresta Ativista. Controla versões do core, plugins, temas e infraestrutura (PostgreSQL/PostGIS, Redis, nginx) via Docker e Docker Compose.

## Requisitos funcionais

<!-- Preenchido pelas rodadas de produto. Cada RF vira critério de aceitação verificável. -->

- <!-- TODO: descrever RF001 -->

## Requisitos não-funcionais

- RNF001 — Deploy deve ser reprodutível via Docker Compose em produção/homologação.
- RNF002 — Temas e plugins customizados devem ser versionados neste repositório (próprios ou como submódulos).
- RNF003 — CI deve construir e publicar a imagem Docker em pushes para `master`, `develop` e tags de versão.

## Critérios de aceitação

<!-- TODO: preencher à medida que as funcionalidades são detalhadas -->

## Fora de escopo

<!-- TODO: registrar explicitamente o que não será feito nesta rodada -->

## Decisões relacionadas

- `docs/reference/decisions/`
