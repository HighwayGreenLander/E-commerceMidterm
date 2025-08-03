#!/usr/bin/env bash

# Use PHP 8.2 runtime
echo "PHP Version:"
php -v

# Install composer dependencies without dev packages
composer install --no-dev --optimize-autoloader

# Laravel-specific setup
php artisan config:cache
php artisan route:cache
php artisan view:cache
