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

RUN curl https://files.phpmyadmin.net/phpMyAdmin/5.2.2/phpMyAdmin-5.2.2-all-languages.zip > /var/www/phpmyadmin.zip

RUN unzip /var/www/phpmyadmin.zip -d /var/www && mv /var/www/phpMyAdmin-5.2.2-all-languages /var/www/phpmyadmin

COPY ./requirements/config.inc.php /var/www/phpmyadmin

# Cleaning
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/phpmyadmin