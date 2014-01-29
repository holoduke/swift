<?php

/**
 * This is the model class for table "bedrijfrelatiecontact".
 *
 * The followings are the available columns in table 'bedrijfrelatiecontact':
 * @property integer $idBedrijfRelatieContact
 * @property string $Voorletters
 * @property string $Achternaam
 * @property string $Geslacht
 * @property string $Functie
 * @property string $Telefoon
 * @property string $EMail
 * @property integer $BedrijfRelatie_idBedrijfRelatie
 * @property integer $Intecedent_idIntecedent
 *
 * The followings are the available model relations:
 * @property Bedrijfrelatie $bedrijfRelatieIdBedrijfRelatie
 * @property Intecedent $intecedentIdIntecedent
 */
class Bedrijfrelatiecontact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bedrijfrelatiecontact the static model class
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
		return 'bedrijfrelatiecontact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Voorletters, Achternaam, Geslacht, Functie, Telefoon, EMail, BedrijfRelatie_idBedrijfRelatie, Intecedent_idIntecedent', 'required'),
			array('BedrijfRelatie_idBedrijfRelatie, Intecedent_idIntecedent', 'numerical', 'integerOnly'=>true),
			array('Voorletters, Achternaam, Functie, Telefoon, EMail', 'length', 'max'=>45),
			array('Geslacht', 'length', 'max'=>1),
          array('Active', 'boolean'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idBedrijfRelatieContact, Voorletters, Achternaam, Geslacht, Functie, Telefoon, EMail, BedrijfRelatie_idBedrijfRelatie, Intecedent_idIntecedent', 'safe', 'on'=>'search'),
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
			'bedrijfRelatieIdBedrijfRelatie' => array(self::BELONGS_TO, 'Bedrijfrelatie', 'BedrijfRelatie_idBedrijfRelatie'),
			'intecedentIdIntecedent' => array(self::BELONGS_TO, 'Intecedent', 'Intecedent_idIntecedent'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBedrijfRelatieContact' => 'Id',
			'Voorletters' => 'Voorletters',
			'Achternaam' => 'Achternaam',
			'Geslacht' => 'Geslacht',
			'Functie' => 'Functie',
			'Telefoon' => 'Telefoon',
			'EMail' => 'Email',
			'BedrijfRelatie_idBedrijfRelatie' => 'Bedrijf',
			'Intecedent_idIntecedent' => 'Intecedent',
         'Active' => 'Actief',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($para = '0')
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idBedrijfRelatieContact',$this->idBedrijfRelatieContact);
		$criteria->compare('Voorletters',$this->Voorletters,true);
		$criteria->compare('Achternaam',$this->Achternaam,true);
		$criteria->compare('Geslacht',$this->Geslacht,true);
		$criteria->compare('Functie',$this->Functie,true);
		$criteria->compare('Telefoon',$this->Telefoon,true);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('BedrijfRelatie_idBedrijfRelatie',$this->BedrijfRelatie_idBedrijfRelatie);
		$criteria->compare('Intecedent_idIntecedent',$this->Intecedent_idIntecedent);
		$criteria->compare('Active',$para,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}