FROM php:7.2-apache
MAINTAINER HelderFernandes @internations

COPY php.ini /usr/local/etc/php/
RUN apt-get update \
    && apt-get install -y git zip vim \
    && docker-php-ext-install pdo_mysql mysqli \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2


COPY localhost.conf  /etc/apache2/sites-available/
COPY ./hosts  /etc/hosts
#RUN a2enmod rewrite

WORKDIR /etc/apache2/sites-available/
RUN a2ensite localhost.conf
RUN service apache2 restart

