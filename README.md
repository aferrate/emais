# API VHS
### Instalación

Ejecutar docker:
```
cd laradock
docker-compose up -d nginx mysql phpmyadmin
```


Instalar dependencias:
```
docker-compose exec workspace bash
composer install
```


crear base de datos:
```
docker-compose exec workspace bash
bin/console doctrine:database:create
```


Migrar entidades:
```
docker-compose exec workspace bash
bin/console doctrine:migrations:migrate
```


### Ejecutar tests:
```
docker-compose exec workspace bash
php bin/phpunit
```


### Ejecutar php-cs-fixer en la carpeta src:
```
docker-compose exec workspace bash
php-cs-fixer fix ./src --rules=@Symfony
```


### Ejecutar phpStan en la carpeta src:
```
docker-compose exec workspace bash
./vendor/bin/phpstan analyse --level max src
```


### Entrar en el contenedor de la aplicación:
```
docker-compose exec workspace bash
```


### Generar swagger.json

generate swagger.json:
```
docker-compose exec workspace bash
./vendor/bin/openapi --format json --output ./public/swagger/swagger.json ./src/Swagger/swagger.php src
```


### Ejecutar application

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

Obtener todos los vhs:
```
http://localhost/api/v1/vhs/getall
GET
```


Añadir vhs:
```
http://localhost/api/v1/vhs/create
POST
{
   "idFilm":508947,
   "full_details":{
      "adult":false,
      "backdrop_path":"/iPhDToxFzREctUA0ZQiYZamXsMy.jpg",
      "belongs_to_collection":null,
      "budget":190000000,
      "genres":[
         {
            "id":16,
            "name":"Animation"
         },
         {
            "id":10751,
            "name":"Family"
         },
         {
            "id":35,
            "name":"Comedy"
         },
         {
            "id":14,
            "name":"Fantasy"
         }
      ],
      "homepage":"https://www.disneyplus.com/movies/turning-red/4mFPCXJi7N2m",
      "imdb_id":"tt8097030",
      "original_language":"en",
      "original_title":"Turning Red",
      "overview":"Thirteen-year-old Mei is experiencing the awkwardness of being a teenager with a twist – when she gets too excited, she transforms into a giant red panda.",
      "popularity":8354.569,
      "poster_path":"/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg",
      "production_companies":[
         {
            "id":2,
            "logo_path":"/wdrCwmRnLFJhEoH8GSfymY85KHT.png",
            "name":"Walt Disney Pictures",
            "origin_country":"US"
         },
         {
            "id":3,
            "logo_path":"/1TjvGVDMYsj6JBxOAkUHpPEwLf7.png",
            "name":"Pixar",
            "origin_country":"US"
         }
      ],
      "production_countries":[
         {
            "iso_3166_1":"US",
            "name":"United States of America"
         }
      ],
      "release_date":"2022-03-10",
      "revenue":0,
      "runtime":100,
      "spoken_languages":[
         {
            "english_name":"Cantonese",
            "iso_639_1":"cn",
            "name":"广州话 / 廣州話"
         },
         {
            "english_name":"Mandarin",
            "iso_639_1":"zh",
            "name":"普通话"
         },
         {
            "english_name":"English",
            "iso_639_1":"en",
            "name":"English"
         },
         {
            "english_name":"French",
            "iso_639_1":"fr",
            "name":"Français"
         },
         {
            "english_name":"Korean",
            "iso_639_1":"ko",
            "name":"한국어/조선말"
         }
      ],
      "status":"Released",
      "tagline":"Growing up is a beast.",
      "title":"Turning Red",
      "video":false,
      "vote_average":7.5,
      "vote_count":975
   }
}
```