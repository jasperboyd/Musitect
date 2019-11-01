FROM php:7.2-alpine

RUN apk update \
  && apk add -u \
    curl \
  && rm -rf /var/lib/apt/lists/*

RUN apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        curl-dev \
        imagemagick-dev \
        libtool \
        libxml2-dev \
        postgresql-dev \
        sqlite-dev \
    && apk add --no-cache \
        curl \
        git \
        imagemagick \
        mysql-client \
        postgresql-libs \
        libintl \
        icu \
        icu-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install \
        curl \
        iconv \
        mbstring \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        pdo_sqlite \
        pcntl \
        tokenizer \
        xml \
        zip \
        intl \
    && apk del -f .build-deps

RUN docker-php-ext-install pdo_mysql

USER root

RUN apk --no-cache add shadow && \
	usermod -u 1000 www-data

WORKDIR /var/www/app
