FROM php:8.1.10-fpm-bullseye
RUN apt update
RUN apt install -y libzip-dev
RUN apt install -y git
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysqli