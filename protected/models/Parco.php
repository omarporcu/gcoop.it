<?php

/**
 * This is the model class for table "tbl_mezzi".
 *
 * The followings are the available columns in table 'tbl_mezzi':
 * @property integer $id
 * @property string $marca
 * @property string $modello
 * @property string $prezzo
 * @property string $rata
 * @property string $targa
 * @property string $immatricolazione
 * @property string $assicurazione
 * @property string $scadenza_assicurazione
 * @property string $scdenza_bollo
 * @property string $proprietario
 * @property string $assegnatario
 * @property string $utente
 * @property string $note
 */
class Parco extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mezzi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marca, modello, prezzo, rata, targa, proprietario, assegnatario, utente, assicurazione', 'length', 'max'=>45),
			array('immatricolazione, scadenza_assicurazione, scadenza_bollo, note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marca, modello, prezzo, rata, targa, immatricolazione, assicurazione, scadenza_assicurazione, scadenza_bollo, proprietario, assegnatario, utente, note', 'safe', 'on'=>'search'),
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
			'marca' => 'Marca',
			'modello' => 'Modello',
			'prezzo' => 'Prezzo',
			'rata' => 'Rata',
			'targa' => 'Targa',
			'immatricolazione' => 'Immatricolazione',
			'assicurazione' => 'Assicurazione',
			'scadenza_assicurazione' => 'Scadenza Assicurazione',
			'scadenza_bollo' => 'Scadenza Bollo',
			'proprietario' => 'Proprietario',
			'assegnatario' => 'Assegnatario',
			'utente' => 'Utente',
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
		$criteria->compare('marca',$this->marca,true);
		$criteria->compare('modello',$this->modello,true);
		$criteria->compare('prezzo',$this->prezzo,true);
		$criteria->compare('rata',$this->rata,true);
		$criteria->compare('targa',$this->targa,true);
		$criteria->compare('immatricolazione',$this->immatricolazione,true);
		$criteria->compare('assicurazione',$this->assicurazione,true);
		$criteria->compare('scadenza_assicurazione',$this->scadenza_assicurazione,true);
		$criteria->compare('scadenza_bollo',$this->scadenza_bollo,true);
		$criteria->compare('proprietario',$this->proprietario,true);
		$criteria->compare('assegnatario',$this->assegnatario,true);
		$criteria->compare('utente',$this->utente,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Parco the static model class
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
                	'dateColumns'=>array('immatricolazione', 'scadenza_assicurazione', 'scadenza_bollo'),            ),
        );
    }
}
