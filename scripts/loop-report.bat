:loop
    cls
    php composer.phar report
    timeout /T 1
goto loop