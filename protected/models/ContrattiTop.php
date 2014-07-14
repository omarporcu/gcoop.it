<?php

/**
 * This is the model class for table "tbl_contratti".
 *
 * The followings are the available columns in table 'tbl_contratti':
 * @property integer $id
 * @property string $ncontratto
 * @property string $id_utente
 * @property string $utente
 * @property string $societa
 * @property string $tipologia
 * @property string $data_inizio
 * @property string $data_fine
 * @property string $ruolo
 * @property string $provvigione
 * @property string $note
 */
class ContrattiTop extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_contratti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ncontratto, id_utente, utente, societa, tipologia, ruolo, provvigione', 'length', 'max'=>45),
			array('data_inizio, data_fine, note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ncontratto, id_utente, utente, societa, tipologia, data_inizio, data_fine, ruolo, provvigione, note', 'safe', 'on'=>'search'),
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
			'ncontratto' => 'Numero Contratto',
			'id_utente' => 'Id Utente',
			'utente' => 'Utente',
			'societa' => 'Societa',
			'tipologia' => 'Tipologia',
			'data_inizio' => 'Data Inizio',
			'data_fine' => 'Data Fine',
			'ruolo' => 'Ruolo',
			'provvigione' => 'Provvigione',
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
		$criteria->compare('ncontratto',$this->ncontratto,true);
		$criteria->compare('id_utente',$this->id_utente,true);
		$criteria->compare('utente',$this->utente,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('data_inizio',$this->data_inizio,true);
		$criteria->compare('data_fine',$this->data_fine,true);
		$criteria->compare('ruolo',$this->ruolo,true);
		$criteria->compare('provvigione',$this->provvigione,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContrattiTop the static model class
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
                	'dateColumns'=>array('data_inizio', 'data_fine',),
            ),
        );
    }
	
}
