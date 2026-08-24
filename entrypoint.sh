#!/usr/bin/env bash
set -e

TARGET_PORT="${PORT:-10000}"

echo "Iniciando Apache en el puerto: $TARGET_PORT"

# Reemplazar puertos en la configuración de Apache
sed -i "s/Listen 80/Listen ${TARGET_PORT}/g" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${TARGET_PORT}>/g" /etc/apache2/sites-available/000-default.conf

# Limpiar caché de vistas e internalización de Laravel para evitar cuelgues
php artisan config:clear || true
php artisan view:clear || true

# Iniciar Apache en primer plano
exec apache2-foreground