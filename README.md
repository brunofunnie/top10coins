# TOP 10 COINS 🪙

This is a TOP 10 of the trending coins at the moment, it was implemented using Laravel 10 and Nuxt.js 3

![Screenshot Main](https://github.com/brunofunnie/top10coins/blob/main/docs/img-002.png "Main")
![Screenshot Search](https://github.com/brunofunnie/top10coins/blob/main/docs/img-003.png "Search")
![Screenshot Search](https://github.com/brunofunnie/top10coins/blob/main/docs/img-004.png "Search")
![Screenshot Coin Details](https://github.com/brunofunnie/top10coins/blob/main/docs/img-005.png "Coin Details")

## REQUIREMENTS

This project during the dev environment doesn't need the SSL protocol to be enabled. Also this project was tested on Unix environments (Linux and Mac) some commands on Windows may vary.

- PHP 8.1.17 or later
- Composer 2.5.5 or later
- Node.js 16.19.1 or later
- Yarn 1.22.19 pr later
- Docker 23.0.5 (optional)

ℹ: The versions informed above are the ones used during the dev environment on my machine. It may and may not work on previous versions of the above applications.

## INSTALLATION

Below you will have two installation methods, with PHP and Node.js and using Docker although the Docker setup is just for the Backend (for now). Also be aware that the setup is just for development environment, it is in no way intended for production.

### METHOD: PHP & NODE.JS

Clone this repository, open the terminal and navigate to the cloned directory. Then execute the following commands:

#### INSTALL BACKEND PHP

```bash
cd fw-backend && composer install && cp .env.example .env && php artisan key:generate && php artisan serve
```

Open another terminal in the same cloned directory and execute the following commands:
#### INSTALL FRONTEND NUXT.JS 3

```bash
cd fw-frontend && yarn && yarn dev -o
```

### METHOD: DOCKER

Clone this repository, open the terminal and navigate to the cloned directory. Then execute the following commands:

#### INSTALL BACKEND PHP

```bash
docker-compose build && docker-compose up -d
```

For the next step is better to check if the Docker container is already running, for that execute:

```bash
docker-ps
```

And if everything is ok, you'll see something like this:

![Docker PS output](https://github.com/brunofunnie/top10coins/blob/main/docs/img-001.png "Docker PS output")

And for the last run the following:

```bash
docker exec -it top10coins-web bash -c 'composer install && cp .env.example .env && php artisan key:generate && chmod -R 777 storage'
```

Open another terminal in the same cloned directory and execute the following commands:
#### INSTALL FRONTEND NUXT.JS 3

```bash
cd fw-frontend && yarn && yarn dev -o
```

### OPEN APPLICATION

If everything went fine you should probably already have the application opened in your browser. But just in case you don't, click the link below:

TOP 15 COINS
[http://127.0.0.1:3000](http://127.0.0.1:3000)

