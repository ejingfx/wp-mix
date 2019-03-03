#!/bin/bash

WP_MIX="wp-mix"
MYSQL_CONTAINER="wpmix_mysql_1"
WP_CONTAINER="wpmix_wp_1"

# BUILD DOCKER IMAGE
docker build -t $WP_MIX .

# BUILD CONTAINER
docker run --name $MYSQL_CONTAINER -e $MYSQL_ROOT_PASSWORD=root -d mysql:5.7
docker run --name $WP_CONTAINER --link $MYSQL_CONTAINER:mysql -p 8000:80 -d $WP_MIX