FROM techdivision/dnmp-debian:stretch

RUN apt-get update && \
        DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" php7.0-imap && \
        apt-get clean && \
        rm -rf /tmp/* /var/lib/apt/lists/*

# removing unneded stuff
RUN \
    rm /etc/supervisor.d/elasticsearch.ini && \
    rm /etc/supervisor.d/rabbitmq.ini && \
    rm /etc/supervisor.d/redis.ini && \
    rm /etc/supervisor.d/varnish.ini && \
    /usr/share/elasticsearch/bin/plugin remove analysis-phonetic && \
    /usr/share/elasticsearch/bin/plugin remove analysis-icu && \
    rm /var/lib/dpkg/info/elasticsearch.prerm && \
    DEBIAN_FRONTEND=noninteractive apt-get remove -f -y --purge \
            oracle-java8-installer oracle-java8-set-default \
            varnish \
            redis-server \
            rabbitmq-server \
            elasticsearch && \
    apt-get autoremove -y && \
    # cleanup
    apt-get clean && \
    rm -rf /tmp/* /var/lib/apt/lists/*