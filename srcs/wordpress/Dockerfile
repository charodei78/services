FROM alpine

RUN apk update && apk upgrade && apk add bash wget tar \
&& apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session


RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN mv /wordpress /www 

COPY srcs/wp-config.php /www/wp-config.php

COPY srcs/start.sh .

EXPOSE 5050
CMD bash start.sh