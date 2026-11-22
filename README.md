# Institute CRM - Lead Management System

A Lead Management System for Counsellors. Used to save student enquiries as Leads and manage follow-ups.

## Features
- Login / Register
- Leads - Create, View, Edit, Delete
- Duplicate Phone numbers are prevented
- Stage Rules: New, Contacted, Interested, Enrolled, Lost
- Overdue Follow-ups check

## How to Run

1. Clone:
git clone https://github.com/fathimareeha048-sketch/ims.git

2. Install:
composer install
npm install

3. Env setup:
cp .env.example .env
php artisan key:generate

4. Database:
php artisan migrate --seed

5. Run:
php artisan serve
npm run dev

Login: http://127.0.0.1:8000/login

## Testing
php artisan test
Result: 32 passed

## Team
IMS Project - CRM + QA + Docs