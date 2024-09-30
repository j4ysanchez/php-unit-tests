FROM php:8.1.3RC1-apache-buster

# Install MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git unzip libzip-dev 

# Install and enable the zip extension
RUN docker-php-ext-install zip && docker-php-ext-enable zip

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini