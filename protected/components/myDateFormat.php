<?php
/**
 * DateFormater - converts date from/to SQL database (ISO 9075=>"yyyy-mm-dd" to/from dd.mm.yyyy.
 */

class myDateFormat extends CActiveRecordBehavior
{
        //.. array of columns that have dates to be converted
        public $dateColumns = array();

     /**
     * Convert from $dateFormat to ISO 9075 dates before saving
     */
        public function beforeSave($event)
		{
                foreach( $this->dateColumns as $date )
                {
                        $_dt = $this->Owner->{$date};
                        if(preg_match("/([0-9]{1,2}).([0-9]{1,2}).([0-9]{4})/", $_dt, $regs))
                                $_dt = $regs[3]."/".$regs[2]."/".$regs[1];
                        $this->Owner->{$date} = $_dt;
                }
                return parent::beforeSave($event);
        }

     /**
     * Converts ISO 9075 dates to $dateFormat after read from database
     */
        public function afterFind($event)
        {
                foreach( $this->dateColumns as $date )
                {
                        $_dt = $this->Owner->{$date};
                        if(preg_match("/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", $_dt, $regs))
                                $_dt = $regs[3]."/".$regs[2]."/".$regs[1];
                        $this->Owner->{$date} = $_dt;
                }
                return parent::afterFind($event);
        }
}