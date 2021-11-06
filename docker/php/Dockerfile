FROM ubuntu:20.04

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND noninteractive

ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update
RUN apt-get install -y gnupg gosu curl ca-certificates zip unzip libcap2-bin libpng-dev python2
RUN mkdir -p ~/.gnupg
RUN chmod 600 ~/.gnupg
RUN echo "disable-ipv6" >> ~/.gnupg/dirmngr.conf
RUN apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C
RUN apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C
RUN echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu focal main" > /etc/apt/sources.list.d/ppa_ondrej_php.list
RUN apt-get update
RUN apt-get install -y php8.0-cli
RUN apt-get install -y php8.0-dev
RUN apt-get install -y php8.0-gd
RUN apt-get install -y php8.0-imap
RUN apt-get install -y php8.0-mbstring
RUN apt-get install -y php8.0-zip
RUN apt-get install -y php8.0-bcmath
RUN apt-get install -y php8.0-intl
RUN apt-get install -y php8.0-readline
RUN apt-get install -y php8.0-msgpack
RUN apt-get install -y php8.0-igbinary
RUN apt-get install -y php8.0-ldap
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
RUN apt-get update
RUN apt-get -y autoremove
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN rm -rf /tmp/* /var/tmp/*

RUN setcap "cap_net_bind_service=+ep" /usr/bin/php8.0

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

EXPOSE 8000