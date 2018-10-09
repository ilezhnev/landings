#!/bin/sh
set -e
if [ "$1" = 'npm' ]; then
    npm rebuild node-sass
    npm install
    npm run build
fi
exec "$@" "run" "start"