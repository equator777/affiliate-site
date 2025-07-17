FROM php:8.2-apache

# Enable Apache mod_rewrite (for SEO)
RUN a2enmod rewrite

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Copy all files into Apache document root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Give Apache permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
