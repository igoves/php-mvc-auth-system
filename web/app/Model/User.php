<?php

namespace App\Model;

use Exception;
use App\Core;
use App\Utility;

/**
 * User Model:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class User extends Core\Model
{

    /**
     * Create User: Inserts a new user into the database, returning the unique
     * user if successful, otherwise returns false.
     * @access public
     * @param array $fields
     * @return string|boolean
     * @throws Exception
     */
    public function createUser(array $fields)
    {
        if (!$userID = $this->create('users', $fields)) {
            throw new Exception(Utility\Text::get('USER_CREATE_EXCEPTION'));
        }
        return $userID;
    }

    /**
     * Get Instance: Returns an instance of the User model if the specified user
     * exists in the database.
     * @access public
     * @param string $user
     * @return User|null
     */
    public static function getInstance($user)
    {
        $User = new self();
        if ($User->findUser($user)->exists()) {
            return $User;
        }
        return null;
    }

    /**
     * Find User: Retrieves and stores a specified user record from the database
     * into a class property. Returns true if the record was found, or false if
     * not.
     * @access public
     * @param string $user
     * @return bool|object
     */
    public function findUser($user)
    {
        $field = filter_var($user, FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($user) ? 'id' : 'username');
        return $this->find('users', [$field, '=', $user]);
    }
    
    

    /**
     * Update User: Updates a specified user record in the database.
     * @access public
     * @param array $fields
     * @param integer $userID [optional]
     * @return void
     * @throws Exception
     */
    public function updateUser(array $fields, $userID = null)
    {
        if (!$this->update('users', $fields, $userID)) {
            throw new Exception(Utility\Text::get('USER_UPDATE_EXCEPTION'));
        }
    }
}
