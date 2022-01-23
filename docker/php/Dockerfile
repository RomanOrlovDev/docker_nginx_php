FROM php:7.4-fpm

RUN pecl install xdebug-3.1.2 && docker-php-ext-enable xdebug

# Copy the php config file
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN touch /var/log/xdebug.log
RUN chmod 666 /var/log/xdebug.log


# Copy the application code
COPY ./public /app

VOLUME ["/app"]
