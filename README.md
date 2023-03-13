# Laravel-PHP-Codesniffer-Config

This is a example configuration of PHP_Codesniffer for a laravel app.

## Installation

1. Run `composer require --dev squizlabs/php_codesniffer`.  
   For laravel sail run `sail composer require --dev squizlabs/php_codesniffer`.
2. Make sure the following requirements are added. `ext-tokenizer`, `ext-xmlwriter`, `ext-simplexml`.
3. Now you can run `php artisan phpcs:scan` and `php artisan phpcs:fix` to test and fix any errors.
