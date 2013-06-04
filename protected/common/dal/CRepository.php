<?php
class CRepository extends CApplicationComponent implements IRepository
{
    /**
     * @var IPersistenceManager
     */
    private $_datacontext = null;

    /**
     * Local storage of entities. Populated while fetching from the repository.
     * @var CMap
     */
    private $_entitiesCollection = null;

    /**
     * Set the persistence manager for this repository.
     * $manager can take values of a string the id of the
     * application component in the Yii instance, if array
     * the configuration or if object the persistence manager
     * it self.
     * @see CModule::getComponent()
     * @see YiiBase::createComponent()
     * @param $manager mixed
     */
    public function setDataContext(IDataContext $dc);
    {
        if($this->_datacontext == null) {
            if(is_string($manager) && Yii::app()->hasComponent($manager)) {
                $this->_datacontext = Yii::app()->getComponent($manager);
                return;
            } else if (is_array($manager)) {
                $this->_datacontext = Yii::createComponent($manager);
                return;
            } else if ($dc instanceof IData) {
                $this->_datacontext = $manager;
                return;
            }
            throw new CException(__CLASS__.'::$dataContext could not be set');
        }
        throw new CException(__CLASS__.'::$dataContext has already been set');
    }

    /**
     * Local collection of entities
     * @see Repository::$_entitiesCollection
     * @return CMap
     */
    protected function getCollection()
    {
        if($this->_entitiesCollection === null) {
            $this->_entitiesCollection = new CMap();
        }
        return $this->_entitiesCollection;
    }

    /**
     * Add an entity repository
     * @param $entity IEntity
     * @return boolean
     */
    public function add(IEntity $entity)
    {
        if(!($entity instanceof $this->entityName))
            throw new CException(__CLASS__.' can only store entities of '.$this->entityName);
        if($this->persistenceManager->add(&$entity)) {
            $this->collection->add($entity->id, $entity);
            return true;
        }
        return false;
    }

    /**
     * Updates a modified entity
     * @param $entity IEntity
     * @return boolean
     */
    public function update(IEntity $entity)
    {
        if(!($entity instanceof $this->entityName))
            throw new CException(__CLASS__.' can only store entities of '.$this->entityName);
        }
        if($this->persistenceManager->update(&$entity)) {
            $this->collection->add($entity->id, $entity);
            return true;
        }
        return false;
    }

    /**
     * Delete an entity from the repository
     * @param $entity IEntity
     * @return boolean
     */
    public function delete(IEntity $entity)
    {
        if(!($entity instanceof $this->entityName))
            throw new CException(__CLASS__.' can only store entities of '.$this->entityName);
        }
        if($this->persistenceManager->delete($entity)) {
            $this->collection->remove($entity->id);
            return true;
        }
        return false;
    }

    /**
     * Delete all entities from the repository
     * @return boolean
     */
    public function deleteAll()
    {
        if($this->persistenceManager->deleteAll()) {
            $this->_entitiesCollection = null;
            return true;
        }
        return false;
    }

    /**
     * @return int number of entities in the repository
     */
    public function count()
    {
        return $this->persistenceManager->count();
    }

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
