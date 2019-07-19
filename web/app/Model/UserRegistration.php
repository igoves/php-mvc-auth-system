<?php

namespace App\Model;

use Bulletproof\Image;
use Exception;
use App\Utility;

/**
 * User Register Model:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class UserRegistration
{

    /** @var array The register form inputs. */
    private static $_inputs = [
        'forename' => [
            'required' => true
        ],
        'surname' => [
            'required' => true
        ],
        'email' => [
            'filter' => 'email',
            'required' => true,
            'unique' => 'users'
        ],
        'password' => [
            'min_characters' => 6,
            'required' => true
        ],
        'password_repeat' => [
            'matches' => 'password',
            'required' => true
        ],
    ];

    /**
     * Register: Validates the register form inputs, creates a new user in the
     * database and writes all necessary data into the session if the
     * registration was successful. Returns the new user's ID if everything is
     * okay, otherwise turns false.
     * @access public
     * @return boolean
     */
    public static function registration(): bool
    {

        // Validate the register form inputs.
        if (!Utility\Input::check($_POST, self::$_inputs)) {
            return false;
        }
        try {
            // Upload picture
            $picture = '';
            if (!empty($_FILES['picture']['tmp_name'])) {
                $image = new Image($_FILES);
                $image->setMime(array('jpeg', 'gif', 'jpg', 'png', 'bmp'));
                $image->setLocation(PUBLIC_ROOT . 'uploads');
                $image->setSize(1, 2621440);
                if ($image['picture']) {
                    $upload = $image->upload();
                    if ($upload) {
                        $picture = $image->getName() . '.' . $image->getMime();
                    } else {
                        Utility\Flash::info($image->getError());
                        return false;
                    }
                }
            }

            // Generate a salt, which will be applied to the during the password
            // hashing process.
            $salt = Utility\Hash::generateSalt(32);

            // Insert the new user record into the database, storing the unique
            // ID which will be returned on success.
            $User = new User;
            $userID = $User->createUser([
                'email' => Utility\Input::post('email'),
                'forename' => Utility\Input::post('forename'),
                'password' => Utility\Hash::generate(Utility\Input::post('password'), $salt),
                'salt' => $salt,
                'surname' => Utility\Input::post('surname'),
                'phone' => Utility\Input::post('phone'),
                'description' => Utility\Input::post('description'),
                'picture' => $picture
            ]);

            // Write all necessary data into the session as the user has been
            // successfully registered and return the user's unique ID.
            Utility\Flash::success(Utility\Text::get('REGISTER_USER_CREATED'));
            return $userID;
        } catch (Exception $ex) {
            Utility\Flash::danger($ex->getMessage());
        }
        return false;
    }
}
