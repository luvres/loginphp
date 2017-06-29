# Login PHP
-----
## Development Environment

### Download source
```
git clone https://github.com/luvres/loginphp.git
```
### PHPMailer
```
git clone https://github.com/PHPMailer/PHPMailer.git loginphp/PHPMailer
```
### Database MySQL (MariaDB)
```
docker run --name MariaDB \
-p 3308:3306 \
-e MYSQL_ROOT_PASSWORD=maria \
-d mariadb
```
```
docker exec -ti MariaDB mysql -uroot -pmaria
```

### Database PostgreSQL
```
docker run --name Postgres -h postgres \
-p 5432:5432 \
-e POSTGRES_PASSWORD=postgres \
-d postgres:alpine
```
```
docker exec -ti Postgres bash -c "psql -U postgres"
```

### Web Server PHP
```
docker run --rm --name Php -h php \
--link MariaDB:mariadb-host \
--link Postgres:postgres-host \
--link OracleXE:oraclexe-host \
--link SQLServer:sqlserver-host \
-p 800:80 \
-v $HOME/1uvr3z/loginphp:/var/www \
-ti izone/alpine:php
```
### Browser access
```
http://localhost:800
```
