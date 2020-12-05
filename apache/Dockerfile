FROM httpd:alpine

# Uruchamiamy odpowiednie moduły, by moc zrobic ProxyPass w Apache2
RUN sed -i \
        -e 's/^#\(LoadModule .*mod_proxy_http.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_proxy.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_rewrite.so\)/\1/' \
        -e 's/^#\(LoadModule .*mod_proxy_fcgi.so\)/\1/' \
        conf/httpd.conf

RUN echo Include conf/custom.conf | tee -a /usr/local/apache2/conf/httpd.conf
COPY apache/custom.conf /usr/local/apache2/conf/custom.conf
