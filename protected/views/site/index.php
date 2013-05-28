<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
	<div id="right-column">
	<?php for ($i=1; $i<=10; $i++) {?>
		<div class = "column span-10 append-3 colborder">
			<p>Item x</p>
		</div>
	<?php }?>
	</div>
	
	<?php for ($i=1; $i<=10; $i++) {?>
		<section class = "column span-10 append-3 border">
			<p>
				<img src="images/itemimage.gif" class="right top" alt="Item image" height="180" width="190">
				<H4>Product name</H4>
				This product is absolutely amazing. Never seen such a good quality for that price
				<a href="">read more</a>
			</p>
		</section>
	<?php }?>
	
