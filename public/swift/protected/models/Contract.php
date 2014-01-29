<?php

/**
 * This is the model class for table "contract".
 *
 * The followings are the available columns in table 'contract':
 * @property integer $idContract
 * @property string $StartDatum
 * @property double $UurTarief
 * @property double $UurLoon
 * @property integer $JobFunctie_idJobFunctie
 * @property integer $BedrijfRelatie_idBedrijfRelatie
 * @property integer $Uitzendkracht_idUitzendkracht
 * @property integer $Intecedent_idIntecedent
 *
 * The followings are the available model relations:
 * @property Bedrijfrelatie $bedrijfRelatieIdBedrijfRelatie
 * @property Intecedent $intecedentIdIntecedent
 * @property Jobfunctie $jobFunctieIdJobFunctie
 * @property Uitzendkracht $uitzendkrachtIdUitzendkracht
 * @property Werkbrief[] $werkbriefs
 */
class Contract extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contract the static model class
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
		return 'contract';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('StartDatum, UurTarief, UurLoon, JobFunctie_idJobFunctie, BedrijfRelatie_idBedrijfRelatie, Uitzendkracht_idUitzendkracht, Intecedent_idIntecedent', 'required'),
			array('JobFunctie_idJobFunctie, BedrijfRelatie_idBedrijfRelatie, Uitzendkracht_idUitzendkracht, Intecedent_idIntecedent', 'numerical', 'integerOnly'=>true),
			array('UurTarief, UurLoon', 'numerical'),
			array('StavrtDatum', 'length', 'max'=>45),
          array('Active', 'boolean'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idContract, StartDatum, UurTarief, UurLoon, JobFunctie_idJobFunctie, BedrijfRelatie_idBedrijfRelatie, Uitzendkracht_idUitzendkracht, Intecedent_idIntecedent', 'safe', 'on'=>'search'),
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
			'jobFunctieIdJobFunctie' => array(self::BELONGS_TO, 'Jobfunctie', 'JobFunctie_idJobFunctie'),
			'uitzendkrachtIdUitzendkracht' => array(self::BELONGS_TO, 'Uitzendkracht', 'Uitzendkracht_idUitzendkracht'),
			'werkbriefs' => array(self::HAS_MANY, 'Werkbrief', 'Contract_idContract'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idContract' => 'Id',
			'StartDatum' => 'Start Datum',
			'UurTarief' => 'Uur Tarief',
			'UurLoon' => 'Uur Loon',
			'JobFunctie_idJobFunctie' => 'Job',
			'BedrijfRelatie_idBedrijfRelatie' => 'Bedrijf Relatie',
			'Uitzendkracht_idUitzendkracht' => 'Uitzendkracht',
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

		$criteria->compare('idContract',$this->idContract);
		$criteria->compare('StartDatum',$this->StartDatum,true);
		$criteria->compare('UurTarief',$this->UurTarief);
		$criteria->compare('UurLoon',$this->UurLoon);
		$criteria->compare('JobFunctie_idJobFunctie',$this->JobFunctie_idJobFunctie);
		$criteria->compare('BedrijfRelatie_idBedrijfRelatie',$this->BedrijfRelatie_idBedrijfRelatie);
		$criteria->compare('Uitzendkracht_idUitzendkracht',$this->Uitzendkracht_idUitzendkracht);
		$criteria->compare('Intecedent_idIntecedent',$this->Intecedent_idIntecedent);
		$criteria->compare('Active',$para, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}