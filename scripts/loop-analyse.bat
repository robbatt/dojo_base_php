:loop
    cls
    php composer.phar test
    php composer.phar analyse
    timeout /T 1
goto loop