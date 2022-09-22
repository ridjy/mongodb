symfony 4.4 avec mongodb
PHP7.4

download php mongo db extension and configure it into php.ini
down in pecl and copy dll to ext/

composer require alcaeus/mongo-php-adapter
composer require doctrine/mongodb-odm-bundle

si erreur mongodb just restart PHP FPM
