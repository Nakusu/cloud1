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
    libmagickwand-dev \
    curl \
    --no-install-recommends

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

RUN curl https://fr.wordpress.org/latest-fr_FR.zip > /var/www/wordpress.zip

RUN unzip /var/www/wordpress.zip -d /var/www

COPY requirements/wp-config.php /var/www/wordpress

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar --output-dir /var/www/wordpress

RUN chmod +x /var/www/wordpress/wp-cli.phar && mv /var/www/wordpress/wp-cli.phar /usr/local/bin/wp

# Cleaning
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY ./requirements/install.sh /var/www/wordpress

RUN chmod a+x /var/www/wordpress/install.sh

WORKDIR /var/www/wordpress