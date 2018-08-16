<?php 
namespace Reptern\Infrastructure\Group;

use Reptern\Application\EloquentRepository as Repository;
use Reptern\Domain\Group\GroupRepository as GroupRepositoryInterface;
use Reptern\Domain\Group\EloquentGroup as Group;

class EloquentGroupRepository extends Repository implements GroupRepositoryInterface {

    private $group;

    public function __construct(Group $group)
    {
        $this->setEntity($group);
    }
	
}

