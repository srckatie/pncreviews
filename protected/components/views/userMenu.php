<div id="right-column"> <!-- sidebar -->
<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link('Create new review', array('review/create'));?></p>
</div>
<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link('Manage reviews', array('review/admin'));?></p>
</div>
<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link('List reviews', array('review/index'));?></p>
</div>	
<div class = "column span-10 append-3 colborder">
	<p><?php echo CHtml::link('Log out', array('site/logout'));?></p>
</div>
</div><!-- /sidebar -->