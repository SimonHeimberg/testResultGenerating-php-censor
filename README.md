To create log-data for tests of php-censor

Create logs
-----------

`composer install --prefer-source`

`version/of/phpunit --log-json ./log_out/phpunit_money.txt --log-junit ./log_out/phpunit_money_junit.xml`

omit --log-json ./log... when --log-json is not supported
