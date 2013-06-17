<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

	<section class = "column span-10 append-3 border">
		<p>
			<img src="images/itemimage.gif" class="right top" alt="Item image" height="180" width="190">
			<H4><?php echo CHtml::link(CHtml::encode($data->Title), $data->url); ?></H4>
			<?php $this->widget('XReadMore', array('model'=>$data,'attribute'=>'ReviewText',));?>
		</p>
	</section>

