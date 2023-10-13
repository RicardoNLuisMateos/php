FROM php:7.3-apache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite
# Install unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip