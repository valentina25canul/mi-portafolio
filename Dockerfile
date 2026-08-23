# 1. Imagen base con PHP 8.2 y Apache
FROM php:8.3-apache

# 2. Instalar dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# 3. Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# 4. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Establecer directorio de trabajo
WORKDIR /var/www/html

# 6. Copiar los archivos del proyecto (incluye la carpeta public/build ya compilada)
COPY . .

# 7. Cambiar el DocumentRoot de Apache a la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# 8. Instalar dependencias de PHP
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --no-scripts --ignore-platform-reqs --optimize-autoloader

# 9. Permisos de carpetas de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]