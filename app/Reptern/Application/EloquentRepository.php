<?php 
namespace Reptern\Application;

/**
 * An abstract class that serves as a base class that contains
 * the inheritable methods in performing database operations
 */
abstract class EloquentRepository implements Repository {

	private $entity;

	/**
	 * Sets the entity of a certain module
	 *
	 * @param      instance  $entity  
	 *
	 * @return       instance
	 */
	public function setEntity($entity)
	{
		return $this->entity = $entity;
	}

	/**
	 * Persist the data of a certain entity
	 *
	 * @param      array   $data   
	 *
	 * @return       
	 */
	public function create(array $data) 
	{
		return $this->entity->create($data);
	}

	/**
	 * Searches for the first match.
	 *
	 * @param      int  $id     
	 *
	 * @return       
	 */
	public function find($id)
	{
		return $this->entity->find($id);
	}

	/**
	 * Update a resource on the storage
	 *
	 * @param      array   $data        
	 * @param        $identifier  
	 */
	public function update(array $data, $identifier)
	{
		$row = $this->entity->find($identifier);
        $row->fill($data);
        $row->save();
        return;
	}

	/**
	 * Grab all the records from a certain entity
	 *
	 * @return       
	 */
	public function getAll()
	{
		return $this->entity->all();
	}

	
}