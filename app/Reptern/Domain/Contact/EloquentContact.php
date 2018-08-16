<?php
namespace Reptern\Domain\Contact;

use Illuminate\Database\Eloquent\Model;

class EloquentContact extends Model
{
    protected $table = 'contacts';
    
    protected $fillable = ['contact_name','contact_phone_no','group_id','contact_avatar'];

    public function group()
    {
        return $this->belongsTo('Reptern\Domain\EloquentGroup');
    }
}
