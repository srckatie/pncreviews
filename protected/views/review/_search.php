<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ReviewID'); ?>
		<?php echo $form->textField($model,'ReviewID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CategoryID'); ?>
		<?php echo $form->textField($model,'CategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StoreID'); ?>
		<?php echo $form->textField($model,'StoreID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReviewStatusID'); ?>
		<?php echo $form->textField($model,'ReviewStatusID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProdLink'); ?>
		<?php echo $form->textField($model,'ProdLink',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PicLink'); ?>
		<?php echo $form->textField($model,'PicLink',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Price'); ?>
		<?php echo $form->textField($model,'Price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ReviewText'); ?>
		<?php echo $form->textArea($model,'ReviewText',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->