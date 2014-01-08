<?php

/**
 * This is the model class for table "bedrijfrelatie".
 *
 * The followings are the available columns in table 'bedrijfrelatie':
 * @property integer $idBedrijfRelatie
 * @property string $Naam
 * @property string $Adres
 * @property string $Postcode
 * @property string $Woonplaats
 * @property string $KVKId
 *
 * The followings are the available model relations:
 * @property Bedrijfrelatiecontact[] $bedrijfrelatiecontacts
 * @property Contract[] $contracts
 */
class Bedrijfrelatie extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bedrijfrelatie the static model class
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
		return 'bedrijfrelatie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Naam, Adres, Postcode, Woonplaats, KVKId', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idBedrijfRelatie, Naam, Adres, Postcode, Woonplaats, KVKId', 'safe', 'on'=>'search'),
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
			'bedrijfrelatiecontacts' => array(self::HAS_MANY, 'Bedrijfrelatiecontact', 'BedrijfRelatie_idBedrijfRelatie'),
			'contracts' => array(self::HAS_MANY, 'Contract', 'BedrijfRelatie_idBedrijfRelatie'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBedrijfRelatie' => 'Id Bedrijf Relatie',
			'Naam' => 'Naam',
			'Adres' => 'Adres',
			'Postcode' => 'Postcode',
			'Woonplaats' => 'Woonplaats',
			'KVKId' => 'KVK nummer',
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

		$criteria->compare('idBedrijfRelatie',$this->idBedrijfRelatie);
		$criteria->compare('Naam',$this->Naam,true);
		$criteria->compare('Adres',$this->Adres,true);
		$criteria->compare('Postcode',$this->Postcode,true);
		$criteria->compare('Woonplaats',$this->Woonplaats,true);
		$criteria->compare('KVKId',$this->KVKId,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}