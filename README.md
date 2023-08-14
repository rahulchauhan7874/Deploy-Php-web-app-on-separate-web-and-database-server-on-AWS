# Deploy PHP Web Application on separate Web Server and Databse Server on AWS Cloud

## Both EC2 Instance Creation :
![image](https://github.com/rahulchauhan7874/Deploy-Php-web-app-on-separate-web-and-database-server-on-AWS/assets/108551570/40598184-22ca-4d45-ad23-eab32bf40244)


## Set-up the Web Server :
### Step-1 : ssh the web server using ssh client.
![image](https://github.com/rahulchauhan7874/Deploy-Php-web-app-on-separate-web-and-database-server-on-AWS/assets/108551570/e364856d-a3f1-4b5d-9f7c-1352e3ef0a50)

### Step-2 : Php and Apache Web Server Installation :

#### Installation of PHP :

```bash
dnf install php8.1
```
![image](https://github.com/rahulchauhan7874/Deploy-Php-web-app-on-separate-web-and-database-server-on-AWS/assets/108551570/d55558ab-6aaf-428e-b1ff-aaeb9dcef456)

#### Check the version of PHP :
```bash
php -v
```
![image](https://github.com/rahulchauhan7874/Deploy-Php-web-app-on-separate-web-and-database-server-on-AWS/assets/108551570/10630653-153c-4366-9352-2fa736301d7e)

#### Install the php-mysqlnd driver so that your php code can connect with MySQL database :
```bash
dnf install php8.1-mysqlnd.x86.64
```

#### Start the PHP-FPM Process :
```bash
systemctl start php-fpm
```

#### Confirm that PHP-FPM is running or not :
```bash
systemctl status php-fpm
```

#### Installation of Apache Web Server : When you install php, by default it will install Apache/httpd Web Server :

#### Check version of Apache
```bash
httpd -v
```

#### Start Apache Web Server :
```bash
systemctl start httpd
```

#### Check status of Apache Web Server :
```bash
systemctl status httpd
```





## Login Database Server
![image](https://github.com/rahulchauhan7874/Deploy-Php-web-app-on-separate-web-and-database-server-on-AWS/assets/108551570/8e9814e3-16d9-4696-b85c-8cf2be01febe)


### Installation of MySQL Database :
#### Get the MySQL package :
```bash
wget https://dev.mysql.com/get/mysql80-community-release-el9-1.noarch.rpm -y
```

#### 
