#!/usr/bin/env bash

echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

# Create the database directory and file if they do not exist
if [ ! -f /var/www/html/database/database.sqlite ]; then
    echo "Creating database.sqlite..."
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    echo "SQLite database file created."
else
    echo "SQLite database file already exists."
fi
