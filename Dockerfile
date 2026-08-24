# Stage 1: Instalar dependencias con Composer en PHP 8.4
FROM composer:2 AS composer_stage
WORKDIR /app
COPY composer.json composer.lock* ./
RUN composer install --no-dev --no-scripts --no-autoloader --ignore-platform-reqs --prefer-dist

COPY . .
RUN composer dump-autoload --optimize --no-scripts

# Stage 2: Servidor Apache con PHP 8.4
FROM php:8.4-apache

# Instalar dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Configurar Apache
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Copiar aplicación y vendor desde la primera etapa
COPY --from=composer_stage /app /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
    && chmod -R 777 /var/www/html/storage/framework/sessions \
    && chmod -R 777 /var/www/html/storage/framework/views \
    && chmod -R 777 /var/www/html/storage/framework/cache
EXPOSE 80

CMD ["apache2-foreground"]