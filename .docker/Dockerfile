FROM php:7.2.12-apache

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update \
 && apt-get install -y git zlib1g-dev libicu-dev \
 && docker-php-ext-configure intl \
 && docker-php-ext-install zip intl mbstring pdo pdo_mysql \
 && a2enmod rewrite \
 && sed -i 's!/var/www/html!/var/www/public!g' /etc/apache2/sites-available/000-default.conf \
 && mv /var/www/html /var/www/public \
 && curl -sS https://getcomposer.org/installer \
  | php -- --install-dir=/usr/local/bin --filename=composer \
 && service apache2 restart

WORKDIR /var/www
