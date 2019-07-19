<?php

namespace App\Utility;

/**
 * Flash:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Flash
{

    /**
     * Session: Sets a session message or returns the value of a specific key of
     * the session.
     * @access public
     * @param string $key
     * @param string $value [optional]
     * @return string|null
     */
    public static function session($key, $value = '')
    {
        if (Session::exists($key)) {
            $session = Session::get($key);
            Session::delete($key);
            return $session;
        } elseif (!empty($value)) {
            return Session::put($key, $value);
        }
        return null;
    }

    /**
     * Danger: Sets a message or returns the value of the SESSION_FLASH_DANGER key of
     * the session.
     * @access public
     * @param string $value [optional]
     * @return string|null
     */
    public static function danger($value = '')
    {
        return self::session(Config::get('SESSION_FLASH_DANGER'), $value);
    }

    /**
     * Info: Sets a message or returns the value of the SESSION_FLASH_INFO key of the
     * session.
     * @access public
     * @param string $value [optional]
     * @return string|null
     */
    public static function info($value = '')
    {
        return self::session(Config::get('SESSION_FLASH_INFO'), $value);
    }

    /**
     * Success: Sets a message or returns the value of the SESSION_FLASH_SUCCESS key of
     * the session.
     * @access public
     * @param string $value [optional]
     * @return string|null
     */
    public static function success($value = '')
    {
        return self::session(Config::get('SESSION_FLASH_SUCCESS'), $value);
    }

    /**
     * Warning: Sets a message or returns the value of the SESSION_FLASH_WARNING key of
     * the session.
     * @access public
     * @param string $value [optional]
     * @return string|null
     */
    public static function warning($value = '')
    {
        return self::session(Config::get('SESSION_FLASH_WARNING'), $value);
    }
}
