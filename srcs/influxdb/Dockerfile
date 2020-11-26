FROM alpine:latest

RUN apk add --no-cache --upgrade bash

COPY ./influxdb/ /
COPY ./telegraf/ /

RUN telegraf -sample-config --input-filter docker --output-filter influxdb config > docker_telegraf.conf

RUN apk add supervisor
COPY ./supervisor.conf /etc/supervisord.conf

COPY start.sh /start.sh
EXPOSE 8086
CMD bash start.sh
