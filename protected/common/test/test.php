<?php
	$test = new CTestEntity;
	foreach ($test->GetAttributes() as $key=>$value) {
		print ($key ."==>". $value);
	}
	
	class CTestEntity extends CEntity{
		public $info = 10;
	}
?>