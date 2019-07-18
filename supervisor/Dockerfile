FROM centos:7

MAINTAINER Nadav Ben Mazia nadavbm@outlook.com

ENV SUPERVISOR_VERSION=4.0.2

RUN \
    yum install -y epel-release; \
    yum install -y \
    python-pip \
    sudo && \
  easy_install pip; \
  pip install supervisor==${SUPERVISOR_VERSION}

COPY supervisord.conf /etc/

CMD ["/usr/bin/supervisord","--configuration=/etc/supervisord.conf"]
