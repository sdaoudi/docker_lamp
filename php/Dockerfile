FROM php:7-fpm-alpine3.8
MAINTAINER Stefan Durubala, durubalastefan@gmail.com

RUN apk --no-cache update \ 
        && apk upgrade \
        && docker-php-ext-install opcache mysqli
        
COPY ./configs/php.ini /usr/local/etc/php/conf.d
COPY ./configs/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./configs/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN chown -R www-data:www-data /usr/local/etc/php-fpm.d/www.conf

EXPOSE 9000
CMD ["php-fpm"]
