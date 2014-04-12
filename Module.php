<?php

namespace Propel;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\ModuleManager;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
     public function init(ModuleManager $moduleManager) {
          // setup the autoloading
          require_once 'vendor/autoload.php';

          // setup Propel
          include 'data/propel/proxy/generated-conf/config.php';
     }

     public function getAutoloaderConfig()
     {
         return array(
             'Zend\Loader\StandardAutoloader' => array(
                 'namespaces' => array(
                     __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                 ),
             ),
         );
     }

     public function getConfig()
     {
         return array();
     }
}
