<?php 
namespace Reptern\Application;

interface Repository {

	public function setEntity($entity);
	public function create(array $data);
	public function getAll();
	public function find($id);
	public function update( array $data, $identifier );

}