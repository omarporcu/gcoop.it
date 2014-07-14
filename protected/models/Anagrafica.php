<?php

/**
 * This is the model class for table "tbl_anagrafica".
 *
 * The followings are the available columns in table 'tbl_anagrafica':
 * @property integer $id
 * @property string $nome
 * @property string $cognome
 * @property string $id_societa
 * @property string $data_nascita
 * @property string $regione_nascita
 * @property string $provincia_nascita
 * @property string $comune_nascita
 * @property string $c_fiscale
 * @property string $regione_residenza
 * @property string $provincia_residenza
 * @property string $comune_residenza
 * @property string $indirizzo_residenza
 * @property string $email
 * @property string $telefono
 * @property string $fax
 * @property string $cellulare
 * @property string $iban
 * @property string $note
 */
class Anagrafica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Anagrafica the static model class
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
		return 'tbl_anagrafica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cognome, id_societa, regione_nascita, provincia_nascita, comune_nascita, c_fiscale, regione_residenza, provincia_residenza, comune_residenza, indirizzo_residenza, email, telefono, fax, cellulare, iban', 'length', 'max'=>45),
			array('data_nascita, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, cognome, id_societa, data_nascita, regione_nascita, provincia_nascita, comune_nascita, c_fiscale, regione_residenza, provincia_residenza, comune_residenza, indirizzo_residenza, email, telefono, fax, cellulare, iban, note', 'safe', 'on'=>'search'),
			
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
			'societa'=>array(self::BELONGS_TO,'Societa','id_societa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'nome' => 'Nome',
			'cognome' => 'Cognome',
			'id_societa' => 'Società',
			'data_nascita' => 'Data Nascita',
			'regione_nascita' => 'Regione Nascita',
			'provincia_nascita' => 'Provincia Nascita',
			'comune_nascita' => 'Comune Nascita',
			'c_fiscale' => 'Cod. Fiscale',
			'regione_residenza' => 'Regione',
			'provincia_residenza' => 'Provincia',
			'comune_residenza' => 'Comune',
			'indirizzo_residenza' => 'Indirizzo',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'cellulare' => 'Cellulare',
			'iban' => 'Iban',
			'note' => 'Note',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cognome',$this->cognome,true);
		$criteria->compare('id_societa',$this->id_societa,true);
		$criteria->compare('data_nascita',$this->data_nascita,true);
		$criteria->compare('regione_nascita',$this->regione_nascita,true);
		$criteria->compare('provincia_nascita',$this->provincia_nascita,true);
		$criteria->compare('comune_nascita',$this->comune_nascita,true);
		$criteria->compare('c_fiscale',$this->c_fiscale,true);
		$criteria->compare('regione_residenza',$this->regione_residenza,true);
		$criteria->compare('provincia_residenza',$this->provincia_residenza,true);
		$criteria->compare('comune_residenza',$this->comune_residenza,true);
		$criteria->compare('indirizzo_residenza',$this->indirizzo_residenza,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('cellulare',$this->cellulare,true);
		$criteria->compare('iban',$this->iban,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchBySocieta($soc)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cognome',$this->cognome,true);
		$criteria->compare('id_societa',$this->id_societa,true);
		$criteria->compare('data_nascita',$this->data_nascita,true);
		$criteria->compare('regione_nascita',$this->regione_nascita,true);
		$criteria->compare('provincia_nascita',$this->provincia_nascita,true);
		$criteria->compare('comune_nascita',$this->comune_nascita,true);
		$criteria->compare('c_fiscale',$this->c_fiscale,true);
		$criteria->compare('regione_residenza',$this->regione_residenza,true);
		$criteria->compare('provincia_residenza',$this->provincia_residenza,true);
		$criteria->compare('comune_residenza',$this->comune_residenza,true);
		$criteria->compare('indirizzo_residenza',$this->indirizzo_residenza,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('cellulare',$this->cellulare,true);
		$criteria->compare('iban',$this->iban,true);
		$criteria->compare('note',$this->note,true);
		$criteria->addCondition("id_societa='$soc'");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('data_nascita'),
            ),
        );
    }
	
	public function getConcatened()
	{
		return $this->cognome . ' ' . $this->nome;
	}
		
}