<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Create',
);

?>

<h1>Create Review</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>