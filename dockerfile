FROM ubuntu:22.04

RUN apt-get update 
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get install -y curl && curl -s https://deb.nodesource.com/setup_18.x | bash && \
    apt-get install -y nodejs && npm --version

RUN apt-get install -y php-fpm php-curl php-xml php-zip php-mysql
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php && chmod +x composer.phar && mv composer.phar /usr/bin/composer

COPY . /var/www
WORKDIR /var/www

RUN composer update && composer install
RUN npm install
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
RUN php artisan key:generate

RUN echo "listen = 9000" >> /etc/php/8.1/fpm/pool.d/www.conf
EXPOSE 9000
RUN php artisan migrate
# F option forces FPM to stay in foreground
CMD ["php-fpm8.1", "-F"]
