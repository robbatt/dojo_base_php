:loop
    cls
    php composer.phar test
    timeout /T 1
goto loop