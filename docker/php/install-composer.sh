#!/bin/sh

EXPECTED_SIGNATURE=$(wget -q -O - https://composer.github.io/installer.sig)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet --install-dir=/usr/local/bin --filename=composer
RESULT=$?
rm composer-setup.php
composer global require "codeception/codeception=2.4.2"
composer global require "codeception/specify=*"
composer global require  "codeception/verify=*"
composer global require se/selenium-server-standalone
ln -s /composer/vendor/bin/codecept    /usr/local/bin/codecept
ln -s /composer/vendor/bin/phpunit    /usr/local/bin/phpunit
ln -s /composer/vendor/bin/selenium-server-standalone    /usr/local/bin/selenium-server-standalone
wget -N http://chromedriver.storage.googleapis.com/2.10/chromedriver_linux64.zip -P /usr/local/bin/
unzip /usr/local/bin/chromedriver_linux64.zip -d /usr/local/bin
chmod +x /usr/local/bin/chromedriver
exit $RESULT
