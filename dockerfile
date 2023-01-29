FROM ubuntu:22.04

RUN apt-get update 

# Without this some packages from php will require user prompt
ENV DEBIAN_FRONTEND=noninteractive

# Install nodejs and npm
RUN apt-get install -y curl && curl -s https://deb.nodesource.com/setup_18.x | bash && \
    apt-get install -y nodejs && npm --version

# Install php and composer
RUN apt-get install -y php-fpm php-curl php-xml php-zip php-mysql
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php && chmod +x composer.phar && mv composer.phar /usr/bin/composer

# Copy src to nginx root
COPY . /var/www
WORKDIR /var/www

# Install deps for node and php
RUN composer update && composer install
RUN npm install

# Prepare user for launching
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Make php-fpm listen to TCP socket
RUN echo "listen = 9000" >> /etc/php/8.1/fpm/pool.d/www.conf
EXPOSE 9000

# Prepare php
RUN php artisan migrate && php artisan key:generate

# F option forces FPM to stay in foreground
CMD ["php-fpm8.1", "-F"]
