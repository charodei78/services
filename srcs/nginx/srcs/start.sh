mkdir /etc/nginx/sites-enabled/
ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/localhost.conf
ssh-keygen -A
/usr/bin/supervisord -c /etc/supervisord.conf

