<?php
namespace bundles\admin\Controllers;

use app\Entities\Todo;
/**
 * Admin bundle AclController
 *
 * @author info
 */
class AclController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {

        $oGlobalPermissionsCollection =  new \app\Entities\Collection\PermissionCollection();
        $oGlobalPermissionsCollection->load();// @todo Securiser ce genre de traitement pour le big data

        // @todo Only load entities that user can manage, update permission entities json object structure
        $oGlobalRessourcesCollection = new \app\Entities\Collection\RessourceCollection();
        $oGlobalRessourcesCollection->load(); // !!

        $oGlobalGroupsCollection = new \app\Entities\Collection\GroupCollection();
        $oGlobalGroupsCollection->load(); // !!

        $this->aView['oPermissions'] = $oGlobalPermissionsCollection;
        $this->aView['oRessources'] = $oGlobalRessourcesCollection;
        $this->aView['oGroups'] = $oGlobalGroupsCollection;
        $this->render('acl/index.tpl');
    }
}