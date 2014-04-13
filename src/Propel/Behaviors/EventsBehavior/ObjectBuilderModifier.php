<?php

/**
* Behavior to trigger events in ZF2
*
* @author     Marshall House
* @author     Marshall House <marshall@4zend.com>
*/
class EventsBehavior_ObjectBuilderModifier
{    
    public function preSave($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function postSave($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function preInsert($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function postInsert($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function preUpdate($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function postUpdate($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function preDelete($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
    
    public function postDelete($builder) {
        $event = $builder->getTable()->getName() . '_'  . __FUNCTION__;
        
        return '
// fire "' . $event . '" event
\Propel\Model\StaticManager::getEventManager()->trigger(\'' . $event . '\', $this);
        ';
    }
}