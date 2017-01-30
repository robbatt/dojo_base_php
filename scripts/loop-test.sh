#!/bin/bash
while [ true ] ; do
    sleep ${1:-0.5} ;
    php composer.phar test;
done