FROM php:8.0-apache-bullseye
COPY --from=composer:2.5.8 --chmod=775 /usr/bin/composer /usr/bin/composer
RUN apt-get -y install
RUN apt-get install libsodium13;
RUN apt-get install libsodium-dev -y
RUN sudo apt-get install -y sodium
RUN apt-get -y install libgmp-dev
RUN sudo apt-get install -y sqlite3 libsqlite3-dev
RUN apt-get install php8.0-gmp
RUN docker-php-ext-install gmp && sodium \
RUN docker-php-ext-install sodium
WORKDIR /var/www/html
EXPOSE 80