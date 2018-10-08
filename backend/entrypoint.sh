#!/bin/sh
set -e
if [ "$1" = 'php-fpm' ] || [ "$1" = 'bin/console' ]; then
    composer install
	chown -R www-data var public
fi
exec "/usr/bin/supervisord" "-n" "-c" "/etc/supervisord.conf"