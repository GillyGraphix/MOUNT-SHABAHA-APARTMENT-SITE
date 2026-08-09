FROM php:8.2-apache

# Weka dependencies muhimu za mfumo
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Safisha cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Weka PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Weka Composer kutoka rasmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Weka Apache DocumentRoot iwe kwenye folder la public la Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Ruhusu Apache rewrite module
RUN a2enmod rewrite

# Copia mafaili ya mradi wako kwenda kwenye server
COPY . /var/www/html

# Weka ruhusa (permissions) sahihi kwenye folder la storage na bootstrap
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install dependencies za Laravel
RUN composer install --no-dev --optimize-autoloader

# Fichua port ya Apache
EXPOSE 80

CMD ["apache2-foreground"]