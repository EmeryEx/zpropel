zpropel
==========

Propel ORM module for Zend Framework 2

### Install Via Composer

`"require": { "4zend/zpropel": "dev-master" }`

### Get Started

View the demo directory for an example project and then create your project files at: `data/zpropel/proxy`

* Add "Zpropel" to the modules key in config/application.config.php
* Write your project files (schema.xml, runtime-conf.xml, build.properties) in data/zpropel/proxy
* CD to your ZF2 application's public/ directory and run: `php index.php propel-gen`

### Usage

Once your project is "built" you can access the classes from anywhere using the "Zpropel" namespace. 

i.e. `$author = new \Zpropel\Author();`

### Events

Zpropel comes with a Propel behavior designed to trigger Propel "hooks" as ZF2 EventManager events.

i.e. Observe a shared event

    $eventManager->getSharedManager()->attach('zpropel', 'author_preSave', function($e){
        $author = $e->getTarget();
        // do something
    }, 100);`
