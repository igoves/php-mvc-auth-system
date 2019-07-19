<?php

namespace App\Utility;

/**
 * Token:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Token
{

    /**
     * Generate: Returns a CSRF token and generate a new one if expired.
     * @access public
     * @return string
     */
    public static function generate(): string
    {
        $maxTime = 60 * 60 * 24;
        $tokenSession = Config::get('SESSION_TOKEN');
        $token = Session::get($tokenSession);
        $tokenTimeSession = Config::get('SESSION_TOKEN_TIME');
        $tokenTime = Session::get($tokenTimeSession);
        if ($maxTime + $tokenTime <= time() or empty($token)) {
            Session::put($tokenSession, md5(uniqid(mt_rand(), true)));
            Session::put($tokenTimeSession, time());
        }
        return Session::get($tokenSession);
    }

    /**
     * Check: Checks if the CSRF token stored in the session is same as in the
     * form submitted.
     * @access public
     * @param string $token
     * @return boolean
     */
    public static function check($token): bool
    {
        return $token === Session::get(Config::get('SESSION_TOKEN')) and !empty($token);
    }
}
