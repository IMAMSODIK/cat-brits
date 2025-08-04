#!/bin/bash

echo "🚀 Starting Laravel Deploy Script..."

# Masuk ke direktori project (ubah jika perlu)
cd /home/u123456789/public_html

# Set file permission
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;

# Install composer dependencies (opsional jika tidak ada vendor)
composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader

# Set permission untuk storage dan bootstrap
chmod -R 775 storage
chmod -R 775 bootstrap/cache

# Jalankan perintah Laravel
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Jalankan migrasi
php artisan migrate --force

echo "✅ Deploy selesai!"
