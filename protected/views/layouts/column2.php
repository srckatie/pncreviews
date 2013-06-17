<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php if (!Yii::app()->user->isGuest) $this->widget('UserMenu');	?>
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>