FROM php:7.4-apache

RUN a2enmod rewrite
COPY ./src /var/www/html

LABEL maintainer="Kenny Lajara <kennylajara@gmail.com>"
LABEL version="0.1.1"

EXPOSE 80