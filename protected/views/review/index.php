<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Reviews',
);*/

$this->menu=array(
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Manage Reviews', 'url'=>array('admin')),
);

?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

