<?php

/**
 * This is the model class for table "uitzendkracht".
 *
 * The followings are the available columns in table 'uitzendkracht':
 * @property integer $idUitzendkracht
 * @property string $Naam
 * @property string $Geslacht
 * @property string $GeboorteDatum
 * @property string $Adres
 * @property string $Postcode
 * @property string $Woonplaats
 * @property string $Telefoon
 * @property string $Email
 * @property integer $Intecedent_idIntecedent
 * @property integer $Vestiging_idVestiging
 *
 * The followings are the available model relations:
 * @property Contract[] $contracts
 * @property Intecedent $intecedentIdIntecedent
 * @property Vestiging $vestigingIdVestiging
 * @property Werkbrief[] $werkbriefs
 * @property Werksoortvoorkeur[] $werksoortvoorkeurs
 */
class Uitzendkracht extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Uitzendkracht the static model class
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
		return 'uitzendkracht';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Intecedent_idIntecedent, Vestiging_idVestiging', 'required'),
			array('Intecedent_idIntecedent, Vestiging_idVestiging', 'numerical', 'integerOnly'=>true),
			array('Naam, Adres, Postcode, Woonplaats, Telefoon, Email', 'length', 'max'=>45),
			array('Geslacht', 'length', 'max'=>1),
			array('GeboorteDatum', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idUitzendkracht, Naam, Geslacht, GeboorteDatum, Adres, Postcode, Woonplaats, Telefoon, Email, Intecedent_idIntecedent, Vestiging_idVestiging', 'safe', 'on'=>'search'),
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
			'contracts' => array(self::HAS_MANY, 'Contract', 'Uitzendkracht_idUitzendkracht'),
			'intecedentIdIntecedent' => array(self::BELONGS_TO, 'Intecedent', 'Intecedent_idIntecedent'),
			'vestigingIdVestiging' => array(self::BELONGS_TO, 'Vestiging', 'Vestiging_idVestiging'),
			'werkbriefs' => array(self::HAS_MANY, 'Werkbrief', 'Uitzendkracht_idUitzendkracht'),
			'werksoortvoorkeurs' => array(self::HAS_MANY, 'Werksoortvoorkeur', 'Uitzendkracht_idUitzendkracht'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUitzendkracht' => 'Id Uitzendkracht',
			'Naam' => 'Naam',
			'Geslacht' => 'Geslacht',
			'GeboorteDatum' => 'Geboorte Datum',
			'Adres' => 'Adres',
			'Postcode' => 'Postcode',
			'Woonplaats' => 'Woonplaats',
			'Telefoon' => 'Telefoon',
			'Email' => 'Email',
			'Intecedent_idIntecedent' => 'Intecedent',
			'Vestiging_idVestiging' => 'Vestiging',
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

		$criteria->compare('idUitzendkracht',$this->idUitzendkracht);
		$criteria->compare('Naam',$this->Naam,true);
		$criteria->compare('Geslacht',$this->Geslacht,true);
		$criteria->compare('GeboorteDatum',$this->GeboorteDatum,true);
		$criteria->compare('Adres',$this->Adres,true);
		$criteria->compare('Postcode',$this->Postcode,true);
		$criteria->compare('Woonplaats',$this->Woonplaats,true);
		$criteria->compare('Telefoon',$this->Telefoon,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Intecedent_idIntecedent',$this->Intecedent_idIntecedent);
		$criteria->compare('Vestiging_idVestiging',$this->Vestiging_idVestiging);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}