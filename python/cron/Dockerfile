FROM python:3
# Update image
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get install -y cron postgresql-client

# Touch log file
RUN touch /var/log/cron.log

# Python script location and copy
RUN mkdir /src/
WORKDIR /src
COPY hello.py /src/hello.py
RUN chmod 0644 /src/hello.py

# Crontab conf and execution
COPY crontab /etc/cron.d/pyhello
RUN chmod 0644 /etc/cron.d/pyhello
ENV PYTHONUNBUFFERED 1

#
CMD cron -f
