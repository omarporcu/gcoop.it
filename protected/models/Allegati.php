<?php

/**
 * This is the model class for table "tbl_allegati".
 *
 * The followings are the available columns in table 'tbl_allegati':
 * @property integer $id
 * @property string $sezione
 * @property integer $idsezione
 * @property string $allegato
 * @property string $nome
 * @property string $descrizione
 * @property string $data_inserimento
 * @property string $privato
 * @property string $visibile
 */
class Allegati extends CActiveRecord
{

	public $allegato;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_allegati';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idsezione', 'numerical', 'integerOnly'=>true),
			array('sezione, allegato, nome, descrizione, privato, visibile', 'length', 'max'=>45),
			array('data_inserimento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sezione, idsezione, allegato, nome, descrizione, data_inserimento, privato, visibile', 'safe', 'on'=>'search'),
			array('allegato', 'file', 'types'=>'pdf'),
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
			'sezione' => 'Sezione',
			'idsezione' => 'Idsezione',
			'allegato' => 'Allegato',
			'nome' => 'Nome',
			'descrizione' => 'Descrizione',
			'data_inserimento' => 'Data Inserimento',
			'privato' => 'Privato',
			'visibile' => 'Visibile',
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
		$criteria->compare('sezione',$this->sezione,true);
		$criteria->compare('idsezione',$this->idsezione);
		$criteria->compare('allegato',$this->allegato,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descrizione',$this->descrizione,true);
		$criteria->compare('data_inserimento',$this->data_inserimento,true);
		$criteria->compare('privato',$this->privato,true);
		$criteria->compare('visibile',$this->visibile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Allegati the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function searchByDocumenti($sez,$idsez)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('sezione',$this->sezione,true);
		$criteria->compare('idsezione',$this->idsezione);
		$criteria->compare('allegato',$this->allegato,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descrizione',$this->descrizione,true);
		$criteria->compare('data_inserimento',$this->data_inserimento,true);
		$criteria->compare('privato',$this->privato,true);
		$criteria->compare('visibile',$this->visibile,true);
		$criteria->addCondition("sezione=$sez");
		$criteria->addCondition("idsezione=$idsez");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('data_inserimento'),
            ),
        );
    }

}
