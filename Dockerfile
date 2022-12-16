FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx/
RUN rm -rf /usr/share/nginx/public
COPY . /usr/share/nginx
RUN chmod -R 775 /usr/share/nginx/storage/*
RUN chmod -R 775 storage
RUN chmod -R ugo+rw storage
RUN ln -s public html
