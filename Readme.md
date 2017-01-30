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

## coverage / test reports
* `php composer.phar report` generates coverage and junit test reports

## looping tests / coverage reports
* `php composer.phar loop-test` runs tests in loop until cancelled (default: run every second, modify in `scripts/loop-test.sh/.bat`)
* `php composer.phar loop-test | grep Fail` less output for ubuntu/mac
* `php composer.phar loop-report` loops report generation (and test)
* use a browser plugin to refresh `reports/test_report.html` every second to receive your test status
* for windows use `loop-win-test.sh` and `loop-win-report.sh`
