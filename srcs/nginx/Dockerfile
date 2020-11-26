FROM alpine

RUN apk update
RUN apk add wget nginx curl gzip vim bash openssh openssl openrc
RUN rc-update add sshd
RUN apk add supervisor
RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
RUN mkdir -p /run/nginx

COPY ./srcs/config/supervisor.conf /etc/supervisord.conf
COPY ./srcs/config/localhost.conf /etc/nginx/sites-available/
COPY ./srcs/config/localhost.conf /etc/nginx/conf.d/default.conf
COPY ./srcs/config/sshd_config /etc/ssh/sshd_config
COPY ./srcs/localhost/ /www/


RUN ( echo "password"; echo "password" ) | adduser user

COPY srcs/ssl /etc/ssl
COPY srcs/start.sh .


EXPOSE 80 443 22

CMD bash start.sh