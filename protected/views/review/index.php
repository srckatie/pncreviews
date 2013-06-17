<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Reviews',
);*/
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

