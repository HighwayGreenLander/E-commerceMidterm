# Use official PHP 8.2 image with extensions
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev libxml2-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel: optimize & cache
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
