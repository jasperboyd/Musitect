FROM nginx:1.15.12-alpine

COPY nginx.conf /etc/nginx/
COPY ./ssl /etc/nginx/ssl

RUN apk update \
    && apk upgrade \
    && apk add --no-cache openssl \
    && apk add --no-cache bash \
    && adduser -D -H -u 1000 -s /bin/bash www-data

RUN echo "upstream php-upstream { server php-fpm:9000; }" > /etc/nginx/conf.d/upstream.conf \
    && rm /etc/nginx/conf.d/default.conf

ADD ./start.sh /opt/start.sh
RUN sed -i 's/\r//g' /opt/start.sh
CMD ["/bin/bash", "/opt/start.sh"]

EXPOSE 80 443
