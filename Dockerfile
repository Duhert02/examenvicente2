FROM php:8.0.0-apache
RUN docker-php-ext-install mysqli
RUN apt-get update
