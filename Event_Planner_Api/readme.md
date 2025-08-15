# Event Planner API

## Description
A Laravel API to manage events, attendees, and schedules.

## Setup Instructions
1. Clone the repository:
   git clone <repo_url>
2. cd Event_Planner_Api
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve

## Endpoints
- GET /events → List all events
- GET /events/{id} → Get single event
- POST /events → Create event
- PUT /events/{id} → Update event
- DELETE /events/{id} → Delete event

## Example Requests
curl -X GET http://127.0.0.1:8000/api/events

