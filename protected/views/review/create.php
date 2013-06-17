<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reviews', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>

<h1>Create Review</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>