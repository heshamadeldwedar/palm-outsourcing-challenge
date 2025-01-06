# Application Installation Guide

Follow these steps to set up and run the application locally.

## Prerequisites
1. **Git**: Download and install Git from [here](https://git-scm.com/).
2. **Docker**: Download and install Docker from [here](https://www.docker.com/).

## Installation Steps

1. **Clone the Repository**
   
   ```bash
   git clone https://github.com/heshamadeldwedar/palm-outsourcing-challenge
   cd palm-outsourcing-challenge
   ```

2. **Start Docker Compose**
   
   Run the following command to start the Docker containers:
   
   ```bash
   docker-compose up
   ```

3. **Install Composer Dependencies**
   
   Run the following command to install PHP dependencies using Composer:
   
   ```bash
   docker container exec <backend_SHA> composer install
   ```

4. **Run Database Migrations**
   
   Execute the following command to run database migrations:
   
   ```bash
   docker container exec <backend_SHA> php artisan migrate
   ```

5. **Run Database Seeder**
   
   Seed the database with initial data:
   
   ```bash
   docker container exec <backend_SHA> php artisan db:seed --class=TaskSeed
   ```

6. **Install Frontend Dependencies**
   
   Install frontend dependencies using npm:
   
   ```bash
   docker container exec <frontend_SHA> npm install
   ```

---

If you need to get SHA for backend or frontend execute the following command, make sure your containers are running before doing this tho

```bash
# This for backend 
docker container ls | grep backend | awk '{print $1}' 

#This for frontend
docker container ls | grep backend | awk '{print $1}'  
```