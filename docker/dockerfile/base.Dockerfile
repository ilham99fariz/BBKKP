FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    libxml2-dev \
    libssl-dev \
    libcurl4-openssl-dev \
    libjpeg-dev \
    libpng-dev \
    zip \
    unzip \
    supervisor \
    nginx \
    libmagickwand-dev \
    libmagickcore-dev \
    imagemagick \
    imagemagick-doc \
    pdftk \
    iputils-ping \
    git \
    curl \
    logrotate

ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

#Install php
RUN install-php-extensions pdo_mysql mbstring exif pcntl bcmath gd imagick excimer zip opcache

# Install nodejs and npm
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
ENV NVM_DIR="/root/.nvm"
RUN . "$NVM_DIR/nvm.sh" && nvm install --lts
ENV PATH="/root/.nvm/versions/node/$(node -v)/bin:${PATH}"

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/

# Setup Nginx
RUN rm /etc/nginx/sites-enabled/default
COPY /docker/nginx/default.conf /etc/nginx/sites-available/default.conf

# Copy Logrotate Configuration
COPY /docker/logrotate/* /etc/logrotate.d/
RUN chmod 600 /etc/logrotate.d/laravel-*

# Copy Imagick Policy
COPY /docker/imagick/policy.xml /etc/ImageMagick-6/policy.xml

# Set PHP ini
COPY /docker/php/php.ini "$PHP_INI_DIR/php.ini"

COPY /docker/php/opcache.ini "$PHP_INI_DIR/conf.d/opcache.ini"

COPY /docker/supervisor /etc/

RUN mkdir -p /var/run/nginx /var/log/supervisor

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]

EXPOSE 3900

USER www-data