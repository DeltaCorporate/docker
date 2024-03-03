FROM alpine:3.17.3

RUN apk --repository http://nl.alpinelinux.org/alpine/edge/testing/ add \
    wget \
    curl \
    git \
    php81 \
    php81-curl \
    php81-openssl \
    php81-iconv \
    php81-json \
    php81-mbstring \
    php81-phar \
    php81-dom && \
    rm /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 

RUN mkdir -p /var/www

WORKDIR /var/www

COPY . /var/www

VOLUME /var/www

CMD ["/bin/sh"]

ENTRYPOINT ["/bin/sh", "-c"]
