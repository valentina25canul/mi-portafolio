# Stage 1: Compilar assets de Frontend (Vite / Tailwind)
FROM node:20-alpine AS frontend_stage
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: Instalar dependencias PHP con Composer
FROM composer:2 AS composer_stage
WORKDIR /app
COPY composer.json composer.lock* ./
RUN composer install --no-dev --no-scripts --no-autoloader --ignore-platform-reqs --prefer-dist

COPY . .
RUN composer dump-autoload --optimize --no-scripts

# Stage 3: Servidor Apache con PHP 8.4
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

# Configurar Apache y ServerName
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

# Copiar aplicación PHP desde composer_stage
COPY --from=composer_stage /app /var/www/html

# Copiar carpeta compilada de assets (build) desde frontend_stage
COPY --from=frontend_stage /app/public/build /var/www/html/public/build

# Permisos de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 777 /var/www/html/storage/framework/sessions \
    && chmod -R 777 /var/www/html/storage/framework/views \
    && chmod -R 777 /var/www/html/storage/framework/cache

# Copiar y dar permisos al script de entrada
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["/entrypoint.sh"]