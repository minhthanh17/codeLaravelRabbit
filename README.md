## About
- PHP version 7.1.14
- Laravel version 10

### Requirements
- Docker
- DockerCompose

### Clone & Run server
```
git clone 
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