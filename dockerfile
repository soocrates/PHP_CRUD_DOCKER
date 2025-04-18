FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install mysqli zip pdo_mysql

# Enable apache rewrite module
RUN a2enmod rewrite

#Set working directory
WORKDIR /var/www/html

#remove default apache index page
RUN rm -f /var/www/html/index.html

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer files
COPY composer.json composer.lock ./


RUN composer --version

# Install PHP dependencies
RUN composer install --no-dev --no-interaction --prefer-dist

#copy app code to container
COPY . /var/www/html




# 1778  docker build -t php-app .
# 1779  docker run -p 8080:80 --name php-container php-app