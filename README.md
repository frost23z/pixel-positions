# Pixel Positions

A job board application built with Laravel as part of the [Laracasts "30 Days to Learn Laravel"](https://laracasts.com/series/30-days-to-learn-laravel-11) course.

## About This Project

Pixel Positions is a job listing platform where employers can post jobs and job seekers can browse and search for opportunities. This project demonstrates core Laravel concepts including authentication, Eloquent relationships, and Blade components.

## Features

- **User Authentication**
  - User registration with employer profile creation
  - Login/logout functionality
  - Session management

- **Job Management**
  - Post new job listings (authenticated employers only)
  - Browse featured and recent jobs
  - Search jobs by title
  - Filter jobs by tags
  - Click job titles to view application URLs

- **Employer Profiles**
  - Upload company logos
  - Associate jobs with employer accounts
  - Display employer branding on job cards

- **Tagging System**
  - Add multiple tags to jobs (comma-separated)
  - Browse jobs by tag
  - Automatic tag creation and normalization

- **Responsive UI**
  - Dark theme with Tailwind CSS
  - Reusable Blade components
  - Job card layouts (grid and wide views)

## Tech Stack

- **Backend:** Laravel 12
- **Frontend:** Blade Templates, Tailwind CSS 4, Vite
- **Database:** MySQL/SQLite
- **Testing:** Pest PHP

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/frost23z/pixel-positions.git
   cd pixel-positions
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure database in `.env` file

5. Run migrations and seed data:
   ```bash
   php artisan migrate --seed
   ```

6. Create storage symlink:
   ```bash
   php artisan storage:link
   ```

7. Start development servers:
   ```bash
   php artisan serve
   npm run dev
   ```

Visit `http://localhost:8000` in your browser.

## Database Schema

- **Users** → has one → **Employer**
- **Employer** → has many → **Jobs**
- **Jobs** → belongs to many → **Tags** (pivot: job_tag)

## Key Learning Concepts

- Eloquent ORM and relationships
- Authentication and authorization
- Form validation and request handling
- File uploads and storage
- Blade components and slots
- Database seeding and factories
- Eager loading for N+1 query prevention
- RESTful routing conventions
- Search and filtering with query scopes
