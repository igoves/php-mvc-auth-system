# PHP MVC Authorization system [![Build Status](https://travis-ci.org/utz0r2/design-patterns-php.svg?branch=master)](https://travis-ci.org/utz0r2/design-patterns-php)


## Overview

OOP PHP MVC Authorization system without framework. Included 2 languages, main(profile) page, page authorization and page registration with same fields and upload photo.
Docker running Nginx, PHP-FPM, Composer, MySQL and PHPMyAdmin.

![Main Screen](https://raw.githubusercontent.com/utz0r2/php-mvc-auth-system/master/screenshots/main_screen.png)

___

## Installing and start 

To install [Git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git), download it and install following the instructions :

```sh
git clone https://github.com/utz0r2/php-mvc-auth-system.git
```

Go to the project directory :

```sh
cd php-mvc-auth-system
```

Start the application :

```sh
sudo docker-compose up
```

Open your favorite browser :

* [http://localhost:8000](http://localhost:8000/)
* [http://localhost:8080](http://localhost:8080/) PHPMyAdmin (username: root, password: root)

Stop and clear services

```sh
sudo docker-compose down -v
```

___

## Use Makefile

When developing, you can use [Makefile](https://en.wikipedia.org/wiki/Make_(software)) for doing the following operations :

| Name          | Description                                  |
|---------------|----------------------------------------------|
| code-sniff    | Check the API with PHP Code Sniffer (`PSR2`) |
| composer-up   | Update PHP dependencies with composer        |
| docker-start  | Create and start containers                  |
| docker-stop   | Stop and clear all services                  |
| logs          | Follow log output                            |
| mysql-dump    | Create backup of all databases               |
| mysql-restore | Restore backup of all databases              |
| phpmd         | Analyse the API with PHP Mess Detector       |
| test          | Test application with phpunit                |

### Examples

Start the application :

```sh
sudo make docker-start
```
___

## Use Docker commands

### Testing PHP application with PHPUnit

```sh
docker-compose exec -T php ./vendor/bin/phpunit
```

### Fixing standard code with [PSR2](http://www.php-fig.org/psr/psr-2/)

```sh
docker-compose exec -T php ./vendor/bin/phpcbf -v --standard=PSR2 ./app
```

### Checking the standard code with [PSR2](http://www.php-fig.org/psr/psr-2/)

```sh
docker-compose exec -T php ./vendor/bin/phpcs -v --standard=PSR2 ./app
```

### Analyzing source code with [PHP Mess Detector](https://phpmd.org/)

```sh
sudo docker-compose exec -T php ./vendor/bin/phpcs ./app text cleancode,codesize,controversial,design,naming,unusedcode
```

___

## Screenshots

![Main Screen](https://raw.githubusercontent.com/utz0r2/php-mvc-auth-system/master/screenshots/main_screen.png)

![Login](https://raw.githubusercontent.com/utz0r2/php-mvc-auth-system/master/screenshots/login.png)

![Profile](https://raw.githubusercontent.com/utz0r2/php-mvc-auth-system/master/screenshots/profile.png)

![Profile](https://raw.githubusercontent.com/utz0r2/php-mvc-auth-system/master/screenshots/registration.png)

___

## About me
Hello, my name is Igor Veselov. I am Senior Full Stack Web Developer. Main specialization - Ecommerce websites. Opened for interesting offers.

___

## Contacts
- SKYPE: [utz0r2](skype:utz0r2)
- EMAIL: [dev@xfor.top](mailto:dev@xfor.top)
- WWW: https://dev.xfor.top/
- LinkedIn: https://www.linkedin.com/in/igor-veselov/
- github: https://github.com/utz0r2





