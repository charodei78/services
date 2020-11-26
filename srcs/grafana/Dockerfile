FROM alpine

RUN apk update && apk add wget curl vim
RUN apk update && apk upgrade && apk add bash tar
RUN apk add --no-cache --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat

COPY start.sh /start.sh
COPY ./grafana /etc/grafana

RUN mkdir /var/lib/grafana 
RUN mkdir /var/log/grafana 

EXPOSE 3000

CMD sh ./start.sh