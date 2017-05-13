<p align="center">
  <img src="./resources/assets/images/icon.png?raw=true">
   <p align="center">OpenConcertoREST</p>
</p>



---

> ⚠️ ATTENTION ⚠️ 
> Ce projet est encore au stade de développement et ne doit pas être utilisé en production, il s'agit d'une version alpha non sécurisée avec beaucoup de travail restant. 

---

## A Propos

OpenConcertoREST est un serveur RESTFull pour OpenConcerto qui permet de faire des appels vers la base de donnée PostgreSQL à distance en utilisant le protocole REST.

OpenConcertoREST est composé d'un serveur d'authentification OAuth2 et d'un serveur RESTFull.

## Pré-requis

Les pré-requis sont:

- git (https://git-scm.com)
- composer (https://getcomposer.org)
- php (>=5.6.4)
- mysql
- une installation fonctionnelle d'OpenConcerto en multiposte

Assurez vous que ces pré-requis soit bien installé sur votre machine.

## Installation

Pour installer OpenConcertoREST, procédez comme suit en ligne de commande:

- clonez le projet sur votre machine
```shell
git clone https://github.com/aliasdoc/OpenConcertoREST.git
```
- déplacez vous dans le dossier
```shell
cd OpenConcertoREST
```
- installez les dépendances
```shell
composer install
```
- renommez le fichier `.env.example` en `.env` 
```shell
mv .env.example .env
```
- générez les clefs de l'application
```shell
php artisan key:generate
```

Dans votre base de donnée mysql créez une base de donnée (ex. OpenConcertoREST) et un utilisateur auquel vous attribuez tous les droits sur cette base.
Puis renseignez le fichier `.env` les valeurs ci-dessous:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=OpenConcertoREST
DB_USERNAME=OpenConcertoREST
DB_PASSWORD=monSuperMotDePassCompliqué
```

En fin de fichier rajoutez ces valeurs:
```
API_PREFIX=api
API_VERSION=v1
API_NAME="OpenConcerto REST API"
API_DEBUG=true
API_SUBTYPE=OpenConcerto
API_STANDARDS_TREE=vnd
API_CONDITIONAL_REQUEST=false

OC_DB_CONNECTION=oc
OC_DB_HOST=192.168.0.1 
OC_DB_PORT=5432
OC_DB_DATABASE=OpenConcerto
OC_DB_USERNAME=openconcerto
OC_DB_PASSWORD=openconcerto
```

Renseignez les paramètres commandants par `OC_` par les paramètres de la base de données PostgreSQL de OpenConcerto.

- création de la base de donnée du serveur RESTFull
```shell
php artisan migrate
```
- générez les clefs du serveur oAuth2 et création de 2 clients
```shell
php artisan passport:install
```
- remplissage de la base de donnée RESTFull avec les données nécessaires à l'utilisation
```shell
php artisan db:seed
```
- démarrez le serveur
```shell
php artisan serve
```

Une fois le serveur démarré, il vous indique l'url sur laquelle vous connecter (par défaut http://127.0.0.1:8000 )

Saisissez cette adresse dans votre navigateur et authentifiez vous avec les login et mot de pass par défaut:

```
email: admin@changeme.com
password: openconcerto
```

Suivez la documentation de l'écran d'accueil pour créer un client OAuth2 et utiliser l'api.
