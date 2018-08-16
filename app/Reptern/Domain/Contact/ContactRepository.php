<?php 
namespace Reptern\Domain\Contact;

/**
 * This interface will contains the  methods to be enforced on the 
 * repository implementation bounded only on this certain module.
 * 
 */
interface ContactRepository {

    public function generateAvatar($name);
	
}

