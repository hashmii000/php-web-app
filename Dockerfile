FROM php:8.2-apache

# Enable Apache rewrite
RUN a2enmod rewrite

# Allow .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Install mysqli extension (IMPORTANT FIX)
RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80