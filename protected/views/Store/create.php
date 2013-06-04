<?php
/* @var $this CStoreController */
/* @var $model Store */

$this->breadcrumbs=array(
	'Cstores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stores', 'url'=>array('index')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1>Create Store</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>