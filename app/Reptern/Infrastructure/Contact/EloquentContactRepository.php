<?php 
namespace Reptern\Infrastructure\Contact;

use Reptern\Application\EloquentRepository as Repository;
use Reptern\Domain\Contact\ContactRepository as ContactRepositoryInterface;
use Reptern\Domain\Contact\EloquentContact as Contact;

class EloquentContactRepository extends Repository implements ContactRepositoryInterface {

    private $contact;

    public function __construct(Contact $contact)
    {
        $this->setEntity($contact);
    }

    /**
     * Generate avatar for a certain contact
     *
     * @param      string  $name   
     *
     * @return     string  
     */
    public function generateAvatar($name)
    {
        $imgName = 'user_'.time().'.png';
        $avatar =  new \LetterAvatar($name, 'square', 64);
        $avatar->saveAs(public_path('img/avatars/'.$imgName));
        return $imgName;
    }
	
}

