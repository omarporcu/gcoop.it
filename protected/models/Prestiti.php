<?php

/**
 * This is the model class for table "tbl_prestiti".
 *
 * The followings are the available columns in table 'tbl_prestiti':
 * @property integer $id
 * @property string $causale
 * @property string $totale
 * @property string $n_rate
 * @property string $scadenza
 * @property string $data
 * @property string $societa
 * @property string $anagrafica
 * @property string $altro
 */
class Prestiti extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prestiti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_prestiti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('causale, totale, n_rate, societa, anagrafica', 'length', 'max'=>45),
			array('scadenza, data, altro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, causale, totale, n_rate, scadenza, data, societa, anagrafica, altro', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'causale' => 'Causale',
			'totale' => 'Totale',
			'n_rate' => 'Numero Rate',
			'scadenza' => 'Scadenza',
			'data' => 'Data',
			'societa' => 'Societa',
			'anagrafica' => 'Assegnatario',
			'altro' => 'Altro',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('causale',$this->causale,true);
		$criteria->compare('totale',$this->totale,true);
		$criteria->compare('n_rate',$this->n_rate,true);
		$criteria->compare('scadenza',$this->scadenza,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('altro',$this->altro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('scadenza','data'),
            ),
        );
    }
	
	protected function afterSave()
	{
		parent::afterSave();
		
		if($this->isNewRecord) {

			//echo "Nuovo Record";

			$rate = "1";
			$data = date('d/m/Y',strtotime($this->data));
			if (isset($this->n_rate) && $this->n_rate>0)
				$rate = $this->n_rate;

			//$dataplus = date('d/m/Y',strtotime($this->data."+1 month"));
			//echo "Data= ".$data."<br>";
	   		//echo "Data+= ".$dataplus;
	   		//Yii::app()->end();
			
			for ($i=0; $i < $rate; $i++) { 

				$rateprestito = new Rateprestito;
				$rateprestito->prestito=$this->id;
				$rateprestito->rata=$i+1;
				$rateprestito->importo=$this->totale/$rate;
				$rateprestito->pagata="da pagare";
				$rateprestito->data=date('d/m/Y',strtotime($this->data."+$i month"));
				$rateprestito->societa=$this->societa;
				$rateprestito->anagrafica=$this->anagrafica;
				
				$rateprestito->save(false);
				
			}
			
		} 
		
       /* if(!$rateprestito->save()) {
			echo "Prestito= ".$rateprestito->prestito;
			echo "<br>";
			echo "didn't work";
   			Yii::app()->end();
        }*/

		return parent::afterSave();
		
	}

}