# Crowdfunding API

## Description
A Laravel API for managing crowdfunding campaigns, donations, and campaign analytics.

## Setup Instructions
1. Clone the repository:
   git clone <repo_url>
2. cd Crowdfunding_Api
3. composer install
4. cp .env.example .env
5. php artisan key:generate
6. php artisan migrate
7. php artisan serve

## Endpoints
- GET /campaigns → List all campaigns
- GET /campaigns/{id} → Get single campaign
- POST /campaigns → Create campaign
- PUT /campaigns/{id} → Update campaign
- DELETE /campaigns/{id} → Delete campaign

## Example Requests
curl -X GET http://127.0.0.1:8000/api/campaigns
