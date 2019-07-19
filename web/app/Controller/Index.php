<?php

namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;
use SmartyException;

/**
 * Index Controller:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class Index extends Core\Controller
{

    /** @var bool Flag authorization */
    private $is_logged = false;

    /**
     * Index: Renders the index view
     * @access public
     * @return void
     * @throws SmartyException
     */
    public function index()
    {

        // Get an instance of the user model using the ID stored in the session.
        if ($userID = Utility\Session::get(Utility\Config::get('SESSION_USER'))) {
            $user = Model\User::getInstance($userID);
            if ($data = $user->data()) {
                $this->View->assign('user', $data);
                $this->is_logged = true;
            }
        }
        $this->View->assign('is_logged', $this->is_logged);

        if (isset($_SERVER['HTTP_X_PJAX'])) {
            echo $this->View->fetch('index.tpl');
            die();
        }
        $this->View->display('extends:layout.tpl|index.tpl');
    }
}
