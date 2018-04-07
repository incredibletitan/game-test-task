FROM php:7.2-apache
MAINTAINER Yuriy Stos

COPY . /var/www/html
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/php.ini /usr/local/etc/php

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite