#!/bin/bash

# Setting path
root_path=$(cd $(dirname $0); cd ..; pwd)

PG_DB_DATABASE=$2
PG_DB_USERNAME=$4
PG_DB_PASSWORD=$6

# Database setting
echo '- Start update Database setting...'
cp ${root_path}/.env.example ${root_path}/.env

sed -i -e "s/PG_DB_DATABASE/${PG_DB_DATABASE}/g" ${root_path}/.env
sed -i -e "s/PG_DB_USERNAME/${PG_DB_USERNAME}/g" ${root_path}/.env
sed -i -e "s/PG_DB_PASSWORD/${PG_DB_PASSWORD}/g" ${root_path}/.env

echo '- End update Database setting'
