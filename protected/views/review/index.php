<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
);
?>

<h1>Reviews</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

