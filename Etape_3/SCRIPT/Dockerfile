FROM php:8.1-fpm-alpine
WORKDIR /app
COPY . /app
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 9000
CMD ["php-fpm"]



