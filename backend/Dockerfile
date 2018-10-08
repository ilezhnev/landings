FROM composer:latest AS composer
FROM php:7.1-fpm-alpine
ENV PHPIZE_DEPS \
    autoconf \
    cmake \
    file \
    g++ \
    gcc \
    libc-dev \
    pcre-dev \
    make \
    git \
    pkgconf \
    re2c \
    freetype-dev \
    libpng-dev  \
    libjpeg-turbo-dev
RUN apk add --no-cache --virtual .persistent-deps \
    icu-dev \
    postgresql-dev \
    libxml2-dev \
    libressl-dev \
    freetype \
    libpng \
    libjpeg-turbo \
    supervisor
RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    && pecl update-channels \
    && pecl install apcu \
    && docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure intl --enable-intl \
    && docker-php-ext-configure mbstring --enable-mbstring \
    && docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) \
        gd \
        bcmath \
        intl \
        pdo_pgsql \
        mbstring \
        soap \
        iconv \
        zip \
        tokenizer \
    && docker-php-ext-enable apcu \
    && apk del .build-deps \
    && rm -rf /tmp/* ~/.pearrc
ADD ./supervisord/supervisord.conf /etc/supervisord.conf
RUN mkdir -p /var/log/supervisor \
    && mkdir -p /etc/supervisor/conf.d
COPY . /var/www/backend
COPY entrypoint.sh /usr/local/bin/entrypoint
RUN chmod +x /usr/local/bin/entrypoint

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer global require "hirak/prestissimo:^0.3" --prefer-dist --no-progress --no-suggest --classmap-authoritative

WORKDIR /var/www/backend
ENTRYPOINT ["entrypoint"]
CMD ["php-fpm"]