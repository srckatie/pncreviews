<?php
interface IEntity
{
    /** 
     * @return string uniq entity identifier
     */
    public function getId();

    /** 
     * @return atributes in the form of array(key ==> value)
     */
	public function getGetAttributes();
}
?>