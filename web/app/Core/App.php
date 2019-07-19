<?php

namespace App\Core;

use Bit55\Litero\Router;
use App\Utility\Redirect;

/**
 * Core App:
 *
 * @author Igor Veselov <dev@xfor.top>
 */
class App
{

    /**
     * Run: Calls the controller class
     * @access public
     * @return void
     */
    public function __construct()
    {

        $router = Router::fromGlobals();
        $router->add(ROUTES);
        if ($router->isFound()) {
            $router->executeHandler(
                $router->getRequestHandler(),
                $router->getParams()
            );
        } else {
            Redirect::to(404);
        }
    }
}
