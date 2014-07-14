<?php

/**
 * This is the model class for table "tbl_documenti".
 *
 * The followings are the available columns in table 'tbl_documenti':
 * @property integer $id
 * @property string $id_anagrafica
 * @property string $tipologia
 * @property string $data_rilascio
 * @property string $ente_rilascio
 * @property string $numero_documento
 * @property string $scadenza
 * @property string $note
 */
class Documenti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_documenti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_anagrafica, tipologia, ente_rilascio, numero_documento, note', 'length', 'max'=>45),
			array('data_rilascio, scadenza', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_anagrafica, tipologia, data_rilascio, ente_rilascio, numero_documento, scadenza, note', 'safe', 'on'=>'search'),
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
			'anagrafica'=>array(self::BELONGS_TO,'Anagrafica','id_anagrafica'),
			'tipo'=>array(self::BELONGS_TO,'TipoDocumenti','tipologia')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_anagrafica' => 'Id Anagrafica',
			'tipologia' => 'Tipologia',
			'data_rilascio' => 'Data Rilascio',
			'ente_rilascio' => 'Ente Rilascio',
			'numero_documento' => 'Numero Documento',
			'scadenza' => 'Scadenza',
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
		$criteria->compare('id_anagrafica',$this->id_anagrafica,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('data_rilascio',$this->data_rilascio,true);
		$criteria->compare('ente_rilascio',$this->ente_rilascio,true);
		$criteria->compare('numero_documento',$this->numero_documento,true);
		$criteria->compare('scadenza',$this->scadenza,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByAnagrafica($prop)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_anagrafica',$this->id_anagrafica,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('data_rilascio',$this->data_rilascio,true);
		$criteria->compare('ente_rilascio',$this->ente_rilascio,true);
		$criteria->compare('numero_documento',$this->numero_documento,true);
		$criteria->compare('scadenza',$this->scadenza,true);
		$criteria->compare('note',$this->note,true);
		$criteria->addCondition("id_anagrafica=$prop");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documenti the static model class
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
                	'dateColumns'=>array('data_rilascio','scadenza'),
            ),
        );
    }
	
}
