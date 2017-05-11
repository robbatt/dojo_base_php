#!/bin/bash
while [ true ] ; do
    clear
    php composer.phar report
    sleep ${1:-0.5}
done