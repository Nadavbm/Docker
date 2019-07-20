FROM php:5.5-cli

MAINTAINER Nadav Ben Mazia nadavbm@outlook.com

RUN apt-get update && apt-get install -y --no-install-recommends cron

RUN mkdir -p /usr/src/phpcron/
ADD src/ /usr/src/phpcron/
RUN chmod +x -R /usr/src/phpcron/

RUN touch /var/log/cron.log

# Crontab conf and execution
COPY crontab /etc/cron.d/phpcrontab
RUN chmod +x /etc/cron.d/phpcrontab

RUN crontab /etc/cron.d/phpcrontab
CMD ["cron", "&&", "tail", "-f", "/var/log/cron.log"]

