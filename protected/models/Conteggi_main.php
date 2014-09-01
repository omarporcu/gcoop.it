<?php

/**
 * This is the model class for table "tbl_conteggi".
 *
 * The followings are the available columns in table 'tbl_conteggi':
 * @property integer $id
 * @property string $id_utente
 * @property string $anagrafica
 * @property string $targa
 * @property string $mansione
 * @property string $societa
 * @property string $citta
 * @property string $mese
 * @property string $anno
 * @property string $totale
 * @property string $bonifico
 * @property string $note
 */
class Conteggi_main extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_conteggi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_utente, anagrafica, targa, mansione, societa, citta, mese, anno, totale, bonifico', 'length', 'max'=>45),
			array('note', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_utente, anagrafica, targa, mansione, societa, citta, mese, anno, totale, bonifico, note', 'safe', 'on'=>'search'),
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
		'nomeanagrafica'=>array(self::BELONGS_TO,'Anagrafica','anagrafica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_utente' => 'Id Utente',
			'anagrafica' => 'Anagrafica',
			'targa' => 'Targa',
			'mansione' => 'Mansione',
			'societa' => 'Societa',
			'citta' => 'Citta',
			'mese' => 'Mese',
			'anno' => 'Anno',
			'totale' => 'Totale',
			'bonifico' => 'Bonifico effettuato il',
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
		$criteria->compare('id_utente',$this->id_utente,true);
		$criteria->compare('anagrafica',$this->anagrafica,true);
		$criteria->compare('targa',$this->targa,true);
		$criteria->compare('mansione',$this->mansione,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('citta',$this->citta,true);
		$criteria->compare('mese',$this->mese,true);
		$criteria->compare('anno',$this->anno,true);
		$criteria->compare('totale',$this->totale,true);
		$criteria->compare('bonifico',$this->bonifico,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conteggi_main the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/*public function getConcatened()
	{
		return $this->nomeanagrafica->cognome . ' ' . $this->nomeanagrafica->nome;
	}*/
	
	protected function afterSave()
	{
		parent::afterSave();
		
		$array = array(
			"Imponibile",
			"Provvigione",
			"Carburante",
			"Contributi",
			"RCA",
			"RCV",
			"Polizza vettoriale",
			"Prestiti/Anticipi",
			"Rata mezzo",
			"Costi corso sicurezza"
		);
		//var_dump($array);
		$c = count($array);
		
		if($this->isNewRecord) {

			for ($i=0; $i < $c; $i++) { 
	
				$conteggio = new Vocicont;
				$conteggio->id_conteggio=$this->id;
				$conteggio->tipologia=$array[$i];
				
				$conteggio->save(false);
				
			}
			
		} 
		
		return parent::afterSave();
		
	}
	

	
}
