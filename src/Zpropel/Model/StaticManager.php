<?php

namespace Zpropel\Model;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManager;

final class StaticManager
{
    /**
    * @var ServiceLocatorInterface
    */
    static private $_serviceLocator = null;
    
    /**
    * @var EventManagerInterface
    */
    static private $_events;
    
    /**
    * Set service locator
    *
    * @param ServiceLocatorInterface $serviceLocator
    * @return void
    */
    public static function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        self::$_serviceLocator = $serviceLocator;
        
        return;
    }
    
    /**
    * Get service locator
    *
    * @return ServiceLocatorInterface
    */
    public static function getServiceLocator()
    {
        return self::$_serviceLocator;
    }
    
    /**
    * Set the event manager instance used by this context
    *
    * @param  EventManagerInterface $events
    * @return void
    */
    public static function setEventManager(EventManagerInterface $events)
    {
        $identifiers = array(__CLASS__, 'zpropel');
        $events->setIdentifiers($identifiers);
        
        self::$_events = $events;
        
        return;
    }
    
    /**
    * Retrieve the event manager
    *
    * Lazy-loads an EventManager instance if none registered.
    *
    * @return EventManagerInterface
    */
    public static function getEventManager()
    {
        if (!self::$_events instanceof EventManagerInterface) {
            self::setEventManager(new EventManager());
        }
        return self::$_events;
    }
}
