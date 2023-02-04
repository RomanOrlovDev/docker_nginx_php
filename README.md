# docker_nginx_php

This is an example of nginx and php7 with xdebug enabled, so you can start debug session with PHPStorm, 
put a breakpoint in ./public/index.php and stop there.

If you under WSL than you need to specify client_host as `host.docker.internal` inside xdebug.ini file. 
See ./docker/php/xdebug.ini file for details.

After changes in any php config file (e.g. `./docker/php/xdebug.in`) it needs to be restarted. Since we are using php-fpm container here,
we need to reload php-fpm not the web server:

inside php container:

```
ps aux -- find master php-fpm process
kill -USR2 {number_of_master_process}
```

Run:

```docker compose up -d```

Then check if two services are run and their status is *Up*:

```docker ps```

Put breakpoint in ./docker/public/index.php. 
Create remote debug connection in PHPStorm. 
It should be enough for the debugger to stop.


When `docker compose up` executed to profile you have to run
```
sudo chmod 777 profile 
```
manually since docker compose volume persists root 755 permission mode and does not allow to change it during starting docker container (as soon as I know).

Check `profiler` branch to get xdebug profiling feature.