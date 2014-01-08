<?php

/**
 * This is the model class for table "jobfunctie".
 *
 * The followings are the available columns in table 'jobfunctie':
 * @property integer $idJobFunctie
 * @property string $AantalPersonen
 * @property string $StartDatum
 * @property integer $Uren
 * @property double $UurTarief
 * @property integer $WerkSoort_idWerkSoort
 *
 * The followings are the available model relations:
 * @property Contract[] $contracts
 * @property Werksoort $werkSoortIdWerkSoort
 */
class Jobfunctie extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jobfunctie the static model class
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
		return 'jobfunctie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('WerkSoort_idWerkSoort', 'required'),
			array('Uren, WerkSoort_idWerkSoort', 'numerical', 'integerOnly'=>true),
			array('UurTarief', 'numerical'),
			array('AantalPersonen', 'length', 'max'=>45),
			array('StartDatum', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idJobFunctie, AantalPersonen, StartDatum, Uren, UurTarief, WerkSoort_idWerkSoort', 'safe', 'on'=>'search'),
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
			'contracts' => array(self::HAS_MANY, 'Contract', 'JobFunctie_idJobFunctie'),
			'werkSoortIdWerkSoort' => array(self::BELONGS_TO, 'Werksoort', 'WerkSoort_idWerkSoort'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idJobFunctie' => 'Id Job Functie',
			'AantalPersonen' => 'Aantal Personen',
			'StartDatum' => 'Start Datum',
			'Uren' => 'Uren',
			'UurTarief' => 'Uur Tarief',
			'WerkSoort_idWerkSoort' => 'Werksoort',
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

		$criteria->compare('idJobFunctie',$this->idJobFunctie);
		$criteria->compare('AantalPersonen',$this->AantalPersonen,true);
		$criteria->compare('StartDatum',$this->StartDatum,true);
		$criteria->compare('Uren',$this->Uren);
		$criteria->compare('UurTarief',$this->UurTarief);
		$criteria->compare('WerkSoort_idWerkSoort',$this->WerkSoort_idWerkSoort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}