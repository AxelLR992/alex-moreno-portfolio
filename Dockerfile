FROM php:8.0-apache
# Use default apache deploying workdirectory
WORKDIR /var/www/html
COPY . .
# Install zip and unzip software for composer
RUN apt-get update \
     && apt-get install -y libzip-dev \
     && docker-php-ext-install zip \
     && apt install curl -y \
     && apt update -y \
     && apt install git -y
# Copy composer and project files to container
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
# Install composer dependencies (Vendor directory)
RUN composer install --ignore-platform-reqs --no-scripts
# Set directory permissions (So PHP can interact with files)
RUN chmod -R 777 ./

# Expose app at port 80
EXPOSE 80