## About
- PHP version 7.2
- Mysql version 5.7

### Requirements
- Docker
- DockerCompose

### Clone & Run server
```
git clone git@github.com:Thanhhm-dev/basic-docker-laravel.git
docker-compose up -d
```
### Create project
```
docker-compose exec web composer create-project laravel/laravel /app/blog
```
### Create database
```
docker-compose exec web php artisan migrate
```
### Use application to connect with database
```
Server host: localhost
Port: 3336
Database: db_name
username: root
password: password_root
```
<p align="center"><img src="https://github.com/Thanhhm-dev/basic-docker-laravel/blob/main/image.png"></p>
