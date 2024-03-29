![php-design-patterns](https://cloud.githubusercontent.com/assets/754861/23532839/235b0e82-ffae-11e6-85bd-fd5f10ffc318.png)

[![Latest Stable Version](https://poser.pugx.org/hyunk3l/php-design-patterns/v/stable)](https://packagist.org/packages/hyunk3l/php-design-patterns)
[![Total Downloads](https://poser.pugx.org/hyunk3l/php-design-patterns/downloads)](https://packagist.org/packages/hyunk3l/php-design-patterns)
[![License](https://poser.pugx.org/hyunk3l/php-design-patterns/license)](https://packagist.org/packages/hyunk3l/php-design-patterns)

## Just another collection of design patterns implementations in PHP

## Run Tests

* Run `./composer.phar install`
* Now launch UTs running `./vendor/bin/phpunit test/`

## Run PHP CS fixer

[https://github.com/FriendsOfPHP/PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

Install the tool:
```
mkdir tools
mkdir tools/php-cs-fixer
./composer.phar require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer
```

Run the tool:
```
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix test
```
