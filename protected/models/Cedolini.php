<?php

/**
 * This is the model class for table "tbl_cedolini".
 *
 * The followings are the available columns in table 'tbl_cedolini':
 * @property integer $id
 * @property string $anagrafica
 * @property string $societa
 * @property string $mese
 * @property string $anno
 * @property string $g_lavorati
 * @property string $importo
 * @property string $data
 * @property string $note
 */
class Cedolini extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cedolini';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('anagrafica, societa, mese, anno, g_lavorati, importo, data, note', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, anagrafica, societa, mese, anno, g_lavorati, importo, data, note', 'safe', 'on'=>'search'),
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
			'anagrafica' => 'Anagrafica',
			'societa' => 'Società',
			'mese' => 'Mese',
			'anno' => 'Anno',
			'g_lavorati' => 'Giorni Lavorati',
			'importo' => 'Importo',
			'data' => 'Data',
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
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('mese',$this->mese,true);
		$criteria->compare('anno',$this->anno,true);
		$criteria->compare('g_lavorati',$this->g_lavorati,true);
		$criteria->compare('importo',$this->importo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByAnagrafica($prop,$porp,$id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$prop=preg_replace('/\s+/', ' ', $prop);
		$prop=ltrim(rtrim($prop));
		$porp=preg_replace('/\s+/', ' ', $porp);
		$porp=ltrim(rtrim($porp));
		
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('mese',$this->mese,true);
		$criteria->compare('anno',$this->anno,true);
		$criteria->compare('g_lavorati',$this->g_lavorati,true);
		$criteria->compare('importo',$this->importo,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('note',$this->note,true);

		$criteria->addCondition("anagrafica='$prop' OR anagrafica='$porp' OR anagrafica='$id'");
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cedolini the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
