![php-design-patterns](https://cloud.githubusercontent.com/assets/754861/23532839/235b0e82-ffae-11e6-85bd-fd5f10ffc318.png)

[![Latest Stable Version](https://poser.pugx.org/hyunk3l/php-design-patterns/v/stable)](https://packagist.org/packages/hyunk3l/php-design-patterns)
[![Total Downloads](https://poser.pugx.org/hyunk3l/php-design-patterns/downloads)](https://packagist.org/packages/hyunk3l/php-design-patterns)
[![License](https://poser.pugx.org/hyunk3l/php-design-patterns/license)](https://packagist.org/packages/hyunk3l/php-design-patterns)

## Just another collection of design patterns implementations in PHP

## Requirements
- PHP 8.4.1+

## Setup
- Run `./composer.phar install`

## Run Tests
- Run `./composer.phar test`
- Run `./composer.phar test:coverage`

## Run Coding Standards
- Run `./composer.phar cs`
- Run `./composer.phar cs:fix`

## Run Static Analysis
- Run `./composer.phar stan`

## CI Pipeline (local)
- Run `./composer.phar ci`

## Contributing
- Create feature branches from `master`.
- Keep pattern folders mirrored in `src/<Category>/<Pattern>` and `test/<Category>/<Pattern>`.
- Include/maintain `README.md` in each pattern folder.
- Run `./composer.phar ci` before opening a PR.

## Project Conventions
- See `docs/PATTERN_STRUCTURE.md`.
