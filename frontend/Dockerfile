FROM node:8.12-alpine
RUN set -x \
	&& addgroup -g 82 -S www-data \
	&& adduser -u 82 -D -S -G www-data www-data
RUN mkdir -p /var/www/frontend/node_modules
COPY . /var/www/frontend
COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

WORKDIR /var/www/frontend

EXPOSE 4200
ENTRYPOINT ["entrypoint.sh"]
CMD ["npm"]