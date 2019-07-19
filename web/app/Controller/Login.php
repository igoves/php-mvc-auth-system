<?php

namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;
use App\Utility\Input;
use SmartyException;

/**
 * Login Controller:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Login extends Core\Controller
{


    /**
     * Login: Processes a login request. NOTE: This controller can only be
     * accessed by unauthenticated users!
     * @access public
     * @return void
     * @throws SmartyException
     * @example login
     */
    public function login()
    {

        // Check that the user is unauthenticated.
        Utility\Auth::checkUnauthenticated();

        if (!Input::exists()) {
            // Show view Login page
            $this->View->assign('title', 'Login');
            if (isset($_SERVER['HTTP_X_PJAX'])) {
                echo $this->View->fetch('login.tpl');
                die();
            }
            $this->View->display('extends:layout.tpl|login.tpl');
        } else {
            // Process the login request, redirecting to the home controller if
            // successful or back to the login controller if not.
            if (Model\UserLogin::login()) {
                Utility\Redirect::to(APP_URL . $this->lang['prefix']);
            }

            Utility\Redirect::to(APP_URL . $this->lang['prefix'] . '/' . 'login');
        }
    }

    /**
     * Login With Cookie: Processes a login with cookie request. NOTE: This
     * controller can only be accessed by unauthenticated users!
     * @access public
     * @return void
     * @example login/loginWithCookie
     */
    public function loginWithCookie()
    {

        // Check that the user is unauthenticated.
        Utility\Auth::checkUnauthenticated();

        // Process the login with cookie request, redirecting to the home
        // controller if successful or back to the login controller if not.
        if (Model\UserLogin::loginWithCookie()) {
            Utility\Redirect::to(APP_URL);
        }
        Utility\Redirect::to(APP_URL . $this->lang['prefix'] . '/' . 'login');
    }

    /**
     * Logout: Processes a logout request. NOTE: This controller can only be
     * accessed by authenticated users!
     * @access public
     * @return void
     * @example login/logout
     */
    public function logout()
    {

        // Check that the user is authenticated.
        Utility\Auth::checkAuthenticated();

        // Process the logout request, redirecting to the login controller if
        // successful or to the default controller if not.
        if (Model\UserLogin::logout()) {
            Utility\Redirect::to(APP_URL . $this->lang['prefix'] . '/' . 'login');
        }
        Utility\Redirect::to(APP_URL . $this->lang['prefix'] . '/');
    }
}
