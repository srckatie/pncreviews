<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

	<section class = "column span-10 append-3 border">
		<p>
			<img src="images/itemimage.gif" class="right top" alt="Item image" height="180" width="190">
			<H4><?php echo CHtml::encode($data->Title); ?></H4>
			<?php echo CHtml::encode($data->ReviewText); ?>
			<a href="">read more</a>
		</p>
	</section>

