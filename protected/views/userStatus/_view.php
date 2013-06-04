<?php
/* @var $this UserStatusController */
/* @var $data UserStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserStatusID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UserStatusID), array('view', 'id'=>$data->UserStatusID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />


</div>