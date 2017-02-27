# building-websites-with-php



### Awesome Slim

https://github.com/xssc/awesome-slim


### Use composer 

composer init

composer require [vendor/package]

composer require slim/slim

composer require twig/twig

composer require slim/views 

### named routes
```php
$app->get('/contact', function () use($app) {
   $app->render('contact.twig');
})->name('contact');
```