# Runbook — Deploy

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Publicar uma nova versão da plataforma Mapas Culturais Floresta Ativista em produção ou homologação.

## Pré-condições

- Acesso ao servidor de destino.
- Branch/tag de release definida.
- `.env` configurado no servidor (não versionado).

## Procedimento

1. Acesse o servidor e entre no diretório do projeto.
2. Execute `git pull` para obter a versão desejada (ou checkout de tag).
3. Execute `sudo ./update.sh` para baixar a imagem, fazer build e reiniciar os containers.
4. Verifique se os containers estão saudáveis com `sudo docker-compose ps`.
5. Valide a aplicação no navegador.

## Rollback deste runbook

Veja `rollback.md`.
