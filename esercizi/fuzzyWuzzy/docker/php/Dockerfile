ARG PHP_VERSION=8.1.12

FROM php:${PHP_VERSION}-fpm as base

RUN apt-get update && apt-get install -y curl  libzip-dev zip unzip wget

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
	mv composer.phar /usr/local/bin/composer

WORKDIR /fuzzywuzzy


