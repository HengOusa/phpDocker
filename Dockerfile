FROM php:8.2-apache

# Copy app source
COPY --chown=www-data:www-data src/ /var/www/html/

# Enable Apache rewrite (useful for frameworks later)
RUN a2enmod rewrite

# Custom php.ini (optional)
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

EXPOSE 80
