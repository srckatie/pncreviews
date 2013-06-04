<?php
/**
 * Interface for repositories
 */
interface IRepository
{
    /**
     * Set the data context for this repository.
     * $dc can take values of a string the id of the
     * application component in the Yii instance, if array
     * the configuration or if object the persistence manager
     * it self.
     * @see CModule::getComponent()
     * @see YiiBase::createComponent()
     * @param $dc mixed
     */
    public function setDataContext($dc);

    /**
     * @return string entity class name this repo holds
     */
    public function getEntityName();

    /**
     * Add an entity repository
     * @param $entity IEntity
     * @return boolean
     */
    public function add(IEntity $entity);

    /**
     * Updates a modified entity
     * @param $entity IEntity
     * @return boolean
     */
    public function update(IEntity $entity);

    /**
     * Delete an entity from the repository
     * @param $entity IEntity
     * @return boolean
     */
    public function delete(IEntity $entity);

    /**
     * Delete all entities from the repository
     * @return boolean
     */
    public function deleteAll();

    /**
     * @return int number of entities in the repository
     */
    public function count();

    /**
     * Get an entity from the repository based on a
     * unique identifier
     * @return IEntity
     */
    public function findByID($identifier);

    /**
     * Get all the entities from the repository
     * @return array
     */
    public function findAll();

    /**
     * Get an entity with attributes that have the specific values.
     * If more than exist the first will be returned, if none exist null will
     * be returned
     * @param array $attributes values that should match in search criteria
     * @return mixed
     */
    public function findByAttributes($attributes);

    /**
     * Get all entites with attributes that have the specific values.
     * Empty array will be returned if none.
     * @param array $attributes values that should match in search criteria
     * @return array
     */
    public function findAllByAttributes($attributes);
}
