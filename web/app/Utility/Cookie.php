<?php

namespace App\Utility;

/**
 * Cookie:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Cookie
{

    /**
     * Delete:
     * @access public
     * @param string $key
     * @return void
     */
    public static function delete($key)
    {
        self::put($key, '', time() - 1);
    }

    /**
     * Exists:
     * @access public
     * @param string $key
     * @return boolean
     */
    public static function exists($key): bool
    {
        return isset($_COOKIE[$key]);
    }

    /**
     * Get: Returns the value of a specific key of the COOKIE super-global
     * @access public
     * @param string $key
     * @return string
     */
    public static function get($key): string
    {
        return $_COOKIE[$key];
    }

    /**
     * Put:
     * @access public
     * @param string $key
     * @param string $value
     * @param integer $expiry
     * @return boolean
     */
    public static function put($key, $value, $expiry): bool
    {
        return setcookie($key, $value, time() + $expiry, '/');
    }
}
