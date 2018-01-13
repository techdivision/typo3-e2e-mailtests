# TYPO3 8.7 setup for automated mail tests

This repository contains a fully configured environment for TYPO3 to run mail tests with Codeception against an imap server.
Log in to the TYPO3 instance with admin/password at http://barcamp.test/typo3/

## Setting up the project

After cloning the repository, run the setup script to add the configured IP for to your loopback device

```
composer run setup
```

or run `sudo ifconfig lo0 alias 10.0.0.171 255.255.255.0` manually.

Add the hostname/ip mapping to your /etc/hosts file 
```
10.0.0.171 barcamp.test
```
or use `composer install` and the post-install-cmd to do that.


Finally, run 
```
composer run install-project
```
to install the dependencies for TYPO3 and Codeception


## The containers

Start the containers with docker-compose, have a look at the docker-compose.yml for additional information and optional containers

```
docker-compose up -d
```

TYPO3 can now be accessed at http://barcamp.test/, a database dump will be automatically imported when the MySQL container is initialized.
 

## Running the tests

The imap tests require the php-imap module. This behaves buggy when installed via Homebrew on OSX, thus the web container is also used for executing Codeception.   

```
docker exec -it barcamp_web bash
```

You should end up in `/var/www/mailtests` where you can run the tests with chrome and firefox like so:

### Chrome node in a selenium hub / http://10.0.0.171:4444/grid/console
```
./vendor/bin/codecept run acceptance --env local,chrome  -vv
```

### Firefox node in a selenium hub / http://10.0.0.171:4444/grid/console
```
./vendor/bin/codecept run acceptance --env local,firefox  -vv
```

### Standalone chrome / http://10.0.0.171:4446/wd/hub/static/resource/hub.html
```
./vendor/bin/codecept run acceptance --env local,chrome-standalone  -vv
```


### Standalone firefox / http://10.0.0.171:4445/wd/hub/static/resource/hub.html
```
./vendor/bin/codecept run acceptance --env local,firefox-standalone  -vv
```


`--env local,BROWSER` merges the two configuration files from `tests/_envs`, so local could also be switched against a configuration with an external web host and imap server. 