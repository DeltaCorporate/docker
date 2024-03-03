FROM alpine:latest

RUN apk --no-cache add \
    # install necessary PHP packages
    tini \
    php82 \
    php82-session \
    php82-pgsql \
    php82-pdo_pgsql \
    php82-dev \
    php82-gd \
    php82-xmlreader \
    php82-bcmath \
    php82-ctype \
    php82-curl \
    php82-exif \
    php82-iconv \
    php82-intl \
    php82-mbstring \
    php82-opcache \
    php82-openssl \
    php82-pcntl \
    php82-phar \
    php82-xml \
    php82-xsl \
    php82-zip \
    php82-zlib \
    php82-dom \
    php82-fpm \
    php82-sodium \
    php82-tokenizer \
    php82-pecl-apcu && \
    ln -sf /usr/bin/php82 /usr/bin/php && \
    rm -rf /var/cache/apk/*

# ensure www-data user exists
RUN  adduser -u 82 -D -S -G www-data www-data

# FIX volume Permission denied
RUN mkdir -p /var/www/html && chown -R www-data:www-data /var/www/html && chmod 755 /var/www/html

# FIX showlog Permission denied
RUN mkdir -p /var/log && chmod 777 /var/log

ADD rootfs /

ENTRYPOINT ["/sbin/tini", "--"]

EXPOSE 9000

USER www-data

WORKDIR /var/www/html

CMD ["php-fpm82", "--nodaemonize"]
