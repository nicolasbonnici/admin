<?php
namespace bundles\admin\Controllers;

use app\Entities\Todo;
/**
 * Admin bundle AclController
 *
 * @author info
 */
class AssetsController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $oAssets = new \Library\Core\Assets();
        die(var_dump($oAssets->get(), $oAssets->build()));
    }

    public function deployAssetsAction()
    {
        die(var_dump(\Library\Core\Assets::deploy()));
    }

    public function buildAssetsAction()
    {
        die(var_dump(\Library\Core\App::buildAssets()));
    }

}