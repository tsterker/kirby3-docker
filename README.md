# Kirby Docker Example


## Project Setup

### Configuration

Copy `.env.example` to `.env` and adjust as needed.
The default configuration assumes you are running the application and all commands within the context of docker-compose (e.g. `docker-compose exec`).

Example Config:
```ini
APP_ENV=local

DB_CONNECTION=mysql
DB_HOST=db  # assumes docker-compose context
DB_PORT=3306
DB_DATABASE=database
DB_USER=root
DB_PASSWORD=
```

To

### Docker-Compose

Requires **docker** & **docker-compose**:

```sh
docker-compose up -d  # visit localhost:8000
```

## Database Migrations

The default config assumes MySQL running via docker-compose.
To migrate the DB run:

```sh
docker-compose exec app php database/migrations/20210308_create_users_table.php
```

If you prefer sqlite, change the `DB_CONNECTION` in your `.env` file...

```ini
DB_CONNECTION=mysql
```

... and run the migrations locally or via docker-compose

```sh
php database/migrations/20210308_create_users_table.php

# OR
docker-compose exec app php database/migrations/20210308_create_users_table.php
```

## Build Docker Image


To build the application docker image and confirm it's working:

```sh
docker build --tag kirby-example .

# Start container
docker run --rm -p 8000:80 kirby-example  # visit localhost:8000
```
