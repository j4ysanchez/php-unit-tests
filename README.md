# php-unit-tests
Unit Testing Example

## How to Run
docker-compose build && docker-compose up -d
docker exec -it docker_server-web_1 /bin/bash

/var/www/html/symfony# ./setup.sh

## Running a Test
/var/www/html/symfony# php bin/phpunit –filter testCanCalculateTotal

## Running with Test Coverage
/var/www/html/symfony# export XDEBUG_MODE=coverage
/var/www/html/symfony# php bin/phpunit --coverage-text --filter CalculationTest

