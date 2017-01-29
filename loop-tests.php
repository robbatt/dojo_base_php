<?php
$sleepMilliseconds = 500;

while (true) {
    usleep($sleepMilliseconds * 1000);
    system('php composer.phar test');
}
