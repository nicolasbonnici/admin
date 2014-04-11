<?php
namespace bundles\admin\Controllers;

/**
 * Admin bundle BundlesController
 *
 * @author info
 */
class BundlesController extends \Library\Core\Auth
{

    public function __preDispatch()
    {}

    public function __postDispatch()
    {}

    public function indexAction()
    {
        $this->aView['aBundles'] = \Library\Core\App::getBundles();
        $this->render('bundles/index.tpl');
    }

    public function deployAssetsAction()
    {
        die(var_dump(\Library\Core\Assets::deploy()));
    }

    public function buildAssetsAction()
    {
        die(var_dump(\Library\Core\App::buildAssets()));
    }

    public function clearCacheAction()
    {
        die(var_dump(\Library\Core\App::clearCache()));
    }
}