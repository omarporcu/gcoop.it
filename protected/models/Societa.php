<?php

/**
 * This is the model class for table "tbl_societa".
 *
 * The followings are the available columns in table 'tbl_societa':
 * @property integer $id
 * @property string $ragione_sociale
 * @property string $tipologia
 * @property string $logo
 * @property string $amministratore
 * @property string $regione
 * @property string $provincia
 * @property string $comune 
 * @property string $cap 
 * @property string $indirizzo
 * @property string $gruppo
 * @property string $email
 * @property string $telefono
 * @property string $fax
 * @property string $p_iva
 * @property string $c_fiscale
 * @property string $numero_iscrcc
 * @property string $regione_iscrcc
 * @property string $provincia_iscrcc
 * @property string $comune_iscrcc
 * @property string $data_iscrcc
 * @property string $note
 */
class Societa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Societa the static model class
	 */

	public $image;
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_societa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ragione_sociale, tipologia, logo, amministratore, regione, provincia, comune, cap, indirizzo, gruppo, email, telefono, fax, p_iva, c_fiscale, numero_iscrcc, regione_iscrcc, provincia_iscrcc, comune_iscrcc', 'length', 'max'=>45),
			array('data_iscrcc, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ragione_sociale, tipologia, logo, amministratore, regione, provincia, comune, cap, indirizzo, gruppo, email, telefono, fax, p_iva, c_fiscale, numero_iscrcc, regione_iscrcc, provincia_iscrcc, comune_iscrcc, data_iscrcc, note', 'safe', 'on'=>'search'),
			array('logo', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>TRUE, 'on'=>'insert,update'),
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
			'ragione_sociale' => 'Ragione Sociale',
			'tipologia' => 'Tipologia',
			'logo' => 'Logo',
			'amministratore' => 'Amministratore',
			'regione' => 'Regione',
			'provincia' => 'Provincia',
			'comune' => 'Comune',
			'cap' => 'CAP',
			'indirizzo' => 'Indirizzo',
			'gruppo' => 'Gruppo',
			'email' => 'Email',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'p_iva' => 'Partita Iva',
			'c_fiscale' => 'Codice Fiscale',
			'numero_iscrcc' => 'Numero Iscrizione',
			'regione_iscrcc' => 'Regione',
			'provincia_iscrcc' => 'Provincia',
			'comune_iscrcc' => 'Comune',
			'data_iscrcc' => 'Data',
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
		$criteria->compare('ragione_sociale',$this->ragione_sociale,true);
		$criteria->compare('tipologia',$this->tipologia,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('amministratore',$this->amministratore,true);
		$criteria->compare('regione',$this->regione,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('comune',$this->comune,true);
		$criteria->compare('cap',$this->cap,true);
		$criteria->compare('indirizzo',$this->indirizzo,true);
		$criteria->compare('gruppo',$this->gruppo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('p_iva',$this->p_iva,true);
		$criteria->compare('c_fiscale',$this->c_fiscale,true);
		$criteria->compare('numero_iscrcc',$this->numero_iscrcc,true);
		$criteria->compare('regione_iscrcc',$this->regione_iscrcc,true);
		$criteria->compare('provincia_iscrcc',$this->provincia_iscrcc,true);
		$criteria->compare('comune_iscrcc',$this->comune_iscrcc,true);
		$criteria->compare('data_iscrcc',$this->data_iscrcc,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('data_iscrcc'),
            ),
        );
    }

}