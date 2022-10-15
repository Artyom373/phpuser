FROM php:8.1-fpm
WORKDIR /app
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-install -j$(nproc) pdo pdo_pgsql  #-j$(nproc) поточная установка для ускарения
RUN pecl channel-update pecl.php.net && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug #Включить  xdebug
CMD php -S 0.0.0.0:8080
