# Usa una imagen base de PHP con Apache
FROM php:8.1-apache-bullseye

# Copia los archivos de tu aplicación al contenedor
COPY . /var/www/html/

# Establece los permisos correctos para los archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita el módulo rewrite de Apache
RUN a2enmod rewrite

# Configura Apache para servir archivos estáticos y manejar rutas amigables
RUN echo '<Directory /var/www/html/>' > /etc/apache2/conf-available/custom.conf \
    && echo '    AllowOverride All' >> /etc/apache2/conf-available/custom.conf \
    && echo '    Require all granted' >> /etc/apache2/conf-available/custom.conf \
    && echo '</Directory>' >> /etc/apache2/conf-available/custom.conf \
    && a2enconf custom

# Instala extensiones necesarias de PHP (por ejemplo, mysqli)
RUN docker-php-ext-install mysqli

# Expone el puerto 80
EXPOSE 80
