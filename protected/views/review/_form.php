<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Review-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CategoryID'); ?>
		<?php 
			$list = CHtml::listData(Category::model()->findAll(array('order' => 'Name')), 'CategoryID', 'Name');
			echo $form->dropDownList($model,'CategoryID',$list);
		?>
		<?php echo $form->error($model,'CategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'StoreID'); ?>
		<?php 
			$list = CHtml::listData(Store::model()->findAll(array('order' => 'Name')), 'StoreID', 'Name');
			echo $form->dropDownList($model,'StoreID',$list); 
		?>
		<?php echo $form->error($model,'StoreID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ReviewStatusID'); ?>
		<?php 
			$list = CHtml::listData(ReviewStatus::model()->findAll(array('order'=> 'Name')), 'ReviewStatusID','Name');
			echo $form->dropDownList($model, 'ReviewStatusID', $list);
		?>
		<?php echo $form->error($model,'ReviewStatusID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ProdLink'); ?>
		<?php echo $form->textField($model,'ProdLink',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'ProdLink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PicLink'); ?>
		<?php echo $form->textField($model,'PicLink',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'PicLink'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Price'); ?>
		<?php echo $form->textField($model,'Price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ReviewText'); ?>
		<?php echo $form->textArea($model,'ReviewText',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ReviewText'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->