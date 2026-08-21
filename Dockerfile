# 1. Imagen base con PHP 8.2 y Apache
FROM php:8.2-apache

# 2. Instalar dependencias del sistema y extensiones de PHP para Laravel
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
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# 3. Habilitar mod_rewrite para Laravel en Apache
RUN a2enmod rewrite

# 4. Instalar Composer desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Establecer el directorio de trabajo
WORKDIR /var/www/html

# 6. Copiar los archivos del proyecto
COPY . .

# 7. Cambiar el DocumentRoot de Apache a la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# 8. Instalar dependencias de PHP sin scripts pesados en la construcción
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 9. Instalar dependencias de Node y compilar Tailwind/Vite
RUN npm install
RUN npm run build

# 10. Asignar permisos a las carpetas de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 11. Exponer el puerto
EXPOSE 80

CMD ["apache2-foreground"]