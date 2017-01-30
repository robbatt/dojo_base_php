# Dojo Base Project (PHP)

## setup
* install php 7.0 ([manual](http://php.net/manual/de/install.php))
* download `composer.phar` ( from [getcomposer.org](https://getcomposer.org/download/))
* place `composer.phar` in project root
* run `php composer.phar install`
* **Windows** requires enabling `php_mbstring.dll` in php.ini (run php --ini)
* **Ubuntu** requires installing `apt-get install php7.0-mbstring php7.0-xml`

## test
* `php composer.phar test` runs all unit tests under `src`
* `php composer.phar test-loop` runs tests in loop until cancelled (default: run every 500 milliseconds, modify in `loop-tests.php`)
* `php composer.phar test-loop | grep Fail` less output for ubuntu/mac

## coverage / test reports
* `php composer.phar test-reports` generates coverage and junit test reports