# Light PHP ORM

It shows the fundamental concepts of TDD

## Requirements
php: '>=7':

## Docker commands:

```bash
docker-compose up
```

```bash
docker-compose down
``` 
## Instaling PHPUnit:

wget -O phpunit https://phar.phpunit.de/phpunit-8.phar

chmod +x phpunit

## Run test

```bash
./phpunit --bootstrap vendor/autoload.php tests/AbstractModelTest
```

```bash
./phpunit --bootstrap vendor/autoload.php --configuration="phpunit.xml"
```

Documentation: https://phpunit.de/getting-started/phpunit-8.html
