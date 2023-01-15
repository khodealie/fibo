FROM ubuntu:22.04
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -yq --no-install-recommends \
    software-properties-common apt-utils zip curl
RUN apt-get update && apt-get install -yq gpg-agent && add-apt-repository ppa:ondrej/php
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt install -yq --no-install-recommends php8.1
RUN DEBIAN_FRONTEND=noninteractive apt install -yq php8.1-xml php8.1-mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /fibo
COPY . .
RUN composer install
CMD ["php","/fibo/index.php"]