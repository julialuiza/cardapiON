FROM debian:buster-slim

ENV DEBIAN_FRONTEND=noninteractive
ENV NGINX_CONF_DIR=/etc/nginx
RUN apt-get clean all
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install unzip cron apt-transport-https lsb-release locales ca-certificates gnupg2 git curl apt-utils zlib1g-dev -y

RUN curl https://packages.sury.org/php/apt.gpg --output /etc/apt/trusted.gpg.d/php.gpg 
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list

RUN echo "deb http://nginx.org/packages/debian/ $(lsb_release -sc) nginx" > /etc/apt/sources.list.d/nginx.list
RUN curl -L http://nginx.org/keys/nginx_signing.key | apt-key add -

RUN apt-get update
RUN apt-get install -y supervisor nginx php7.4-fpm php7.4-bcmath php7.4-zip php7.4-xml \
	php7.4-cli php7.4-mbstring php7.4-curl php7.4-mysql php7.4-sqlite3 php7.4-gd \
	php7.4-intl php7.4-json

COPY ./config/supervisord/supervisord.conf /etc/supervisor/conf.d
RUN rm -rf ${NGINX_CONF_DIR}/nginx.conf ${NGINX_CONF_DIR}/sites-enabled/* ${NGINX_CONF_DIR}/sites-available/*
COPY ./config/nginx/nginx.conf ${NGINX_CONF_DIR}/nginx.conf
COPY ./config/nginx/default.conf ${NGINX_CONF_DIR}/conf.d/default.conf
COPY ./config/php/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY ./config/php/custom.ini /etc/php/7.4/fpm/conf.d/custom.ini
COPY ./config/php/custom.ini /etc/php/7.4/cli/conf.d/custom.ini
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log
RUN mkdir -p /var/run/php/
RUN curl https://getcomposer.org/composer.phar --output /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
RUN apt-get clean all

EXPOSE 80
CMD ["/usr/bin/supervisord"]
