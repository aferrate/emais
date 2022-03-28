# Sample API project with Symfony 5 with JWT and Docker
### Install

run docker:
```
cd laradock
docker-compose up -d nginx mysql phpmyadmin
```


install dependencies:
```
docker-compose exec workspace bash
composer install
```


create database:
```
docker-compose exec workspace bash
bin/console doctrine:database:create
```


migrate entities:
```
docker-compose exec workspace bash
bin/console doctrine:migrations:migrate
```


### Run tests:
```
docker-compose exec workspace bash
php bin/phpunit
```


### Run php-cs-fixer on src folder:
```
docker-compose exec workspace bash
php-cs-fixer fix ./src --rules=@Symfony
```


### Run phpStan on src folder:
```
docker-compose exec workspace bash
./vendor/bin/phpstan analyse --level max src
```


### Get into the container:
```
docker-compose exec workspace bash
```


### Generate swagger.json

generate swagger.json:
```
docker-compose exec workspace bash
./vendor/bin/openapi --format json --output ./public/swagger/swagger.json ./src/Swagger/swagger.php src
```


### Start application

access phpmyadmin:
- [http://localhost:8081](http://localhost:8081)

credentials:
```
 server mysql
 user root
 password root
```

call localhost in your browser:
- [http://localhost](http://localhost/)

access swagger ui:
- [http://localhost/swagger](http://localhost/swagger)


### Endpoints

login:
```
http://localhost/api/login_check
GET
{
    "username": "test@test.com",
    "password": "test"
}
```