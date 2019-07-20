FROM php:7.1.8-fpm

RUN apt-get update
RUN apt-get install -y \
        cron

RUN mkdir -p /usr/src/phpcron/
ADD src/ /usr/src/phpcron/
RUN chmod +x -R /usr/src/phpcron/

RUN touch /var/log/cron.log


COPY crontab /etc/cron.d/phpcrontab
RUN chmod +x /etc/cron.d/phpcrontab

RUN crontab /etc/cron.d/phpcrontab

CMD ["cron", "&&", "tail", "-f", "/var/log/cron.log"]

