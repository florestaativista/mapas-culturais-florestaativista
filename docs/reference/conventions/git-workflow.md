# Git workflow — Mapas Culturais Floresta Ativista

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Branches

- `master` — ambiente de homologação.
- `develop` — desenvolvimento de novas funcionalidades.
- Tags `v*.*.*` — ambiente de produção (Versionamento Semântico).

## Fluxo recomendado

1. Crie uma branch a partir de `develop` (ou `master` para hotfix).
2. Faça commits pequenos e descritivos.
3. Abra PR para `develop`.
4. Após revisão e merge, a CI publica a imagem Docker.

## Commits

<!-- TODO: definir padrão de mensagens de commit -->
