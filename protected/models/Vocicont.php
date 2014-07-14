<?php

/**
 * This is the model class for table "tbl_vocicont".
 *
 * The followings are the available columns in table 'tbl_vocicont':
 * @property integer $id
 * @property string $id_conteggio
 * @property string $tipologia
 * @property string $causale
 * @property string $importo
 */
class Vocicont extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_vocicont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_conteggio, tipologia, causale, importo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_conteggio, tipologia, causale, importo', 'safe', 'on'=>'search'),
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
			'id_conteggio' => 'Id Conteggio',
			'tipologia' => 'Tipologia',
			'causale' => 'Causale',
			'importo' => 'Importo',
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
		$criteria->compare('id_conteggio',$this->id_conteggio,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('causale',$this->causale,true);
		$criteria->compare('importo',$this->importo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByConteggio($id_conteggio)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_conteggio',$this->id_conteggio,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('causale',$this->causale,true);
		$criteria->compare('importo',$this->importo,true);
		
		$criteria->addCondition("id_conteggio=$id_conteggio");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vocicont the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getTotals($id)
	{
		$connection=Yii::app()->db;
		$command=$connection->createCommand("SELECT SUM(importo) FROM tbl_vocicont WHERE id_conteggio=$id");
		
		$amount=$command->queryScalar();
		
		return number_format($amount,2);
	}
}
