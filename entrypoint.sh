#!/usr/bin/env bash
set -e

# Asignar puerto: usar $PORT de Render o forzar 10000 como fallback
TARGET_PORT="${PORT:-10000}"

echo "Iniciando Apache en el puerto: $TARGET_PORT"

# Modificar ambos archivos de configuracion de Apache
sed -i "s/Listen 80/Listen ${TARGET_PORT}/g" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${TARGET_PORT}>/g" /etc/apache2/sites-available/000-default.conf

# Iniciar Apache en primer plano
exec apache2-foreground