#!/bin/bash

#    database_host: 127.0.0.1
#    database_port: null
#    database_name: cocorico_dev
#    database_user: cocorico_dev
#    database_password: cocorico_dev
#    mongodb_server: 'mongodb://localhost:27017'
#    mongodb_database_name: cocorico_dev

#if [ ! $# -eq 1 ] ; then
#	echo "Usage: '.dump.sh db_name'"
#	exit 1
#fi
#BASE=$1
BASE="cocorico_dev"
FILENAME="/home/moi/dev/sav/save.sql"
#USER=""
#PASS=""
USER="cocorico_dev"
PASS="cocorico_dev"
#while [ -z $USER ] ; do
#    read -p "Nom d'utilisateur: " USER
#done
#read -sp "Mot de passe: " PASS
mysqldump -u $USER --password=$PASS $BASE > $FILENAME
if [ $? = "0" ] ; then
    echo "Export of database : success"
else
    echo "Export of database : FAIL"
    exit 2
fi
