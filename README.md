# Lab Activity 9 – Barangay Bakuna Tracker

## Description

Bakuna Tracker is a Laravel web application for managing and viewing vaccination schedules at the Barangay Matina Crossing Health Center.

It uses Blade templates for the layouts and components, Tailwind CSS for responsive styling, Vite for asset management, and SQLite for the database.

## Features

- Health worker login and logout
- Dashboard with vaccination statistics
- Vaccination schedule table
- Overdue vaccination alerts
- Responsive design using Tailwind CSS
- Reusable Blade components

## Technologies Used

- Laravel
- PHP
- Blade Templates
- Tailwind CSS v3
- Vite
- SQLite

## Installation

1. Clone the repository, then open the LabActivity9-Maligad subfolder containing artisan, composer.json, and package.json.
2. Install PHP dependencies using `composer install`.
3. Install JavaScript dependencies using `npm install`.
4. Copy `.env.example` to `.env`.
5. Set `DB_CONNECTION=sqlite` in `.env`.
6. Generate the application key using `php artisan key:generate`.
7. Create `database/database.sqlite` if it does not exist.
8. Run `php artisan migrate:fresh --seed`.

## Running the Application

Start Laravel:

`php artisan serve`

In a separate terminal, start Vite:

`npm run dev`

Open `http://127.0.0.1:8000` in your browser.

## Login Credentials

Email: `nurse.maligad@bakuna.test`

Password: `bakuna2026`

## Main Pages

- `/login` – Login page
- `/dashboard` – Dashboard and vaccination statistics
- `/schedule` – Vaccination schedule

## Author

Trixia Maligad

Full-Stack Web Development – Lab Activity 9