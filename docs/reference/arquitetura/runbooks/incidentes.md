# Runbook — Incidentes

> Criado em: 2026-08-21 · Última revisão: 2026-08-21
> Regra: doc desatualizado é corrigido ou marcado como obsoleto — nunca deixado apodrecendo em silêncio.

## Propósito

Responder a incidentes em produção de forma estruturada.

## Pré-condições

- Acesso ao servidor e aos logs.
- Canal de comunicação da equipe definido.

## Procedimento

1. Confirme o sintoma e impacto (usuários afetados, funcionalidade comprometida).
2. Colete logs: `sudo ./logs.sh` ou `sudo docker-compose logs`.
3. Identifique a causa mais provável (deploy recente, dependência externa, banco, etc.).
4. Se o incidente foi causado por deploy, execute o rollback.
5. Documente a causa e ação corretiva em uma issue.

## Rollback deste runbook

Veja `rollback.md`.
