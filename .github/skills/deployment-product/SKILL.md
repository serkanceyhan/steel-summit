---
name: deployment-product
description: "Use when user asks /deployement-product, /deployment-product, deploy to production, release to server, run test before deploy, connect with ssh -p 2232 root@89.252.185.69, pull latest code, run migrate and post-deploy optimize steps for steel-summit."
---

# Deployment Product Skill

## Purpose

Run a safe, repeatable production deployment flow for steel-summit.

## Required Context

- Local repo path: C:/Users/ceyha/Desktop/repo/steel-summit
- Production SSH: ssh -p 2232 root@89.252.185.69
- Production app path: /home/networkingsummits.com/public_html/steel-summit
- Default branch: master (verify before pull)

## Workflow

1. Local pre-check:
- Confirm local git is clean enough for deployment context:
  - `git status -sb`
- Run tests before deployment:
  - `php artisan test --compact`
- If tests fail, stop and report failure summary.

2. Connect to production and inspect state:
- Use non-interactive SSH command chain where possible.
- Check server repo status:
  - `cd /home/networkingsummits.com/public_html/steel-summit`
  - `git remote -v`
  - `git branch --show-current`
  - `git status -sb`

3. Update code:
- Pull latest code with fast-forward only:
  - `git pull --ff-only origin master`
- If branch is not `master`, stop and ask user confirmation.

4. Install/update dependencies when needed:
- PHP deps:
  - `composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader`
- Frontend deps/build only if project changes require it:
  - `npm ci`
  - `npm run build`

5. Laravel deploy tasks:
- Run safe production migration:
  - `php artisan migrate --force`
- Refresh caches:
  - `php artisan optimize:clear`
  - `php artisan optimize`

6. Verify deploy health:
- `php artisan about`
- Optional quick app log check:
  - `tail -n 100 storage/logs/laravel.log`

7. Report results:
- Summarize:
  - Current branch
  - Pulled commit/result
  - Migration status
  - Any failed command and exact reason

## Guardrails

- Never run destructive git commands.
- Prefer `--ff-only` pull.
- Do not proceed if tests fail unless user explicitly asks to continue.
- If SSH or permissions fail, stop and provide exact command output summary.

## Suggested Command Blocks

Local pre-check:

```bash
git status -sb
php artisan test --compact
```

Remote inspection + deploy (single SSH session):

```bash
ssh -p 2232 root@89.252.185.69 "cd /home/networkingsummits.com/public_html/steel-summit && git branch --show-current && git status -sb && git pull --ff-only origin master && composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader && php artisan migrate --force && php artisan optimize:clear && php artisan optimize && php artisan about"
```
