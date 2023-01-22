FROM php:7.4.0-fpm-alpine

#RUN pecl install xdebug-3.1.2 && docker-php-ext-enable xdebug
RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
  && pecl install xdebug-3.1.2 \
  && docker-php-ext-enable xdebug \
  && apk del pcre-dev ${PHPIZE_DEPS}

RUN mkdir /tmp/profile
RUN chmod 777 /tmp/profile

RUN touch /var/log/xdebug.log
RUN chmod 666 /var/log/xdebug.log

# Copy the application code
COPY ./public /app

WORKDIR /app
