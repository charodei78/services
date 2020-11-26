FROM alpine

RUN apk update && apk upgrade && apk add bash \
&& apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

COPY srcs/phpmyadmin /www
RUN apk add nginx
RUN adduser -D -g 'www' www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx

COPY srcs/localhost.conf /etc/nginx/sites-available/
COPY srcs/localhost.conf /etc/nginx/conf.d/default.conf

COPY srcs/start.sh .

EXPOSE 5000
CMD bash start.sh