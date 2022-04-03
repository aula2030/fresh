# Fresh case study

## Introducció

Per realitzar l'exercici s'ha utilitzat l'última versió de Laravel disponible. 
Junt amb la utilització de Sail per l'execució amb Docker i el paquet Breeze per
la gestió d'usuaris, és una molt bona opció per arrancar el projecte de manera
fàcil i efectiva.

## Instal·lació

El procés és el comú en projectes [Laravel](https://laravel.com). Cal tenir
[Git](https://git-scm.com/), PHP i [Composer](https://getcomposer.org/) per 
la instal·lació de paquets de PHP, i [Nodejs i npm](https://nodejs.org/) 
pels paquets Javascript.

### Requeriments per l'entorn d'execució

#### Amb Docker:
Tenint [Docker](https://docs.docker.com/engine/) i 
[Docker Compose](https://docs.docker.com/compose/), la utilització de 
([Laravel Sail](https://laravel.com/docs/9.x/sail)) facilita la gestió i 
l'operativa. En entorns Windows i Mac és necessari tenir 
[Docker Desktop](https://docs.docker.com/desktop/) instal·lat. 

#### Sense Docker:
Cal tenir un entorn d'execució standard d'aplicacions PHP.
- PHP>=8 (amb les extensions necessàries)
- Servidor web Apache/nginx.
- Una base de dades sqlite (MySQL/MariaDB) operativa. L'aplicació utilitza
per defecte sqlite, però només cal configurar l'accés a una altra BD al fitxer `.env`.

#### Pusher
L'aplicació utilitza [Pusher](https://pusher.com/) per l'actualització en temps real 
de les dades de les comandes. És necessari disposar d'un compte (gratuit) i les seves
dades de configuració.

### Passos

1. Clonar el projecte i situar-se a l'arrel.
2. Executar `composer install`.
3. Copiar `.env.example` a `.env`.
4. Configurar al `.env` l'accés a la base de dades (en cas d'utilitzar una altra 
de la proporcionada) i les dades del compte de pusher.

#### Amb Docker

5. Executar `./vendor/bin/sail up -d`. És recomanable crear un alias `sail` per facilitar-ne
l'ús. Si no, caldrà afegir el prefixe `./vendor/bin` a les següents crides.
6. Executar `sail artisan migrate --seed`.
7. Executar `sail npm run install && npm run dev`.

#### Sense Docker

5. Executar `php artisan migrate --seed`.
6. Executar `npm install && npm run dev`.
7. Executar `php artisan serve`.

L'aplicació estarà disponible a `http://localhost` o `http://localhost:8000`, segons
l'entorn escollit.

### Actualització en temps real

El projecte conté les migracions i seeders necessaris per a carregar la base 
de dades de prova suministrades, de manera que l'aplicació es funcional des del moment
de la instal·lació.

Per a provar l'actualització en temps real, s'ha crear una comanda d'`artisan` que 
inserta un nou registre aleatori a la BD i genera el event d'actualització. Només cal:

- Executar `sail artisan order:create` o `php artisan order:create` segons l'entorn.
