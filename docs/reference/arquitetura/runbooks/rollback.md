# Runbook — Rollback

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Reverter a plataforma para uma versão anterior estável.

## Pré-condições

- Identificar a tag/commit estável anterior.
- Ter backup do banco e dos volumes (`docker-data/public-files`, `docker-data/private-files`, `docker-data/saas-files`).

## Procedimento

1. Pare o ambiente: `sudo ./stop.sh`.
2. Restaure o banco a partir do dump mais recente, se necessário.
3. Faça checkout da tag/branch estável.
4. Execute `sudo ./update.sh`.
5. Verifique a aplicação.

## Rollback deste runbook

Não se aplica — este é o próprio rollback.
