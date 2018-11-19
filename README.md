# Docker LAMP Stack 
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) [![Build Status](https://travis-ci.com/meek424/docker_lamp.svg?token=r9jhXnqYLVpChFEuk4e1&branch=master)](https://travis-ci.com/meek424/docker_lamp)

### Components:
* [Alpine](https://alpinelinux.org/)
* [Apache2](https://httpd.apache.org/)
* [PHP-FPM](http://php-fpm.org/)
* [MySQL](http://www.mysql.com/)

### SELinux docker hosts:
```sh
$ /usr/bin/setsebool -P httpd_can_network_connect 1
$ httpd_can_network_connect_db 1
$ mysql_connect_httpd 1
```
