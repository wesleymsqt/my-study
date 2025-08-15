# Cadeia Criativa Backend

This is the backend for the Cadeia Criativa project, running on Laravel 12 with Docker.

## How to Run the Application

### Prerequisites

Make sure you have the following installed on your system:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

### 1. Set Up the Environment

First, clone the repository and navigate into the project directory. Then, copy the example environment file:

```bash
cp .env.example .env
```

Next, ensure your `.env` file is configured to connect to the PostgreSQL container. The database credentials should match the ones in `docker-compose.yml`:

```env
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=user
DB_PASSWORD=password
```

### 2. Build and Run the Containers

With Docker running, execute the following command to build the images and start the containers in detached mode:

```bash
docker-compose up -d --build
```

### 3. Run Database Migrations

Once the containers are up and running, execute the database migrations:

```bash
docker-compose exec app php artisan migrate
```

### 4. Access the Application

Your application should now be running and accessible at [http://localhost:8000](http://localhost:8000).

