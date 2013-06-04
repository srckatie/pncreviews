<?php
abstract class CEntity implements IEntity
{
	 /** 
     * @return atributes in the form of array(key ==> value)
     */
	public function getGetAttributes()
	{
		return get_object_vars($this)
	}
}
?>