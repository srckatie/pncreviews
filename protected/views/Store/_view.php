<?php
/* @var $this CStoreController */
/* @var $data Store */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('StoreID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->StoreID), array('view', 'id'=>$data->StoreID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Link')); ?>:</b>
	<?php echo CHtml::encode($data->Link); ?>
	<br />


</div>