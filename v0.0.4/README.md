# SLIM 4 - SOCCER API - DEMO

RESTful API demo that allow you to manage soccer teams and players.

Used technologies: PHP, Slim 4, MySQL, PHPUnit, env var, Docker & Docker Compose.

Made with [slim4-api-skeleton](https://github.com/maurobonfietti/slim4-api-skeleton).

[![Software License][ico-license]](LICENSE.md)

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square


## QUICK INSTALL:

### Pre Requisite:

- Git.
- PHP.
- Composer.
- MySQL/MariaDB.


### Clone with git:

```bash
$ git clone https://github.com/maurobonfietti/slim4-soccer-api-demo.git && cd slim4-soccer-api-demo
$ cp .env.example .env
$ composer install
$ composer test
$ composer start
```


#### Configure your connection to MySQL Server:

By default, the API use a MySQL Database.

You can check and edit this configuration in your `.env` file:

```
DB_HOST='127.0.0.1'
DB_NAME='yourMySqlDatabase'
DB_USER='yourMySqlUsername'
DB_PASS='yourMySqlPassword'
```


## DOCKER READY:

If you like Docker, you can use this project with **docker** and **docker-compose**.


### MINIMAL DOCKER VERSION:

* Engine: 18.03+
* Compose: 1.21+


### DOCKER COMMANDS:

```bash
# Create and start containers for the API.
$ docker-compose up -d --build

# Checkout the API.
$ curl http://localhost:8081

# Stop and remove containers.
$ docker-compose down
```


## DEPENDENCIES:

### LIST OF REQUIRE DEPENDENCIES:

- [slim/slim](https://github.com/slimphp/Slim): Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.
- [slim/psr7](https://github.com/slimphp/Slim-Psr7): PSR-7 implementation for use with Slim 4.
- [pimple/pimple](https://github.com/silexphp/Pimple): A small PHP dependency injection container.
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv): Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.

### LIST OF DEVELOPMENT DEPENDENCIES:

- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit): The PHP Unit Testing framework.
- [symfony/console](https://github.com/symfony/console): The Console component eases the creation of beautiful and testable command line interfaces.
- [maurobonfietti/slim4-api-skeleton-crud-generator](https://github.com/maurobonfietti/slim4-api-skeleton-crud-generator): CRUD Generator for Slim 4 - Api Skeleton.


## DOCUMENTATION:

### DEFAULT ENDPOINTS:

- Help: `GET /`

- Status: `GET /status`

### TEAMS:

- Get All: `GET /team`

- Create: `POST /team`

- Get One: `GET /team/{id}`

- Update: `PUT /team/{id}`

- Delete: `DELETE /team/{id}`

### PLAYERS:

- Get All: `GET /player`

- Create: `POST /player`

- Get One: `GET /player/{id}`

- Update: `PUT /player/{id}`

- Delete: `DELETE /player/{id}`
