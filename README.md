# This is the instructionto use this repository
## Installation
`clone or fork the repository`
****
make `composer install` to install the requirements dependencies
****
Configure the .env file
Dans le fichiers .env 
voici la configuration
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dashboard-clinique
DB_USERNAME=root
DB_PASSWORD=
```
***le nom `dashboard-clinique` est le nom de la base de donne qui doit etre creer avec mysql
****
make `php artisan key:generate`
****
make `npm install`
****
Pour creer les tables dans la base de donnees
`php artisan migrate` or `php artisan migrate:fresh --seed`
make `php artisan ser` enjoy!