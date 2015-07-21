ZfSnapPhpDebugBar
=================

PHP Debug Bar module for Zend Framework 2

Version 0.9.1 Created by Witold Wasiczko and modified by BabyDraz

![PHP Debug Bar Messages](http://www.psd2html.pl/public/ZfSnapPhpDebugBar/ZfSnapPhpDebugBar1.png)

How to install?
---------------
By [composer.json](https://getcomposer.org/)
```json
{
    "require": {
        "snapshotpl/zf-snap-php-debug-bar": "dev-master"
    }
}
```

run `composer update` and add module `ZfSnapPhpDebugBar` to ZF2 `application.config.php`.

You need also copy all files from `vendor/maximebf/debugbar/src/DebugBar/Resources/` into `public/DebugBar/Resources/`.

Features
--------

* All [PHP Debug Bar](http://phpdebugbar.com/) features + additional info about ZF2 application:
  * Log and debug directly to Debug Bar,
  * Check request variables ($_POST, $_GET, $_SERVER, $_COOKIE),
  * Use timeline to see time between common events,
  * Catch exceptions,
  * Preview config and application config,
  * Profile SQL queries,
  * Details about current route,
  * Memory usage,
  * Total request duration,
  * and [more](http://phpdebugbar.com/)...!
* Ready to use - just install via composer.json!
* easy configurable via module config,

How to use `Message` tab?
-----------------------------

By function:

```php
debugbar_log('ZfSnapPhpDebugBar is awesome!');
```

By static method:

```php
\ZfSnapPhpDebugBar\Module::log('ZfSnapPhpDebugBar is awesome!');
```

By `Zend\Log`:

```php
$writer = $sm->get('ZfSnapPhpDebugBar\Log\Writer\PhpDebugBar');
$log = new \Zend\Log\Logger();
$log->addWriter($writer);
$log->info('ZfSnapPhpDebugBar is awesome!');
```

Directly by DebugBar object from ServiceManager:
```php
$debugbar = $sm->get('debugbar');
$debugbar['messages']->addMessage('ZfSnapPhpDebugBar is awesome!'));
```

How to use `Timeline` tab?
-----------------------------

By function:

```php
debugbar_startMeasure('ZfSnapPhpDebugBar', 'ZfSnapPhpDebugBar is awesome!');
sleep(2);
debugbar_stopMeasure('ZfSnapPhpDebugBar');
```

By static method:

```php
\ZfSnapPhpDebugBar\Module::startMeasure('ZfSnapPhpDebugBar', 'ZfSnapPhpDebugBar is awesome!');
sleep(2);
\ZfSnapPhpDebugBar\Module::stopMeasure('ZfSnapPhpDebugBar');
```

Directly by DebugBar object from ServiceManager:
```php
$debugbar = $sm->get('debugbar');
$debugbar['time']->startMeasure('ZfSnapPhpDebugBar', 'ZfSnapPhpDebugBar is awesome!');
sleep(2);
$debugbar['time']->stopMeasure('ZfSnapPhpDebugBar');
```

How to config?
--------------
Overwrite module config:
```php
<?php

return array(
    'php-debug-bar' => array(

        // Enables/disables PHP Debug Bar
        'enabled' => true,

        // ServiceManager keys to inject collectors
        // http://phpdebugbar.com/docs/data-collectors.html
        'collectors' => array(),

        // ServiceManager key to inject storage
        // http://phpdebugbar.com/docs/storage.html
        'storage' => null,
    ),
);
```

![PHP Debug Bar Timeline](http://www.psd2html.pl/public/ZfSnapPhpDebugBar/ZfSnapPhpDebugBar2.png)

![PHP Debug Bar Request](http://www.psd2html.pl/public/ZfSnapPhpDebugBar/ZfSnapPhpDebugBar3.png)

![PHP Debug Bar Config](http://www.psd2html.pl/public/ZfSnapPhpDebugBar/ZfSnapPhpDebugBar4.png)

![PHP Debug Bar Route](http://www.psd2html.pl/public/ZfSnapPhpDebugBar/ZfSnapPhpDebugBar5.png)
