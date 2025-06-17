#!/bin/bash

wp core install --allow-root --url=$WP_URL --title=$WP_TITLE --admin_user=supervisor --admin_password=$WP_PASSWORD --admin_email=$WP_ADMIN;

wp theme install --allow-root https://downloads.wordpress.org/theme/twentytwentyone.2.5.zip --activate;