FROM php:8.2-apache

#Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable apache rewrite module
RUN a2enmod rewrite

#Set working directory
WORKDIR /var/www/html

#remove default apache index page
RUN rm -f /var/www/html/index.html

#copy app code to container
COPY . /var/www/html