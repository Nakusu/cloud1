FROM php:8.2-fpm

# Packages
RUN apt-get update && apt-get install -y \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libmagickwand-dev --no-install-recommends

# Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) \
        mysqli \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        bcmath \
        intl \
        opcache \
        gd

# Cleaning
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/wordpress