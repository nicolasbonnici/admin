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

        // @todo Only load entities that user can manage, update permission entities json object structure
        $oGlobalRessourcesCollection = new \bundles\admin\Entities\Collection\RessourceCollection();
        $oGlobalRessourcesCollection->load(); // @todo Securiser ce genre de traitement pour le big data
        foreach ($oGlobalRessourcesCollection as $oRessource) {
            $oRessource->oPermissionsCollection =  new \app\Entities\Collection\PermissionCollection();
            $oRessource->oPermissionsCollection->loadByParameters(array('ressource_idressource' => $oRessource->getId()));
            // Decode json permissions
            foreach ($oRessource->oPermissionsCollection as $oPermission) {
                $oPermission->permission = json_decode($oPermission->permission);
            }
        }

        $oGlobalGroupsCollection = new \bundles\user\Entities\Collection\GroupCollection();
        $oGlobalGroupsCollection->load(); // !!
        $this->aView['oRessources'] = $oGlobalRessourcesCollection;
        $this->aView['oGroups'] = $oGlobalGroupsCollection;
        $this->oView->render($this->aView, 'acl/index.tpl');
    }
}