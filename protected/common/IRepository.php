<?php
interface IRepository
{
    /** 
     * @return string uniq entity identifier
     */
    public function Create(IEntity entity);

}
?>