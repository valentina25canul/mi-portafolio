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

# Configurar Apache y mod_rewrite
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Ajustar Apache para que escuche en el puerto que asigna Render ($PORT) o 80 por defecto
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

WORKDIR /var/www/html

# Copiar aplicación y vendor desde la primera etapa
COPY --from=composer_stage /app /var/www/html

# Permisos de carpetas de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 777 /var/www/html/storage/framework/sessions
RUN chmod -R 777 /var/www/html/storage/framework/views
RUN chmod -R 777 /var/www/html/storage/framework/cache

EXPOSE 80

CMD ["apache2-foreground"]