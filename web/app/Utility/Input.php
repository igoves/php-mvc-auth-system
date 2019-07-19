<?php

namespace App\Utility;

/**
 * Input:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Input
{

    /**
     * Check: Validates an input source against a defined set of validation
     * rules, returning true if the validation passed or storing the errors in
     * the session and returning false if not.
     * @access public
     * @param array $source
     * @param array $inputs
     * @param integer $recordID [optional]
     * @return boolean
     */
    public static function check(array $source, array $inputs, $recordID = null)
    {
        if (!Input::exists()) {
            return false;
        }
        if (!isset($source['csrf_token']) and ! Token::check($source['csrf_token'])) {
            Flash::danger(Text::get('INPUT_INCORRECT_CSRF_TOKEN'));
            return false;
        }
        $Validate = new Validate($source, $recordID);
        $validation = $Validate->check($inputs);
        if (!$validation->passed()) {
            Session::put(Config::get('SESSION_ERRORS'), $validation->errors());
            return false;
        }
        return true;
    }

    /**
     * Exists: Determines if a request exists by checking if the GET or POST
     * super-global is empty.
     * @access public
     * @param string $source [optional]
     * @return boolean
     */
    public static function exists($source = 'post'): bool
    {
        switch ($source) {
            case 'post':
                return !empty($_POST);
            case 'get':
                return !empty($_GET);
        }
        return false;
    }

    /**
     * Get: Returns the value of a specific key of the GET super-global, or a
     * default value if the variable is not set / is NULL.
     * @access public
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = '')
    {
        return($_GET[$key] ?? $default);
    }

    /**
     * Post: Returns the value of a specific key of the POST super-global, or a
     * default value if the variable is not set / is NULL.
     * @access public
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function post($key, $default = '')
    {
        return($_POST[$key] ?? $default);
    }
}
