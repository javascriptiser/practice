# Базовый образ PHP 7.4-FPM
FROM php:7.4-fpm

# Установка необходимых зависимостей
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копирование и установка зависимостей проекта
WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

# Копирование исходного кода проекта
COPY src/ ./src

# Автозагрузка с использованием PSR-4
RUN composer dump-autoload --optimize

# Указание правильного пользователя и группы для файлов
RUN chown -R www-data:www-data /var/www/html

# Установка правильных прав доступа к файлам
RUN chmod -R 755 /var/www/html

# Указание порта, который будет использоваться во время запуска контейнера
EXPOSE 9000

# Запуск PHP-FPM сервера
CMD ["php-fpm"]
