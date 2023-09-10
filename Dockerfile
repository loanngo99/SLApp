FROM ubuntu:latest
# Install.
RUN export LANG=en_US.UTF-8 \
  && apt-get update \
  && apt-get -y install apache2

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log
RUN mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR

RUN \
sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/sources.list && \
apt-get update && \
apt-get -y upgrade && \
apt-get install -y build-essential && \
apt-get install -y sudo && \
apt-get install -y software-properties-common && \
apt-get install -y byobu curl git htop man unzip vim wget && \
rm -rf /var/lib/apt/lists/*
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y apache2 libapache2-mod-php8.1
RUN apt install -y unzip
RUN apt -y install php8.1
#RUN apt-get install -y php-cli php-common php-mbstring php-gd php-intl php-xml php-mysql php-zip php-curl php-xmlrpc
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mbstring php8.1-gd php8.1-intl php8.1-xml php8.1-mysql php8.1-zip php8.1-curl php8.1-xmlrpc
COPY . /var/www/html:rw
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod headers
RUN a2enmod rewrite

# Define working directory.
VOLUME [ "/var/www/html" ]
WORKDIR /var/www/html
# Define default command.
ENTRYPOINT [ "/usr/sbin/apache2" ]
CMD ["-D", "FOREGROUND"]
