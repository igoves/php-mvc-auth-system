<?php

namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;
use App\Utility\Input;
use SmartyException;

/**
 * Register Controller:
 *
 * @author Igor Veselov <dev@xfor.top>
 * @since 1.0.2
 */
class Registration extends Core\Controller
{

    /**
     * Register: Processes a create account request. NOTE: This controller can
     * only be accessed by unauthenticated users!
     * @access public
     * @return void
     * @throws SmartyException
     */
    public function registration()
    {

        // Check that the user is unauthenticated.
        Utility\Auth::checkUnauthenticated();

        if (!Input::exists()) {
            // Show view Registration
            $this->View->assign('title', 'Registration');
            if (isset($_SERVER['HTTP_X_PJAX'])) {
                echo $this->View->fetch('registration.tpl');
                die();
            }
            $this->View->display('extends:layout.tpl|registration.tpl');
        } else {
            // Process the register request, redirecting to the login controller if
            // successful or back to the register controller if not.
            if (Model\UserRegistration::registration()) {
                Utility\Redirect::to(APP_URL . $this->lang['prefix'] .'/'. 'login');
            }
            Utility\Redirect::to(APP_URL . $this->lang['prefix'] .'/'. 'registration');
        }
    }
}
