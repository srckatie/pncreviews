<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->Title=>array('view','id'=>$model->ReviewID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Review', 'url'=>array('index')),
	array('label'=>'Create Review', 'url'=>array('create')),
	array('label'=>'View Review', 'url'=>array('view', 'id'=>$model->ReviewID)),
	array('label'=>'Manage Review', 'url'=>array('admin')),
);
?>

<h1>Update Review <?php echo $model->ReviewID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>