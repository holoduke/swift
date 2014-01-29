<?php

/**
 * This is the model class for table "werksoort".
 *
 * The followings are the available columns in table 'werksoort':
 * @property integer $idWerkSoort
 * @property string $Naam
 * @property string $Omschrijving
 *
 * The followings are the available model relations:
 * @property Jobfunctie[] $jobfuncties
 * @property Werksoortvoorkeur[] $werksoortvoorkeurs
 */
class Werksoort extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Werksoort the static model class
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
		return 'werksoort';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Naam', 'length', 'max'=>45),
			array('Omschrijving', 'length', 'max'=>128),
          array('Active', 'boolean'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Naam, Omschrijving', 'required'),
			array('idWerkSoort, Naam, Omschrijving', 'safe', 'on'=>'search'),
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
			'jobfuncties' => array(self::HAS_MANY, 'Jobfunctie', 'WerkSoort_idWerkSoort'),
			'werksoortvoorkeurs' => array(self::HAS_MANY, 'Werksoortvoorkeur', 'WerkSoort_idWerkSoort'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idWerkSoort' => 'Id Werk Soort',
			'Naam' => 'Naam',
			'Omschrijving' => 'Omschrijving',
                   'Active' => 'Actief',

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

		$criteria->compare('idWerkSoort',$this->idWerkSoort);
		$criteria->compare('Naam',$this->Naam,true);
		$criteria->compare('Omschrijving',$this->Omschrijving,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}