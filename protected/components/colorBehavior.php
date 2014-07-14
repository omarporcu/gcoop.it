<?php

class colorBehavior extends CActiveRecordBehavior
{
	//.. array of columns that have dates to be converted
    public $colorColumns = array();
	
    public function afterFind($event)
    {
            foreach( $this->colorColumns as $text )
            {
                    $txt = $this->Owner->{$text};
                    if($txt == "pagata")
                            $txt = "pagata";
                    if($txt == "d")
                            $txt = "da pagare";
                    $this->Owner->{$text} = $txt;

            }
            return parent::afterFind($event);
    }
	
}	
	
?>