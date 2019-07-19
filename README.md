# PHP MVC Authorization system

Docker running Nginx, PHP-FPM, Composer, MySQL and PHPMyAdmin

![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)

## Overview

OOP PHP MVC Authorization system without framework. Include 2 languages, main(profile) page, page authorization and page registration with same fields and upload photo.


This project use the following ports :
| Server     | Port |
|------------|------|
| MySQL      | 8989 |
| PHPMyAdmin | 8080 |
| Nginx      | 8000 |


## Installing and start 

To install [Git](http://git-scm.com/book/en/v2/Getting-Started-Installing-Git), download it and install following the instructions :

```sh
git clone https://github.com/nanoninja/docker-nginx-php-mysql.git
```

Go to the project directory :

```sh
cd docker-nginx-php-mysql
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

Show help :

```sh
make help
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


## Screenshots

Start Page
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)




___

## About me
Hello, my name is Igor Veselov. I am Senior Full Stack Web Developer. Main specialization - Ecommerce websites. On this time developed CMS [vvShop](https://vvshop.xfor.top/) and other e-commerce projects turnkey. Opened for interesting offers.

___

## Contacts
- SKYPE: [utz0r2](skype:utz0r2)
- EMAIL: [dev@xfor.top](mailto:dev@xfor.top)
- WWW: https://dev.xfor.top/cv.html
- LinkedIn: https://www.linkedin.com/in/igor-veselov/
- github: https://github.com/utz0r2





