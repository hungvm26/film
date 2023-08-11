FROM php:7.4-fpm

WORKDIR /var/www/film

RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql && \
    apt-get clean

COPY . .
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
RUN chown -R www-data:www-data /var/www/film/storage
RUN cp .env.example .env
RUN php artisan key:generate
RUN php artisan migrate
RUN php artisan db:seed

CMD php artisan serve --host=0.0.0.0 --port=8000
