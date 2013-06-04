<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Stores'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'Update Store', 'url'=>array('update', 'id'=>$model->StoreID)),
	array('label'=>'Delete Store', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->StoreID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>View Store #<?php echo $model->StoreID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'StoreID',
		'Name',
		'Link',
	),
)); ?>
