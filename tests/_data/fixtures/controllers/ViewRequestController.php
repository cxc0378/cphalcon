<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Controllers;

use Phalcon\Mvc\Controller;

/**
 * Class ViewRequestController
 */
class ViewRequestController extends Controller
{
    public function requestAction()
    {
        return $this->request->getPost('email', 'email');
    }

    public function viewAction()
    {
        return $this->view->setParamToView('born', 'this');
    }
}
