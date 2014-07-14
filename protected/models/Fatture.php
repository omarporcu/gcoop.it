<?php

/**
 * This is the model class for table "tbl_fatture".
 *
 * The followings are the available columns in table 'tbl_fatture':
 * @property integer $id
 * @property string $numero_fattura
 * @property string $tipo
 * @property string $societa
 * @property string $cliente
 * @property string $causale
 * @property string $descrizione
 * @property string $imponibile
 * @property string $iva
 * @property string $tot
 * @property string $data
 * @property string $data_accredito
 * @property string $note
 */
class Fatture extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fatture the static model class
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
		return 'tbl_fatture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numero_fattura, tipo, societa, cliente, causale, descrizione, imponibile, iva, tot', 'length', 'max'=>45),
			array('data, data_accredito, note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, numero_fattura, tipo, societa, cliente, causale, descrizione, imponibile, iva, tot, data, data_accredito, note', 'safe', 'on'=>'search'),
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
			'numero_fattura' => 'Numero Fattura',
			'tipo' => 'Tipo',
			'societa' => 'Società',
			'cliente' => 'Esterno',
			'causale' => 'Causale',
			'descrizione' => 'Descrizione',
			'imponibile' => 'Imponibile',
			'iva' => 'IVA',
			'tot' => 'Totale',
			'data' => 'Data',
			'data_accredito' => 'Data Accredito',
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
		$criteria->compare('numero_fattura',$this->numero_fattura,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('societa',$this->societa,true);
		$criteria->compare('cliente',$this->cliente,true);
		$criteria->compare('causale',$this->causale,true);
		$criteria->compare('descrizione',$this->descrizione,true);
		$criteria->compare('imponibile',$this->imponibile,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('tot',$this->tot,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('data_accredito',$this->data_accredito,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/*protected function beforeSave() {
		
		parent::beforeSave();
		
		$fatture->tot=$fatture->imponibile*$fatture->iva/100;
		$fatture->save(false);
	}*/

	public function behaviors()
	{
    	return array(
        	'myDateFormat'=>array(
            	'class'=>'application.components.myDateFormat',
                	'dateColumns'=>array('data','data_accredito'),
            ),
        );
    }
	
}