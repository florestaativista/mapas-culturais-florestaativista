# AGENTS.md — Mapas Culturais Floresta Ativista

## 1. Contexto do projeto

Repositório aglutinador da plataforma Mapas Culturais para a Floresta Ativista.
Stack: PHP (core via imagem Docker), Docker, Docker Compose, temas e plugins
próprios ou submódulos. A fonte de verdade do produto é o PRD vivo em
`docs/reference/prd.md`.

## 2. Comandos verificáveis

| Ação | Comando |
|---|---|
| Subir ambiente de desenvolvimento | `sudo ./dev/start.sh` |
| Acessar shell do container | `sudo ./dev/shell.sh` |
| Acessar bash do container | `sudo ./dev/bash.sh` |
| Acessar banco de dados | `sudo ./dev/psql.sh` |
| Build/push de imagem (CI) | `.github/workflows/ci.yml` |
| Testes | `<!-- TODO: preencher -->` |
| Lint | `<!-- TODO: preencher -->` |
| Typecheck | `<!-- TODO: preencher -->` |

Rode os comandos relevantes antes de declarar qualquer tarefa pronta.

## 3. Mapa da estrutura

- `compose/` — configurações PHP compartilhadas e por ambiente (local/produção).
- `dev/` — scripts e docker-compose do ambiente de desenvolvimento.
- `docker/` — Dockerfiles e assets da imagem do projeto.
- `plugins/` — plugins próprios e submódulos.
- `themes/` — temas próprios e submódulos.
- `.github/workflows/` — CI/CD (build/push Docker).

## 4. Regras invioláveis

- Nunca commitar sem rodar os testes.
- Nunca criar arquivos sem necessidade.
- Nunca editar migrations já aplicadas.
- Nunca adicionar dependências sem justificar.
- Nunca desativar checks de CI para fazer o build passar.

## 5. Convenções

As convenções vivem em `docs/reference/conventions/` (`code-style.md`,
`git-workflow.md`, `api-design.md`). Leia antes de escrever código — este
arquivo aponta, não duplica.

## 6. Workflow esperado

- Planeje antes de codar.
- Rode os testes antes de declarar pronto.
- Formato de commit e PR/MR conforme `docs/reference/conventions/git-workflow.md`.
- Consulte `docs/reference/jornadas.md` antes de alterar fluxos de usuário.

## 7. Ponteiros

- `docs/reference/prd.md` → produto e requisitos (fonte de verdade)
- `docs/reference/jornadas.md` → fluxos de usuário
- `docs/reference/architecture.md` → arquitetura interna
- `docs/reference/arquitetura/INDEX.md` → índice roteador da arquitetura
  (carregue cada doc só quando relevante)
- `docs/reference/decisions/` → ADRs (registros de decisão técnica)
- `.agents/skills/` → catálogo de procedimentos sob demanda

## Skills — procedimentos sob demanda

Regras sempre ativas ficam neste arquivo; procedimentos vivem em
`.agents/skills/`. Um procedimento só vira skill quando é repetível,
multi-etapa ou de alto custo de erro — e não-óbvio (se qualquer agente acerta
sem orientação, não precisa de skill).

**Evolução contínua:** quando uma decisão consolidada ou padrão recorrente
emergir no dia a dia (ex.: arquitetura de módulos definida, convenção de
widgets estabilizada), proponha uma skill usando
`.agents/skills/exemplo-skill/SKILL.md` como formato — nunca crie sem
aprovação explícita.

## ADRs são imutáveis

Decisão nova = ADR novo em `docs/reference/decisions/` (sequência de 4
dígitos a partir do máximo existente), que referencia o substituído. Nunca
edite um ADR aceito; nunca renumere ADRs existentes. Formato:
`docs/reference/decisions/0000-template-adr.md`.
