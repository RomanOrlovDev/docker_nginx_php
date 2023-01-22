FROM php:7.4.0-fpm-alpine

RUN mkdir /tmp/profile
RUN chown www-data:www-data /tmp/profile

RUN touch /var/log/xdebug.log
RUN chmod 666 /var/log/xdebug.log

#RUN pecl install xdebug-3.1.2 && docker-php-ext-enable xdebug
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
  && pecl install xdebug-3.1.2 \
  && docker-php-ext-enable xdebug \
  && apk del pcre-dev ${PHPIZE_DEPS}

# Copy the php config file
#COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
#COPY ./docker/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


# Copy the application code
COPY ./public /app

VOLUME ["/app"]
