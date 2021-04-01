FROM php:8.0-fpm

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer.phar && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get install -y libicu-dev libzip-dev

RUN docker-php-ext-install intl zip

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/
COPY php.ini /usr/local/etc/php/conf.d/

ARG UID
ARG GID

RUN groupmod -o -g ${GID} www-data && mkdir /home/www-data && usermod --home /home/www-data -o -u ${UID} www-data && chown -R www-data:www-data /home/www-data

USER www-data