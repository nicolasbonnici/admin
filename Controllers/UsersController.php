<?php
namespace bundles\admin\Controllers;

/**
 * Admin UsersController
 *
 * @author info
 */
class UsersController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $oUsers = new \app\Entities\Collection\UserCollection();
        $oUsers->load();
        $this->aView['oUsers'] = $oUsers;

        $this->render('users/index.tpl');
    }
}

