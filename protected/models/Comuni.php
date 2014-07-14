<?php

/**
 * This is the model class for table "tbl_comuni".
 *
 * The followings are the available columns in table 'tbl_comuni':
 * @property integer $id
 * @property string $reg
 * @property string $regione
 * @property string $prov
 * @property string $provincia
 * @property string $sigla
 * @property string $cod_comune
 * @property string $cap
 * @property string $nome
 */
class Comuni extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comuni the static model class
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
		return 'tbl_comuni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reg, regione, prov, provincia, sigla, cod_comune, cap, nome', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, reg, regione, prov, provincia, sigla, cod_comune, cap, nome', 'safe', 'on'=>'search'),
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
			'reg' => 'Reg',
			'regione' => 'Regione',
			'prov' => 'Prov',
			'provincia' => 'Provincia',
			'sigla' => 'Sigla',
			'cod_comune' => 'Cod Comune',
			'cap' => 'Cap',
			'nome' => 'Nome',
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
		$criteria->compare('reg',$this->reg,true);
		$criteria->compare('regione',$this->regione,true);
		$criteria->compare('prov',$this->prov,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('sigla',$this->sigla,true);
		$criteria->compare('cod_comune',$this->cod_comune,true);
		$criteria->compare('cap',$this->cap,true);
		$criteria->compare('nome',$this->nome,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}