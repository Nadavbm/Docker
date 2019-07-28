FROM php:7.2-apache

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

VOLUME /data/mapphp/web

WORKDIR /data/mapphp/web

RUN apt-get update && \
    apt-get upgrade -y && \
    docker-php-ext-install pdo pdo_mysql mysqli

EXPOSE 80

RUN a2enmod rewrite


