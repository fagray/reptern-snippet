<?php
namespace Reptern\Domain\Group;

use Illuminate\Database\Eloquent\Model;

class EloquentGroup extends Model
{
    protected $table = 'groups';
    
    public function contacts()
    {
        return $this->hasMany('Reptern\Domain\EloquentContact','group_id');
    }
}
