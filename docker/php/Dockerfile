FROM alpine:latest

RUN apk add --no-cache bash \
   && apk add wget \
   && apk add git \
   && apk add php7 \
   && apk add php7-json \
   && apk add php7-phar \
   && apk add php7-mbstring \
   && apk add php7-iconv \
   && apk add php7-ctype \
   && apk add php7-curl \
   && apk add php7-openssl \
   && apk add php7-xml \
   && apk add php7-simplexml \
   && apk add php7-dom \
   && apk add php7-session \
   && apk add php7-xmlwriter \
   && apk add php7-tokenizer \
   && apk add php7-pdo \
   && apk add php7-pdo_mysql \
   && apk add php7-posix \
   && apk add php7-intl \
   && apk add php7-opcache  \
   && apk add php7-pecl-xdebug

ADD xdebug.ini /etc/php7/conf.d/xdebug.ini
RUN mkdir -p /var/app
RUN adduser --disabled-password app && chown -R app:app /var/app

# Composer
RUN wget https://getcomposer.org/installer -O composer-setup.php
RUN php composer-setup.php
RUN rm composer-setup.php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

# Symfony installer
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

USER app
WORKDIR /var/app

## Git
#RUN git config --global user.email "${GIT_EMAIL}"
#RUN git config --global user.name "${GIT_USERNAME}"

RUN echo "alias ll='ls -l'" >> ~/.bashrc
RUN echo "alias la='ls -la'" >> ~/.bashrc
