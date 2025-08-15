# E-Learning API

## Description
A Laravel API to manage courses, lessons, students, and enrollments.

## Setup Instructions
1. Clone the repository:
   git clone <repo_url>
2. cd E-Learning__Api
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve

## Endpoints
- GET /courses → List all courses
- GET /courses/{id} → Get single course
- POST /courses → Create course
- PUT /courses/{id} → Update course
- DELETE /courses/{id} → Delete course

## Example Requests
curl -X GET http://127.0.0.1:8000/api/courses
