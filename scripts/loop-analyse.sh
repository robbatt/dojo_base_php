#!/bin/bash
while [ true ] ; do
    clear
    php composer.phar test
    php composer.phar analyse
    sleep ${1:-0.5}
done