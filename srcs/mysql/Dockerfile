FROM alpine:latest

RUN apk update
RUN apk add mariadb mariadb-client bash 

COPY ./init_docker.sh .
COPY ./init_mysql.sh .
COPY wordpress.sql .

RUN chmod +x init_mysql.sh

EXPOSE 3306
CMD sh ./init_docker.sh
