FROM php:8.2-fpm

# Packages
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    curl \
    wget

RUN docker-php-ext-install mysqli \
        pdo \
        pdo_mysql

# Cleaning
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/phpmyadmin