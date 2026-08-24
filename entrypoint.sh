#!/usr/bin/env bash
set -e

# Usar el puerto que inyecta Render en tiempo de ejecución (o 80 por defecto)
PORT="${PORT:-80}"

echo "Configurando Apache para escuchar en el puerto: $PORT"

# Reemplazar el puerto 80 por el puerto dinámico de Render
sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf
sed -i "s/80/${PORT}/g" /etc/apache2/ports.conf

# Iniciar Apache
exec apache2-foreground