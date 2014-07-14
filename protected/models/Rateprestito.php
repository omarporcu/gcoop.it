<?php

/**
 * This is the model class for table "tbl_rateprestito".
 *
 * The followings are the available columns in table 'tbl_rateprestito':
 * @property integer $id
 * @property string $prestito
 * @property string $societa
 * @property string $anagrafica
 * @property string $rata
 * @property string $importo
 * @property string $data
 * @property string $pagata
 * @property string $note
 */
class Rateprestito extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rateprestito';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('prestito, societa, anagrafica, rata, importo, pagata', 'length', 'max'=>45),
			array('data, note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, prestito, societa, anagrafica, rata, importo, data, pagata, note', 'safe', 'on'=>'search'),
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
			'prest'=>array(self::BELONGS_TO,'Prestiti','prestito'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'prestito' => 'Prestito',
			'societa' => 'Societa',
			'anagrafica' => 'Anagrafica',
			'rata' => 'Rata',
			'importo' => 'Importo',
			'data' => 'Data',
			'pagata' => 'Pagata',
			'note' => 'Note',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('prestito',$this->prestito,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('rata',$this->rata,true);
		$criteria->compare('importo',$this->importo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('pagata',$this->pagata,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByPrestiti($prest)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		//$prest = (string) $prest;
		
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('prestito',$this->prestito,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('rata',$this->rata,true);
		$criteria->compare('importo',$this->importo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('pagata',$this->pagata,true);
		$criteria->compare('note',$this->note,true);
		$criteria->addCondition("prestito=$prest");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rateprestito the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('data'),
            ),
            'status'=>array(
				'class'=>'application.components.colorBehavior',
				'colorColumns'=>array('pagata'),
			)
        );
    }
	
	public function getTotals($id)
	{
		$connection=Yii::app()->db;
		$command=$connection->createCommand("SELECT SUM(importo) FROM tbl_rateprestito WHERE prestito=$id AND pagata LIKE '%pagare%'");
		
		return "Totali: ".$amount=$command->queryScalar();
	}
}
