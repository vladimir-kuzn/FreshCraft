FROM ubuntu:22.04

RUN apt-get update

# Without this some packages from php will require user prompt
ENV DEBIAN_FRONTEND=noninteractive

# Install nodejs and npm
RUN apt-get install -y curl && curl -s https://deb.nodesource.com/setup_19.x | bash && \
    apt-get install -y nodejs && npm --version

# Install php and composer
RUN apt-get install -y php-fpm php-curl php-xml php-zip php-mysql php-mbstring
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php && chmod +x composer.phar && mv composer.phar /usr/bin/composer

# Make php-fpm listen to TCP socket
RUN echo "listen = 9000" >> /etc/php/8.1/fpm/pool.d/www.conf
EXPOSE 9000

# Prepare user for launching
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy files and set permissions for new user
COPY . /var/www
WORKDIR /var/www
RUN chown -R www:www /var/www
RUN chmod -R 755 /var/www

USER www

# Install deps for node and php
RUN composer update && composer install && composer dump-autoload && composer install --no-scripts && php artisan optimize
RUN npm install
RUN composer install --no-scripts

RUN npm run build

# Prepare FPM for non-root launching
USER root

RUN touch /var/log/php8.1-fpm.log && chown www:www /var/log/php8.1-fpm.log
RUN chown www:www /run/php
USER www

# F option forces FPM to stay in foreground
CMD ["php-fpm8.1", "-F"]
