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
        die(var_dump(\Library\Core\App::deployBundlesAssets()));
    }

    public function buildAssetsAction()
    {
        die(var_dump(\Library\Core\App::buildAssets()));
    }
}