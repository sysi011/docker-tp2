FROM php:8.1-fpm-alpine

#Etape 2
RUN docker-php-ext-install pdo pdo_mysql

#Suite etape 1
WORKDIR /app
COPY index.php /app
EXPOSE 9000
CMD ["php-fpm"]

