FROM webdevops/php-apache-dev:7.4

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy only composer files to install composer dependencies (for better docker layer caching)
COPY composer.* /app/
RUN composer install -d /app

# Copy all files with correct ownership
COPY --chown=application:application . /app

WORKDIR /app