FROM php:7.0-apache
MAINTAINER Ichsarut Yauvasuta <ichsarut@gmail.com>

RUN apt-get update && apt-get install build-essential -y --no-install-recommends apt-utils
RUN pecl install -o -f redis && rm -rf /tmp/pear \
  && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

# RUN echo 'extension=redis.so' >> /etc/php/7.0/apache2/php.ini \
#   && touch /etc/php/mods-available/redis.ini \
#   && echo 'extension=redis.so' > /etc/php/mods-available/redis.ini \
#   && phpenmod redis && service apache2 restart
  