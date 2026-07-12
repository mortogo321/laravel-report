# Laravel - Report

A Laravel demo app that renders a departmental/individual KPI report by reading data out of an Excel workbook.

## What's inside

- `GET /` — reads `data/data.xlsx` (via `maatwebsite/excel`) and renders a KPI report view: per-agency scores, weighting, and a normal-curve grade distribution
- `App\Imports\KpiScore` import mapping + `Controller::getKpiScore()` for parsing the workbook
- Front end built with Tailwind CSS, ApexCharts, and Select2 (via Vite)

## Tech stack

- Laravel 12, PHP 8.2+
- `maatwebsite/excel` for spreadsheet import
- Vite, Tailwind CSS, ApexCharts, Select2, jQuery

## Quickstart

```bash
cp -R data storage/app
cp .env.example .env

composer install
php artisan key:generate

yarn install
```

Run (two terminals):

```bash
php artisan serve
```
```bash
yarn dev
```

App: http://localhost:8000
