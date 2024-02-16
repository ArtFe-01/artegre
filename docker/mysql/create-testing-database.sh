#!/usr/bin/env bash

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS artegre;
    GRANT ALL PRIVILEGES ON \`artegre%\`.* TO '$MYSQL_USER'@'%';
EOSQL
