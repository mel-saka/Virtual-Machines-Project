apt-get update

export MYSQL_PWD='Dpassword'

echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
apt-get -y install mysql-server
service mysql start
echo "CREATE DATABASE db;" | mysql

echo "CREATE USER 'adminUser'@'%' IDENTIFIED BY 'pass';" | mysql

echo "GRANT ALL PRIVILEGES ON db.* TO 'adminUser'@'%'" | mysql

export MYSQL_PWD='pass'

cat /vagrant/db.sql | mysql -u adminUser db


sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

service mysql restart
