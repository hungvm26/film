FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql && \
    apt-get clean

WORKDIR /var/www/film

COPY . .

RUN chown -R www-data:www-data /var/www/film/storage

CMD php artisan serve --host=0.0.0.0 --port=8000
