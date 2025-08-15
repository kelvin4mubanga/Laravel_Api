# Fitness Tracker API

## Description
A Laravel API to track workouts, users’ fitness stats, and progress logs.

## Setup Instructions
1. Clone the repository:
   git clone <repo_url>
2. cd Fitness_Tracker_Api
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve

## Endpoints
- GET /workouts → List all workouts
- GET /workouts/{id} → Get single workout
- POST /workouts → Create workout
- PUT /workouts/{id} → Update workout
- DELETE /workouts/{id} → Delete workout

## Example Requests
curl -X GET http://127.0.0.1:8000/api/workouts
