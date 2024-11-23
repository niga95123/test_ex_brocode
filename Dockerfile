FROM php:8.2-fpm AS builder

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libpq-dev \
    libicu-dev \
    libxslt1-dev \
    libzip-dev \
    librabbitmq-dev \
    unzip \
    && pecl install apcu amqp \
    && docker-php-ext-enable apcu amqp \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_pgsql pgsql \
    intl \
    xsl \
    zip \
    opcache

RUN pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug

COPY ./docker/php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

FROM builder AS docker

WORKDIR /var/www/ex/

COPY . /var/www/ex/
