# Dojo Base Project (PHP)

## setup
* `php composer.phar install`

## test
* `php composer.phar test` runs all unit tests under `src`
* `php composer.phar test-loop` runs tests in loop until cancelled (default: run every 500 milliseconds, modify in `loop-tests.php`)

## coverage / test reports
* `php composer.phar test-reports` generates coverage and junit test reports