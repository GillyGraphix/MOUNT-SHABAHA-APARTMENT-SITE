FROM php:8.2-apache

# Weka dependencies muhimu za mfumo na Node/NPM kwa ajili ya Vite
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

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

# Weka ruhusa na tengeneza sqlite database
RUN mkdir -p /var/www/html/database && touch /var/www/html/database/database.sqlite && chmod -R 777 /var/www/html/database
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Install dependencies za PHP (Composer)
RUN composer install --no-dev --optimize-autoloader

# Install dependencies za Node na ujenge Vite manifest
RUN npm install && npm run build

# Fichua port ya Apache
EXPOSE 80

CMD ["apache2-foreground"]