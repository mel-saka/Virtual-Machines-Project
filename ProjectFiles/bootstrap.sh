#!/bin/bash

# Update Ubuntu software packages.

debconf-set-selections <<< 'mysql-server mysql-server/root_password password pass'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password pass'
apt-get update
apt-get install mysql-server -y

mysqladmin -u root -ppass create test-db
mysql -u root -ppass test-db < /vagrant/test-db.sql
#echo "CREATE DATABASE test-db;" | mysql

# Then create a database user "webuser" with the given password.
#echo "CREATE USER 'use'@'localhost' IDENTIFIED BY 'pass';" | mysql

# Grant all permissions to the database user "webuser" regarding
# the "fvision" database that we just created, above.
#echo "GRANT ALL PRIVILEGES ON test-db.* TO 'use'@'localhost';" | mysql

#echo "GRANT ALL PRIVILEGES ON test-db.* TO 'use'@'localhost';" | mysql

#echo "flush privileges;" | mysql

# change bind address to allow connections from anywhere
#sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

# restart the sql service
#sudo service mysql restart
# We create a shell variable MYSQL_PWD that contains the MySQL root password

