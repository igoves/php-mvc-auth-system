<?php

namespace App\Core;

use App\Utility;
use App\Utility\Config;
use App\Utility\Flash;
use Smarty;

/**
 * Core Controller:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Controller
{

    /** @var Smarty */
    protected $View;

    protected $lang;

    /**
     * Construct: Creates and stores a new instance of the core view class,
     * which can be accessed by any controller which extends this class.
     * @access public
     */
    public function __construct()
    {

        // Initialize a session.
        Utility\Session::init();

        // If the user is not logged in but a remember cookie exists then
        // attempt to login with cookie. NOTE: We only do this if we are not on
        // the login with cookie controller method (this avoids creating an
        // infinite loop).
        if (Utility\Input::get('url') !== 'loginWithCookie') {
            $cookie = Utility\Config::get('COOKIE_USER');
            $session = Utility\Config::get('SESSION_USER');
            if (!Utility\Session::exists($session) && Utility\Cookie::exists($cookie)) {
                Utility\Redirect::to(APP_URL . 'loginWithCookie');
            }
        }


        // Create a new instance of the core view class.
        $this->View = new Smarty();
        $this->View->template_dir = TEMPLATE_DIR;
        $this->View->compile_dir = COMPILE_DIR;
        $this->View->loadFilter('output', 'trimwhitespace');

        // Get language variable
        $this->lang = Utility\Lang::get();
        $this->View->assign('lang', $this->lang['lang']);
        $this->View->assign('lang_prefix', $this->lang['prefix']);
        $this->View->assign('main_url', $this->lang['main_url']);
        $this->View->configLoad(TEMPLATE_DIR . 'lang/' . $this->lang['lang'] . '.ini');

        // Flash messages
        if ($danger = Flash::danger()) {
            $this->View->assign('danger', $danger);
        }
        if ($info = Flash::info()) {
            $this->View->assign('info', $info);
        }
        if ($success = Flash::success()) {
            $this->View->assign('success', $success);
        }
        if ($warning = Flash::warning()) {
            $this->View->assign('warning', $warning);
        }
        if ($errors = Flash::session(Config::get('SESSION_ERRORS'))) {
            $this->View->assign('errors', $errors);
        }
    }
}
