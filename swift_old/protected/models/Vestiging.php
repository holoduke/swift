<?php

/**
 * This is the model class for table "vestiging".
 *
 * The followings are the available columns in table 'vestiging':
 * @property integer $idVestiging
 * @property string $Naam
 * @property string $Adres
 * @property string $Postcode
 * @property string $Woonplaats
 * @property string $Telefoon
 * @property string $EMail
 *
 * The followings are the available model relations:
 * @property Intecedent[] $intecedents
 * @property Uitzendkracht[] $uitzendkrachts
 */
class Vestiging extends CActiveRecord {

   /**
    * Returns the static model of the specified AR class.
    * @param string $className active record class name.
    * @return Vestiging the static model class
    */
   public static function model($className = __CLASS__) {
      return parent::model($className);
   }

   /**
    * @return string the associated database table name
    */
   public function tableName() {
      return 'vestiging';
   }

   /**
    * @return array validation rules for model attributes.
    */
   public function rules() {
      // NOTE: you should only define rules for those attributes that
      // will receive user inputs.
      return array(
          // TODO  Deze controle overal inmaken
          array('Postcode', 'match', 'pattern' => '^[0-9]{4}[[:space:]]*[A-Za-z]{2}^', 'message' => 'Postcode fout!'),
          array('Telefoon', 'checkTelefoon'),
          array('Naam, Adres, Postcode, Woonplaats, Telefoon, EMail', 'required'),
          array('Naam, Adres, Postcode, Woonplaats, Telefoon, EMail', 'length', 'max' => 45),
          array('Active', 'boolean'),
          // The following rule is used by search().
          // Please remove those attributes that should not be searched.
          array('idVestiging, Naam, Adres, Postcode, Woonplaats, Telefoon, EMail', 'safe', 'on' => 'search'),
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

      if ((strlen($number) < 11))
         $this->addError($attribute, 'Telefoonnummer incorrect');
   }

   /**
    * @return array relational rules.
    */
   public function relations() {
      // NOTE: you may need to adjust the relation name and the related
      // class name for the relations automatically generated below.
      return array(
          'intecedents' => array(self::HAS_MANY, 'Intecedent', 'Vestiging_idVestiging'),
          'uitzendkrachts' => array(self::HAS_MANY, 'Uitzendkracht', 'Vestiging_idVestiging'),
      );
   }

   /**
    * @return array customized attribute labels (name=>label)
    */
   public function attributeLabels() {
      return array(
          'idVestiging' => 'Id',
          'Naam' => 'Naam',
          'Adres' => 'Adres',
          'Postcode' => 'Postcode',
          'Woonplaats' => 'Woonplaats',
          'Telefoon' => 'Telefoon',
          'EMail' => 'Email',
          'Active' => 'Actief',
      );
   }
   
   /**
    * Retrieves a list of models based on the current search/filter conditions.
    * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
    */
   public function search() {
      // Warning: Please modify the following code to remove attributes that
      // should not be searched.

      $criteria = new CDbCriteria;

      $criteria->compare('idVestiging', $this->idVestiging);
      $criteria->compare('Naam', $this->Naam, true);
      $criteria->compare('Adres', $this->Adres, true);
      $criteria->compare('Postcode', $this->Postcode, true);
      $criteria->compare('Woonplaats', $this->Woonplaats, true);
      $criteria->compare('Telefoon', $this->Telefoon, true);
      $criteria->compare('EMail', $this->EMail, true);
      $criteria->compare('Active', '0', true);

      return new CActiveDataProvider($this, array(
          'criteria' => $criteria,
      ));
   }

   public function searchInactive() {
      // Warning: Please modify the following code to remove attributes that
      // should not be searched.

      $criteria = new CDbCriteria;

      $criteria->compare('idVestiging', $this->idVestiging);
      $criteria->compare('Naam', $this->Naam, true);
      $criteria->compare('Adres', $this->Adres, true);
      $criteria->compare('Postcode', $this->Postcode, true);
      $criteria->compare('Woonplaats', $this->Woonplaats, true);
      $criteria->compare('Telefoon', $this->Telefoon, true);
      $criteria->compare('EMail', $this->EMail, true);
      $criteria->compare('Active', '1', true);

      return new CActiveDataProvider($this, array(
          'criteria' => $criteria,
      ));
   }

}
