<?php
/* @var $this UserStatusController */
/* @var $model UserStatus */

$this->breadcrumbs=array(
	'User Statuses'=>array('index'),
	$model->Name=>array('view','id'=>$model->UserStatusID),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserStatus', 'url'=>array('index')),
	array('label'=>'Create UserStatus', 'url'=>array('create')),
	array('label'=>'View UserStatus', 'url'=>array('view', 'id'=>$model->UserStatusID)),
	array('label'=>'Manage UserStatus', 'url'=>array('admin')),
);
?>

<h1>Update UserStatus <?php echo $model->UserStatusID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>