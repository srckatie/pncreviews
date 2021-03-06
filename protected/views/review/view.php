<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Edit Review', 'url'=>array('update', 'id'=>$model->ReviewID)),
	array('label'=>'Delete Review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ReviewID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reviews', 'url'=>array('admin')),
);
?>

<h1>View Review #<?php echo $model->ReviewID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ReviewID',
		'UserID',
		'CategoryID',
		'StoreID',
		'ReviewStatusID',
		'Title',
		'ProdLink',
		'PicLink',
		'Price',
		'ReviewText:html',
	),
)); ?>
