FROM php:7.2-fpm

RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer.phar && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

RUN apt-get update && apt-get install -y libicu-dev zlib1g-dev

RUN docker-php-ext-install intl zip

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN echo "[PHP]" > /usr/local/etc/php/php.ini && \
    echo "memory_limit = 2G" >> /usr/local/etc/php/php.ini

RUN echo "xdebug.start_with_request=yes" > /usr/local/etc/php/conf.d/xdebug.ini && \
    echo "xdebug.mode=off" >> /usr/local/etc/php/conf.d/xdebug.ini

ARG UID
ARG GID

RUN groupmod -o -g ${GID} www-data && mkdir /home/www-data && usermod --home /home/www-data -o -u ${UID} www-data && chown -R www-data:www-data /home/www-data

USER www-data