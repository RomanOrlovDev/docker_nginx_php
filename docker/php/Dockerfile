FROM php:7.4-fpm

RUN pecl install xdebug-3.1.2 && docker-php-ext-enable xdebug

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#COPY ./docker/php/php.ini /usr/local/etc/php/php.ini


# Copy the application code
COPY ./public /app

VOLUME ["/app"]
