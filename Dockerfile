FROM php:8.2-apache

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql intl bcmath opcache \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache rewrite module for short URL routing
RUN a2enmod rewrite

# Allow .htaccess rules to work
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Set working directory and copy code
WORKDIR /var/www/html
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
