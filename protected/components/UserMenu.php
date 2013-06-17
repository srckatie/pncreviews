<?php

Yii::import('zii.widgets.CWidget');

class userMenu extends CWidget
{
	public function init()
	{
		//$this->title=CHtml::encode(Yii::app()->user->name);
		parent::init();
	}
	
	public function run() 
	{
        $this->render('userMenu');
    }
	
}
?>