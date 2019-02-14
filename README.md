# Docker LAMP Stack 
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

### Components:
* [Alpine](https://alpinelinux.org/)
* [Apache2](https://httpd.apache.org/)
* [PHP-FPM](http://php-fpm.org/)
* [MySQL](http://www.mysql.com/)

### SELinux hosts:
```sh
$ /usr/bin/setsebool -P httpd_can_network_connect 1
$ /usr/bin/setsebool -P httpd_can_network_connect_db 1
$ /usr/bin/setsebool -P mysql_connect_httpd 1
```
