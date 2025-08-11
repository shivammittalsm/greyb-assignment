FROM php:8.2-apache

# Install system dependencies + Python scientific stack from apt
RUN apt-get update && apt-get install -y \
    libicu-dev \
    unzip \
    git \
    libpq-dev \
    libzip-dev \
    python3 \
    python3-pip \
    python3-dev \
    python3-venv \
    ca-certificates \
    python3-numpy \
    python3-pandas \
    python3-psycopg2 \
    && docker-php-ext-install intl pdo pdo_pgsql zip

# Enable Apache mod_rewrite for CakePHP
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Expose Apache port
EXPOSE 80
