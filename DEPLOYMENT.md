# Production Deployment Runbook (steel-summit)

This runbook documents the deployment flow for the production server.

## Server Access

- Host: 89.252.185.69
- SSH port: 2232
- User: root
- Project path: /home/networkingsummits.com/public_html/steel-summit

## 1) Local Pre-Deployment Checks

Run in local project root:

```bash
git status -sb
php artisan test --compact
```

If tests fail, stop deployment.

## 2) Connect and Inspect Server State

```bash
ssh -p 2232 root@89.252.185.69
cd /home/networkingsummits.com/public_html/steel-summit
git remote -v
git branch --show-current
git status -sb
```

Confirm branch is `master` before pulling.

## 3) Pull Latest Code

```bash
git pull --ff-only origin master
```

## 4) Install Dependencies (if needed)

```bash
composer install --no-interaction --prefer-dist --no-dev --optimize-autoloader
npm ci
npm run build
```

Use npm commands only when frontend assets changed.

## 5) Laravel Deployment Commands

```bash
php artisan migrate --force
php artisan optimize:clear
php artisan optimize
```

## 6) Post-Deploy Verification

```bash
php artisan about
tail -n 100 storage/logs/laravel.log
```

## 7) Rollout Report Checklist

- Deployment date/time
- Active branch name
- Pull result (up-to-date or new commits)
- Migration output
- Any error and fix action
