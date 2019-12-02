#Require
php: '>=7':

#Docker commands:
docker-compose up
docker-compose down

#Instaling PHPUnit:
wget -O phpunit https://phar.phpunit.de/phpunit-8.phar
chmod +x phpunit

#run test
./phpunit --bootstrap vendor/autoload.php tests/AbstractModelTest
./phpunit --bootstrap vendor/autoload.php --configuration="phpunit.xml"

Documentation: https://phpunit.de/getting-started/phpunit-8.html
