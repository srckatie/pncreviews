<?php
/* @var $this StoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Cstores'=>array('index'),
	$model->Name=>array('view','id'=>$model->StoreID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Create Store', 'url'=>array('create')),
	array('label'=>'View Store', 'url'=>array('view', 'id'=>$model->StoreID)),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>Update Store <?php echo $model->StoreID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>