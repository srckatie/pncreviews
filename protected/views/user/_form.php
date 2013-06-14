<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>
	
	<section>
        <?php echo $form->labelEx($model,'Password'); ?>
        <div>
            <?php echo $form->passwordField($model,'Password',array('maxlength'=>40)); ?>
        </div>
        <?php echo $form->error($model,'password'); ?>
    </section>
	
	<div class="row">
		<?php echo $form->labelEx($model,'UserStatusID'); ?>
		<?php 
			$list = CHtml::listData(UserStatus::model()->findAll(array('order' => 'Name')), 'UserStatusID', 'Name');
			echo $form->dropDownList($model,'UserStatusID',$list); 
		?>
		<?php echo $form->error($model,'UserStatusID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->