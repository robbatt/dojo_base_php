#!/bin/bash
while [ true ] ; do
    clear
    php composer.phar test
    sleep ${1:-0.5}
done