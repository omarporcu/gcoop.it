<?php

class StatusBehavior extends ListBehavior 
{
    const PAGATO			= 1;
    const DAPAGARE			= 0;
    const SCADUTO			= 2;
 
    public function data()
    { 
        return array(
            self::PAGATO          => array('text' => 'Pagato', 'color' => 'green'),
            self::DAPAGARE        => array('text' => 'Da Pagare', 'color' => 'yellow'),  
            self::SCADUTO         => array('text' => 'Scaduto', 'color' => 'red'),  
        );     
    }
	
}
	
?>