<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
	<div id="right-column" class="container">
	<?php for ($i=1; $i<=10; $i++) {?>
		<div class = "column span-10 append-3 colborder">
			<p>Item x</p>
		</div>
	<?php }?>
	</div>
	<?php for ($i=1; $i<=10; $i++) {?>
		<div class = "column span-10 append-3 border">
			<p >Product name</p>
			<img src="images/itemimage.gif" alt="Item image" height="180" width="190">
		</div>
	<?php }?>
	
