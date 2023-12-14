FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN apt-get update \
    && apt-get install -y apt-utils \
        libzip-dev \
        unzip \
    && docker-php-ext-install zip pdo_mysql

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]