<?php

namespace App\Utility;

/**
 * Lang:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Lang
{

    /**
     * Get: Returns the values of language flag
     * @access public
     * @return array
     */
    public static function get(): array
    {

        $_lang = [];

        $_lang['lang'] = 'en';
        $_lang['prefix'] = '';
        $_lang['main_url'] = '/';

        if ($url = Input::get('url')) {
            $parse_lang = explode('/', $url);

            if ($parse_lang[1] === 'ru') {
                $_lang['lang'] = 'ru';
                $_lang['prefix'] = '/ru';
                $_lang['main_url'] = $_lang['prefix'];
            }
        }

        return $_lang;
    }
}
