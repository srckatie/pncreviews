<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReviewID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ReviewID), array('view', 'id'=>$data->ReviewID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CategoryID')); ?>:</b>
	<?php echo CHtml::encode($data->CategoryID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StoreID')); ?>:</b>
	<?php echo CHtml::encode($data->StoreID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReviewStatusID')); ?>:</b>
	<?php echo CHtml::encode($data->ReviewStatusID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProdLink')); ?>:</b>
	<?php echo CHtml::encode($data->ProdLink); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PicLink')); ?>:</b>
	<?php echo CHtml::encode($data->PicLink); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Price')); ?>:</b>
	<?php echo CHtml::encode($data->Price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReviewText')); ?>:</b>
	<?php echo CHtml::encode($data->ReviewText); ?>
	<br />

	*/ ?>

</div>