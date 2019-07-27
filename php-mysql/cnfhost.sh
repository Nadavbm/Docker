#!/bin/sh
mkdir -p /data/mapphp/{web,sql}

docker build -t mappphp:1.0 -f web/Dockerfile web/
