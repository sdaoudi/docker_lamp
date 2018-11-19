FROM mysql:5.7
MAINTAINER Stefan Durubala, durubalastefan@gmail.com

COPY ./configs/my.cnf /etc/mysql/conf.d/my.cnf
COPY ./configs/users.sql /docker-entrypoint-initdb.d/
#RUN touch /var/log/mysql/slow.log
#  && chgrp mysql /var/log/mysql/slow.log

EXPOSE 3306
CMD ["mysqld"]
