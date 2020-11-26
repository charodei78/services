FROM alpine

RUN apk update
RUN apk add openrc --no-cache
RUN apk add vsftpd 
RUN apk add lftp

RUN { echo "password"; echo "password"; } | adduser user

COPY ./vsftpd.conf /
COPY ./ssl /etc/ssl

RUN touch /etc/vsftpd.chroot_list
RUN echo "set ssl:verify-certificate no" >> /etc/lftp.conf
RUN mkdir /var/ftp
RUN mkdir /var/ftp/pub
RUN chmod 2775 /var/ftp/pub

EXPOSE 21 20 21000

COPY ./start.sh /start.sh
CMD sh /start.sh
