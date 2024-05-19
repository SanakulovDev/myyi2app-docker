# PHP-FPM ning so'nggi imidjidan foydalanamiz
FROM php:8.0-fpm

# Zaruriy kutubxonalarni o'rnatish
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmagickwand-dev --no-install-recommends \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install pdo_pgsql zip \
    && docker-php-ext-enable pdo_pgsql zip

# Composerni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Loyihaning ildiz katalogidagi fayllarni konteynerga nusxalash
COPY . /var/www/html/myyii2app/

# Working directoryni belgilash
WORKDIR /var/www/html/myyii2app

# COMPOSER_ALLOW_SUPERUSER o'zgaruvchisini sozlash
ENV COMPOSER_ALLOW_SUPERUSER 1

# Composerni ishlatish
RUN composer install

# PHP-FPMni ishga tushirish
CMD ["php-fpm"]
