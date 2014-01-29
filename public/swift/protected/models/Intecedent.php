<?php

/**
 * This is the model class for table "intecedent".
 *
 * The followings are the available columns in table 'intecedent':
 * @property integer $idIntecedent
 * @property string $Naam
 * @property string $Adres
 * @property string $Woonplaats
 * @property string $Telefoon
 * @property string $EMail
 * @property string $Geslacht
 * @property integer $Vestiging_idVestiging
 *
 * The followings are the available model relations:
 * @property Bedrijfrelatiecontact[] $bedrijfrelatiecontacts
 * @property Contract[] $contracts
 * @property Vestiging $vestigingIdVestiging
 * @property Uitzendkracht[] $uitzendkrachts
 */
class Intecedent extends CActiveRecord {

   /**
    * Returns the static model of the specified AR class.
    * @param string $className active record class name.
    * @return Intecedent the static model class
    */
   public static function model($className = __CLASS__) {
      return parent::model($className);
   }

   /**
    * @return string the associated database table name
    */
   public function tableName() {
      return 'intecedent';
   }

   /**
    * @return array validation rules for model attributes.
    */
   public function rules() {
      // NOTE: you should only define rules for those attributes that
      // will receive user inputs.
      return array(
          array('Postcode', 'checkPostcode'),
          array('Telefoon', 'checkTelefoon'),
          array('EMail', 'unique'),
          array('Naam, Adres, Woonplaats, Telefoon, EMail, Geslacht, Vestiging_idVestiging, Postcode', 'required'),
          array('Vestiging_idVestiging', 'numerical', 'integerOnly' => true),
          array('Naam, Adres, Woonplaats, Telefoon, EMail, Postcode', 'length', 'max' => 45),
          array('Geslacht', 'length', 'max' => 1),
          array('Active', 'boolean'),
          // The following rule is used by search().
          // Please remove those attributes that should not be searched.
          array('idIntecedent, Naam, Adres, Woonplaats, Telefoon, EMail, Geslacht, Vestiging_idVestiging', 'safe', 'on' => 'search'),
      );
   }

   /**
    * @param string the name of the attribute to be validated
    * @param array options specified in the validation rule
    */
   public function checkPostcode($attribute, $params) {
      if (eregi("^[0-9]{4}[[:space:]]*[A-Za-z]{2}$", $this->attributes[$attribute]) === false)
         $this->addError($attribute, 'You have already submitted review for this item');
   }

   /**
    * @param string the name of the attribute to be validated
    * @param array options specified in the validation rule
    */
   public function checkTelefoon($attribute, $params) {
      $number = preg_replace("/\D/", "", $this->attributes[$attribute]);

      if ((strlen($number) == 11 && $this->attributes[$attribute]{1} !== "+"))
         $this->addError($attribute, 'You have already submitted review for this itema');
      elseif (!(strlen($number) == 10 ))
         $this->addError($attribute, 'You have already submitted review for this itemb');
   }

   /**
    * @return array relational rules.
    */
   public function relations() {
      // NOTE: you may need to adjust the relation name and the related
      // class name for the relations automatically generated below.
      return array(
          'bedrijfrelatiecontacts' => array(self::HAS_MANY, 'Bedrijfrelatiecontact', 'Intecedent_idIntecedent'),
          'contracts' => array(self::HAS_MANY, 'Contract', 'Intecedent_idIntecedent'),
          'vestigingIdVestiging' => array(self::BELONGS_TO, 'Vestiging', 'Vestiging_idVestiging'),
          'uitzendkrachts' => array(self::HAS_MANY, 'Uitzendkracht', 'Intecedent_idIntecedent'),
      );
   }

   /**
    * @return array customized attribute labels (name=>label)
    */
   public function attributeLabels() {
      return array(
          'idIntecedent' => 'Id',
          'Naam' => 'Naam',
          'Adres' => 'Adres',
          'Postcode' => 'Postcode',
          'Woonplaats' => 'Woonplaats',
          'Telefoon' => 'Telefoon',
          'EMail' => 'Email',
          'Geslacht' => 'Geslacht',
          'Vestiging_idVestiging' => 'Vestiging',
          'Active' => 'Actief',

      );
   }

   /**
    * Retrieves a list of models based on the current search/filter conditions.
    * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
    */
   public function search($para = '0') {
      // Warning: Please modify the following code to remove attributes that
      // should not be searched.

      $criteria = new CDbCriteria;

      $criteria->compare('idIntecedent', $this->idIntecedent);
      $criteria->compare('Naam', $this->Naam, true);
      $criteria->compare('Adres', $this->Adres, true);
      $criteria->compare('Postcode', $this->Postcode, true);
      $criteria->compare('Woonplaats', $this->Woonplaats, true);
      $criteria->compare('Telefoon', $this->Telefoon, true);
      $criteria->compare('EMail', $this->EMail, true);
      $criteria->compare('Geslacht', $this->Geslacht, true);
      $criteria->compare('Vestiging_idVestiging', $this->Vestiging_idVestiging);
      $criteria->compare('Active', $para, true);

      return new CActiveDataProvider($this, array(
          'criteria' => $criteria,
      ));
   }

}
