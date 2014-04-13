zpropel
==========

Propel ORM module for Zend Framework 2

### Install Via Composer

`"require": { "4zend/zpropel": "dev-master" }`

### Get Started

View the demo directory for an example project and then create your project directory at: `data/zpropel/proxy`

Build your project like this: `cd ~/zf2-install/public`, `php index.php propel-gen`

### Usage

Once your project is "built" you can access the classes from anywhere using the "Zpropel" namespace. 

i.e. `$author = new \Zpropel\Author();`

### Events

Zpropel comes with a Propel behavior designed to trigger Propels "hooks" as ZF2 EventManager events.

i.e. Observe a shared event

    $eventManager->getSharedManager()->attach('Zpropel\Model\StaticManager', 'author_preSave', function($e){
        $author = $e->getTarget();
        // do something
    }, 100);`
