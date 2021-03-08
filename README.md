# Kirby Docker Example


## Plain PHP

Requires a working **PHP** and **Composer** setup:

```sh
php -S localhost:8000 kirby/router.php  # visit localhost:8000
```


## Docker-Compose

Requires **docker** & **docker-compose**:

```sh
docker-compose up -d  # visit localhost:8000
```

## Docker (Package)

To build the application docker image and run a container:

```sh
docker build --tag kirby-example .

docker run --rm -p 8000:80 kirby-example  # visit localhost:8000
```
