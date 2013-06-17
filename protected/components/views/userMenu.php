<div id="right-column"> <!-- sidebar -->
<?php foreach (Yii::app()->controller->menu as $label) { ?>
<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link($label["label"], $label["url"], array_key_exists("linkOptions",$label) ? $label["linkOptions"] : '') ;?></p>
</div>
<?php } ?>

<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link('Log out', array('site/logout'));?></p>
</div>
</div><!-- /sidebar -->