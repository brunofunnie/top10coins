FROM php:8.1.10-fpm

RUN apt-get update -y \
    && apt-get install -y nginx

RUN apt-get update  \
    && apt-get install -y \
        nginx \
        libicu-dev \
        libmcrypt-dev \
        libevent-dev \
        iputils-ping \
        telnet \
        iproute2 \
        links

# PHP_CPPFLAGS are used by the docker-php-ext-* scripts
ENV PHP_CPPFLAGS="$PHP_CPPFLAGS -std=c++11"

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl opcache pdo_mysql pcntl sockets\
    && pecl channel-update pecl.php.net \
    && pecl install redis mcrypt\
    && docker-php-ext-enable redis mcrypt

COPY confs/php/php.ini /usr/local/etc/php/php.ini
COPY confs/php/opcache.ini /usr/local/etc/php/conf.d/php-opocache.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ../confs/nginx-site.conf /etc/nginx/sites-enabled/default
COPY --chmod=777 ../confs/entrypoint.sh /etc/entrypoint.sh

WORKDIR /app

EXPOSE 80 443

ENTRYPOINT ["/etc/entrypoint.sh"]