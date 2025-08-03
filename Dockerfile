# Use official PHP 8.2 image with FPM
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libpng-dev libonig-dev libxml2-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

# Set permissions for Laravel
RUN chmod -R 775 storage bootstrap/cache

# Install dependencies (no dev for production)
RUN composer install --no-dev --optimize-autoloader

# Do NOT run artisan commands here — wait for runtime
# Laravel needs env and writable folders that only exist after container runs

# Start the Laravel dev server (okay for Render Free Plan)
## work||CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
