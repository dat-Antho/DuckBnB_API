## Installation

- git clone
- composer install
- php bin/console server:run


## Se connecter 

Pour se connecter via l'api il faut une requète vers l'url /jsonlogin 
avec le paramètre suivant
"Content-Type: application/json" 
et les datas : 
'{"username":"exemple","password":"exemple"}'
Si l'auth réussi il y a une réponse 200


## inscription 

URL /jsonregister

Params en json
{"login" : "login", "password": lorem,"email" : "e@t.fr"}