FROM php:7.4-apache

LABEL maintainer="Kenny Lajara <kennylajara@gmail.com>"
LABEL version="0.1"

COPY ./src /var/www/html

