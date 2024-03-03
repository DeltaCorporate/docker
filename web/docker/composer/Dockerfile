# <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
#  Composer Dockerfile - PHP 8.1
# 
#  #  Developed by    : LeGrizzly#0341
#  #  Support         : LeGrizzly#0341
#  #  GitHub          : https://github.com/xalsie
#   _                _____          _               _         
#  | |              / ____|        (_)             | |        
#  | |        ___  | |  __   _ __   _   ____  ____ | |  _   _ 
#  | |       / _ \ | | |_ | | \__| | | |_  / |_  / | | | | | |
#  | |____  |  __/ | |__| | | |    | |  / /   / /  | | | |_| |
#  |______|  \___|  \_____| |_|    |_| /___| /___| |_|  \__, |
#                                                        __/ |
#                                                       |___/
#  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~_Update: 13/05/23_~~-->
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
