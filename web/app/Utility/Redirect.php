<?php

namespace App\Utility;

/**
 * Redirect:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Redirect
{

    /**
     * To: Redirects to a specific path.
     * @access public
     * @param string $location [optional]
     * @return bool
     */
    public static function to($location = ''): bool
    {
        if ($location) {
            if ($location === 404) {
                header('HTTP/1.0 404 Not Found');
                include TEMPLATE_DIR . '404.tpl';
            } else {
                header('Location: ' . $location);
            }
            exit();
        }
        return false;
    }
}
