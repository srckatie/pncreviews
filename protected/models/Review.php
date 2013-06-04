<?php

/**
 * This is the model class for table "review".
 *
 * The followings are the available columns in table 'review':
 * @property integer $ReviewID
 * @property integer $UserID
 * @property integer $CategoryID
 * @property integer $StoreID
 * @property integer $ReviewStatusID
 * @property string $Title
 * @property string $ProdLink
 * @property string $PicLink
 * @property string $Price
 * @property string $ReviewText
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Category $category
 * @property Store $store
 * @property Reviewstatus $reviewStatus
 */
class Review extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Review the static model class
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
		return 'review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UserID, CategoryID, StoreID, ReviewStatusID, Title, ProdLink, PicLink, Price', 'required'),
			array('UserID, CategoryID, StoreID, ReviewStatusID', 'numerical', 'integerOnly'=>true),
			array('Title, ProdLink, PicLink', 'length', 'max'=>128),
			array('Price', 'length', 'max'=>10),
			array('ReviewText', 'safe'),
			array('UserID','default','value'=>Yii::app()->user->id,'setOnEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ReviewID, UserID, CategoryID, StoreID, ReviewStatusID, Title, ProdLink, PicLink, Price, ReviewText', 'safe', 'on'=>'search'),
			
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
			'user' => array(self::BELONGS_TO, 'User', 'UserID'),
			'category' => array(self::BELONGS_TO, 'Category', 'CategoryID'),
			'store' => array(self::BELONGS_TO, 'Store', 'StoreID'),
			'reviewStatus' => array(self::BELONGS_TO, 'Reviewstatus', 'ReviewStatusID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ReviewID' => 'Review',
			'UserID' => 'User',
			'CategoryID' => 'Category',
			'StoreID' => 'Store',
			'ReviewStatusID' => 'Review Status',
			'Title' => 'Title',
			'ProdLink' => 'Product Link',
			'PicLink' => 'Picture Link',
			'Price' => 'Price',
			'ReviewText' => 'Review Text',
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

		$criteria->compare('ReviewID',$this->ReviewID);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('CategoryID',$this->CategoryID);
		$criteria->compare('StoreID',$this->StoreID);
		$criteria->compare('ReviewStatusID',$this->ReviewStatusID);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('ProdLink',$this->ProdLink,true);
		$criteria->compare('PicLink',$this->PicLink,true);
		$criteria->compare('Price',$this->Price,true);
		$criteria->compare('ReviewText',$this->ReviewText,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}