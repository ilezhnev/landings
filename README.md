# Self-testing project
## Requirements
* docker
* docker-compose
* Add line to /etc/hosts:
```
127.0.0.1 api.landings.int
127.0.0.1 angular.landings.int #LiveReload
127.0.0.1 compiled.landings.int #Compiled
```
## Installation
```docker-compose up --build```
## Idea
Generating landing page and manage landing from one Admin panel.
## Architecture
Backend - Symfony 4<br>
Documentation (Swagger) - NelmioApiDocBundle (http://api.landings.int/api/doc)<br>
Database - PostgreSQL<br>
Frontend - Angular 6
