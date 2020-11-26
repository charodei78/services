php-fpm7
sed -i  's/display_errors = Off/display_errors = On/g' /etc/php7/php.ini
nginx -g 'daemon off;'