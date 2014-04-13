<?php

require_once('EventsBehavior/ObjectBuilderModifier.php');

class EventsBehavior extends Behavior
{
	protected $objectBuilderModifier;
	
	public function getObjectBuilderModifier() {
        if (is_null($this->objectBuilderModifier)) {
            $this->objectBuilderModifier = new EventsBehavior_ObjectBuilderModifier($this);
        }

        return $this->objectBuilderModifier;
    }
}