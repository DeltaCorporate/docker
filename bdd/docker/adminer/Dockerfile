FROM alpine:3.17.3

ENV MEMORY=256M
ENV UPLOAD=2048M

RUN apk --no-cache --repository https://dl-cdn.alpinelinux.org/alpine/edge/testing add \
    # Packages
    tini \
    php81 \
    php81-session \
    php81-pgsql \
    php81-pdo_pgsql\
    php81-dev \
    php81-gd \
    php81-xmlreader \
    php81-bcmath \
    php81-ctype \
    php81-curl \
    php81-exif \
    php81-iconv \
    php81-intl \
    php81-mbstring \
    php81-opcache \
    php81-openssl \
    php81-pcntl \
    php81-phar \
    php81-xml \
    php81-xsl \
    php81-zip \
    php81-zlib \
    php81-dom \
    php81-fpm \
    php81-sodium \
    php81-tokenizer \
    php81-pecl-apcu \
    postgresql-dev && \
    ln -sf /usr/bin/php81 /usr/bin/php && \
    rm -rf /var/cache/apk/*


WORKDIR /srv
EXPOSE 80
ENTRYPOINT ["/sbin/tini", "--"]

CMD /usr/bin/php \
    -d memory_limit=$MEMORY \
    -d upload_max_filesize=$UPLOAD \
    -d post_max_size=$UPLOAD \
    -S 0.0.0.0:80
