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
        $oUsers = new \bundles\user\Entities\Collection\UserCollection();
        $oUsers->load();

        foreach ($oUsers as $oUser) {
//             $oRole loader le role et le passer a l objet de la collection envoyé à la vue
        }

        $this->aView['oUsers'] = $oUsers;

        $this->oView->render($this->aView, 'users/index.tpl');
    }
}

