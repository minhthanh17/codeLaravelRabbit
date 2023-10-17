FROM webdevops/php-apache-dev:7.2
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
WORKDIR /app/blog
